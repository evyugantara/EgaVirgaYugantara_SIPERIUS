<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Spatie\Permission\Middleware\PermissionMiddleware;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Role::create(["name" => "Pusakawan"]);
         Permission::create(['nama' => 'edit_user']);
         Role::create(["name" => "Mahasiswa"]);
         Permission::create(['name' => 'view_book']) ;

    }
}

