<?php

use App\Models\Domain;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 区域的所有ID
        $domains_id = Domain::all()->pluck('id');
        // 角色所有ID
        $roles_id = Role::all()->pluck('id');

        factory(\App\Models\User::class, 20)->create()->each(
            function($user) use ($domains_id, $roles_id) {
                // 给予区域
                $count = mt_rand(1, count($domains_id));
                $user->domains()->attach($domains_id->random($count));

                // 给予角色
                $count = mt_rand(1, count($roles_id));
                $user->roles()->attach($roles_id->random($count));
            }
        );
    }
}
