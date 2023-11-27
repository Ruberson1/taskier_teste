<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws BindingResolutionException
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'admin'],
            ['name' => 'common'],
        ];

        Permission::insert($permissions);
    }
}
