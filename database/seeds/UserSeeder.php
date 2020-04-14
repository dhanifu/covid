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
        User::create([
            'name' => 'Ri Jeong Hyeok',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
