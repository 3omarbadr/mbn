<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\CommissionsDataTable;
use App\Models\Commission;

class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CommissionsDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.commissions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Commission $commission)
    {
        return view('pages/apps.commissions.show', compact('commission'));
    }
}
