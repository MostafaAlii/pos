<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class WorldSeeder extends Seeder {
    public function run() {
        $sql_file_path = public_path('pos_woprld.sql');
        $db_conn = [
            'host' => '127.0.0.1',
            'database' => 'pos',
            'username' => 'root',
            'password' => 'root',
        ];
        exec("mysql --user={$db_conn['username']} --password={$db_conn['password']} --host={$db_conn['host']} --database={$db_conn['database']} < $sql_file_path");
    }
}
