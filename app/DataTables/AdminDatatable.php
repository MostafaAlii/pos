<?php
namespace App\DataTables;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
class AdminDatatable extends DataTable {
    public function dataTable(QueryBuilder $query): EloquentDataTable {
        return (new EloquentDataTable($query))
        ->addColumn('action', 'dashboard.admins.btn.action');
    }

    public function query(Admin $model) {
        return $model->query();
    }

    public function html(): HtmlBuilder {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->parameters([$this->getBuilderParameters()]);
    }

    protected function getColumns(): array {
        return [
            'name',
            'email',
            'created_at',
            'action',
        ];
    }

    protected function filename(): string {
        return 'Admin_' . date('YmdHis');
    }
}
