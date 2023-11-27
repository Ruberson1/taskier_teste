<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws BindingResolutionException
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Bueno Admin',
                'email' => 'bueno@network.com',
                'password' => app('hash')->make('bueno@teste')
            ],
        ];

        User::insert($users);
    }
}
