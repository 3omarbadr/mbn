<?php

namespace App\Http\Livewire\Commission;

use App\Models\Commission;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AddCommissionModal extends Component
{
    public $user_id;
    public $commission_id;
    public $amount;
    public $commission_type;
    public $commission_source;
    public $max_counter;

    // Define commission rates as constants
    const LOW_RATE = 1;
    const MEDIUM_RATE = 15;
    const HIGH_RATE = 20;

    public $edit_mode = false;

    protected $rules = [
        'user_id' => 'required|exists:users,id',
        'amount' => 'required|numeric',
        'commission_type' => 'required|in:fixed,percentage',
        'commission_source' => 'required|integer',
        'max_counter' => 'required|integer',
    ];

    protected $listeners = [
        'delete_commission' => 'deleteCommission',
        'update_commission' => 'updateCommission',
    ];

    public function render()
    {
        $users = User::all(); // Assuming you want to list all users

        return view('livewire.commission.add-commission-modal', compact('users'));
    }

    public function submit()
    {
        $this->validate();

        DB::transaction(function () {
            $commission = new Commission;
            if ($this->edit_mode) {
                $commission = Commission::find($this->commission_id);
            }

            if ($this->commission_type == 'percentage') {
                // Calculate the commission percentage
                $commissionPercentage = $this->calculateCommissionPercentage($this->max_counter);

                $amount = ($this->amount * $commissionPercentage) / 100; // Calculate amount based on percentage
            }

            $commission->fill([
                'user_id' => $this->user_id,
                'amount' => $amount ?? $this->amount,
                'commission_type' => $this->commission_type,
                'commission_source' => $this->commission_source,
                'max_counter' => $this->max_counter,
            ]);

            $commission->save();

            $this->emit('success', $this->edit_mode ? 'Commission updated' : 'New commission created');
        });

        $this->reset();
    }


    private function calculateCommissionPercentage($maxCounter)
    {
        return match (true) {
            $maxCounter <= 10 => self::LOW_RATE,
            $maxCounter <= 15 => self::MEDIUM_RATE,
            $maxCounter > 20 => self::HIGH_RATE,
            default => 0, // Default commission rate
        };
    }


    public function updatedMaxCounter($value)
    {
        if ($this->commission_type == 'percentage') {
            $commissionPercentage = $this->calculateCommissionPercentage($value);
            $this->amount = ($this->amount * $commissionPercentage) / 100;
        }
    }

    public function deleteCommission($id)
    {
        Commission::destroy($id);
        $this->emit('success', 'Commission successfully deleted');
    }

    public function updateCommission($id)
    {
        $this->edit_mode = true;
        $commission = Commission::find($id);

        $this->commission_id = $commission->id;
        $this->user_id = $commission->user_id;
        $this->amount = $commission->amount;
        $this->commission_type = $commission->commission_type;
        $this->commission_source = $commission->commission_source;
        $this->max_counter = $commission->max_counter;
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
