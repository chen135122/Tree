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
            ['name' => '增加区域', 'route' => 'guards.store', 'group' => 'domain'],
            ['name' => '修改区域', 'route' => 'guards.update', 'group' => 'domain'],
            ['name' => '删除区域', 'route' => 'guards.destroy', 'group' => 'domain']
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
