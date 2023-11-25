<?php

namespace App\DataTables;

use App\Models\Contract;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ContractsDataTable extends DataTable
{
    protected $totalContracts;
    protected $lastContract;

    public function __construct()
    {
        $this->totalContracts = Contract::count();
        $this->lastContract = Contract::latest()->first();
    }

    public function getTotalContracts()
    {
        return $this->totalContracts;
    }

    public function getLastContract()
    {
        return $this->lastContract;
    }
    
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): \Yajra\DataTables\EloquentDataTable
    {
        return (new \Yajra\DataTables\EloquentDataTable($query))
            ->addColumn('contract_number', function (Contract $contract) {
                return $contract->contract_number;
            })
            ->addColumn('supervisor', function (Contract $contract) {
                return $contract->supervisor->name; // Assuming 'supervisor' is a relationship on your Contract model
            })
            ->addColumn('delegate', function (Contract $contract) {
                return $contract->delegate->name; // Assuming 'delegate' is a relationship on your Contract model
            })
            ->editColumn('created_by', function (Contract $contract) {
                return $contract->created_by;
            })
            ->editColumn('created_at', function (Contract $contract) {
                return $contract->created_at->format('d M Y, h:i a');
            })

            ->editColumn('cancelled_at', function (Contract $contract) {
                return $contract->cancelled_at ? $contract->cancelled_at->format('d M Y, h:i a') : 'N/A';
            })
            ->addColumn('action', function (Contract $contract) {
                return view('pages/apps.contracts.columns._actions', compact('contract')); // Create a Blade view for your action buttons
            })
            ->rawColumns(['supervisor', 'delegate', 'created_at', 'cancelled_at', 'action']) // Specify the columns that should be rendered as raw HTML
            ->setRowId('id');
    }


    /**
     * Get the query source of dataTable.
     */
    public function query(Contract $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('contracts-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('rt' . "<'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",)
            ->addTableClass('table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer text-gray-600 fw-semibold')
            ->setTableHeadClass('text-start text-muted fw-bold fs-7 text-uppercase gs-0')
            ->orderBy(2)
            ->drawCallback("function() {" . file_get_contents(resource_path('views/pages/apps/contracts/columns/_draw-scripts.js')) . "}");
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('contract_number'),
            Column::make('supervisor'),
            Column::make('delegate'),
            Column::make('created_by')->addClass('text-nowrap'),
            Column::make('created_at')->addClass('text-nowrap'),
            Column::make('cancelled_at')->addClass('text-nowrap'),
            Column::computed('action')
                ->addClass('text-end text-nowrap')
                ->exportable(false)
                ->printable(false)
                ->width(60)
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Contracts_' . date('YmdHis');
    }
}
