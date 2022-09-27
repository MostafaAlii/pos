<?php
namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Factories\AdminFactory;
use Illuminate\Support\Facades\{DB, Schema};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class AdminSeeder extends Seeder {
    public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('admins')->truncate();
        Admin::create([
            'name' => 'Mostafa',
            'email' => 'mostafa@app.com',
            'username' => 'mostafa',
            'phone_number' => '01000000000',
            'password' => bcrypt('123123'),
            'remember_token' => Str::random(10),
            'super_admin' => 1,
            'status' => 1,
        ]);
        AdminFactory::new()->count(1)->create();
        Schema::enableForeignKeyConstraints();
    }
}
