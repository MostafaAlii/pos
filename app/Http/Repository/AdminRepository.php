<?php
namespace App\Http\Repository;
use App\Models\Admin;
use App\Http\Contract\AdminInterface;
use App\DataTables\AdminDatatable;
class AdminRepository implements AdminInterface {
    public function __construct(AdminDatatable $adminDataTable) {
        $this->adminDataTable = $adminDataTable;
    }

    public function index($adminDataTable) {
        return $adminDataTable->render('dashboard.admins.index');
    }
}