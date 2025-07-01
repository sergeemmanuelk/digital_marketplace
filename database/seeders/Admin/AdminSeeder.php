<?php

namespace Database\Seeders\Admin;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();
        $admin->first_name = 'Super';
        $admin->last_name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('password');
        $admin->save();
    }
}
