<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'username' => 'superadmin',
                'email' => 'admin@app.com',
                'password' => bcrypt('password'),
                'phone_number' => '+62-8829-495-9012',
                'email_verified_at' => now(),
                'user_type' => 'admin',
                'status' => 'active',
            ],
            [
                'first_name' => 'Demo',
                'last_name' => 'Admin',
                'username' => 'demoadmin',
                'email' => 'demo@app.com',
                'password' => bcrypt('password'),
                'phone_number' => '+62-8829-495-9012',
                'email_verified_at' => now(),
                'user_type' => 'demo_admin',
            ],
            [
                'first_name' => 'John',
                'last_name' => 'User',
                'username' => 'user',
                'email' => 'user@app.com',
                'password' => bcrypt('password'),
                'phone_number' => '+62-8829-495-9012',
                'email_verified_at' => now(),
                'user_type' => 'user',
                'status' => 'inactive'
            ]
        ];
        foreach ($users as $key => $value) {
            $user = User::create($value);
            $user->assignRole($value['user_type']);
        }
    }
}
