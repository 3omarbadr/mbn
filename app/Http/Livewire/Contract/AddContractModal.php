<?php

namespace App\Http\Livewire\Contract;

use App\Models\Contract;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AddContractModal extends Component
{
    public $contract_id;
    public $contract_number;
    public $supervisor_id;
    public $delegate_id;
    public $created_by;
    public $cancelled_by;
    public $cancelled_at;

    public $edit_mode = false;

    protected $rules = [
        'contract_number' => 'required|integer',
        'supervisor_id' => 'required',
        'delegate_id' => 'required',
        'cancelled_by' => 'nullable|string',
        'cancelled_at' => 'nullable|date',
    ];

    protected $listeners = [
        'delete_contract' => 'deleteContract',
        'update_contract' => 'updateContract',
    ];

    public function render()
    {
        $supervisors = User::role('supervisor')->get();
        $delegates = User::role('delegate')->get();

        return view('livewire.contract.add-contract-modal', compact('supervisors', 'delegates'));
    }

    public function submit()
    {
        $this->validate();

        DB::transaction(function () {
            $data = [
                'contract_number' => $this->contract_number,
                'supervisor_id' => $this->supervisor_id,
                'delegate_id' => $this->delegate_id,
                'created_by' => auth()->user()->name,
                'cancelled_by' => $this->cancelled_by,
                'cancelled_at' => $this->cancelled_at,
            ];

            $contract = $this->contract_id ? Contract::find($this->contract_id) : new Contract;

            foreach ($data as $key => $value) {
                $contract->$key = $value;
            }

            $contract->save();

            $this->emit('success', $this->contract_id ? 'Contract updated' : 'New contract created');
        });

        $this->reset();
    }

    public function deleteContract($id)
    {
        Contract::destroy($id);
        $this->emit('success', 'Contract successfully deleted');
    }

    public function updateContract($id)
    {
        $this->edit_mode = true;

        $contract = Contract::find($id);

        $this->contract_id = $contract->id;
        $this->contract_number = $contract->contract_number;
        $this->supervisor_id = $contract->supervisor_id;
        $this->delegate_id = $contract->delegate_id;
        $this->created_by = auth()->user()->name;
        $this->cancelled_by = $contract->cancelled_by;
        $this->cancelled_at = $contract->cancelled_at ? $contract->cancelled_at->toDateString() : null;
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
