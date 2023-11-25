<?php

namespace App\Http\Controllers\Apps;

use App\Models\Contract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\ContractsDataTable;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ContractsDataTable $dataTable)
    {
        $totalContracts = $dataTable->getTotalContracts();
        $lastContract = $dataTable->getLastContract();

        return $dataTable->render('pages/apps.contracts.index', compact('totalContracts', 'lastContract'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Contract $contract)
    {
        return view('pages/apps.contracts.show', compact('contract'));
    }
}
