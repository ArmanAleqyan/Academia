<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@mail.ru',
            'password' => Hash::make('11111111'),
            'phone' => '45454545',
            'verify' => 1,
            'photo' => 'default.png',
            'role_id' => Role::ADMIN_ID,
        ]);
      
    }
}
