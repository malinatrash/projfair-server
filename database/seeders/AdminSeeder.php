<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Admin::create([
            'username'     => 'Admin',            
            'password' => bcrypt('secret'),
           // 'name'    => 'adm',
           'email'    => 'admin@example.org',
        ]);
    }
}
