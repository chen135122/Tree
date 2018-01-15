<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['role' => ['name' => '超级管理员'], 'ids' => Permission::all()->pluck('id')],
            ['role' => ['name' => '管理员'], 'ids' => Permission::inRandomOrder()->first()->id],
            ['role' => ['name' => '没用的'], 'ids' => []],
        ];

        foreach ($roles as $role) {
            $currRole = Role::create($role['role']);
            $currRole->permissions()->attach($role['ids']);
        }
    }
}
