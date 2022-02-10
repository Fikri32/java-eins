<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Aldog',
            'email' => 'admin@javaeins.com',
            'password' => bcrypt('admin123')
        ]);
        $admin->assignRole('admin');
    }
}
