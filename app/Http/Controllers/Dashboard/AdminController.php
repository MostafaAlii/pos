<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Contract\AdminInterface;
use App\DataTables\AdminDatatable;
use Illuminate\Http\Request;
class AdminController extends Controller {
    private $admin, $adminDataTable;
    public function __construct(AdminInterface $admin){
        $this->admin = $admin;
    }
    public function index(AdminDatatable $adminDataTable) {
        return $this->admin->index($adminDataTable);
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }
}
