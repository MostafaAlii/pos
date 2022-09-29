<?php
namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AdminProfileController extends Controller {
    public function edit() {
        $admin = auth('admin')->user();
        return view('dashboard.admins.profile', array('admin' => $admin));
    }

    public function update(Request $request) {
        $admin = $request->get('admin')->user();
        $admin->profile()->fill($request->all())->save();
        return redirect()->route('dashboard.admins.profile.edit')->with('success', 'Profile updated!');
    }
}
