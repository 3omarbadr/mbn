<?php

namespace App\DataTables;

use App\Models\Commission;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CommissionsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('amount', function (Commission $commission) {
                return $commission->amount;
            })
            ->addColumn('user', function (Commission $commission) {
                return $commission->user->name; // Assuming 'user' is a relationship on your Commission model
            })
            ->addColumn('commission_type', function (Commission $commission) {
                return $commission->commission_type;
            })
            ->addColumn('commission_source', function (Commission $commission) {
                return $commission->commission_source;
            })
            ->addColumn('max_counter', function (Commission $commission) {
                return $commission->max_counter;
            })
            ->editColumn('created_at', function (Commission $commission) {
                return $commission->created_at->format('d M Y, h:i a');
            })
            ->addColumn('action', function (Commission $commission) {
                return view('pages.apps.commissions.columns._actions', compact('commission')); // Create a Blade view for your action buttons
            })
            ->rawColumns(['user', 'commission_type', 'commission_source', 'created_at', 'action']) // Specify the columns that should be rendered as raw HTML
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Commission $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('commissions-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('rt' . "<'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",)
            ->addTableClass('table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer text-gray-600 fw-semibold')
            ->setTableHeadClass('text-start text-muted fw-bold fs-7 text-uppercase gs-0')
            ->orderBy(1)
            ->drawCallback("function() {" . file_get_contents(resource_path('views/pages/apps/commissions/columns/_draw-scripts.js')) . "}");
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('user'),
            Column::make('amount'),
            Column::make('commission_type'),
            Column::make('commission_source'),
            Column::make('max_counter')->addClass('text-nowrap'),
            Column::make('created_at')->addClass('text-nowrap'),
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
        return 'Commissions_' . date('YmdHis');
    }
}
