<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['name' => '增加区域', 'route' => 'guards.store'],
            ['name' => '修改区域', 'route' => 'guards.update'],
            ['name' => '删除区域', 'route' => 'guards.destroy']
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
