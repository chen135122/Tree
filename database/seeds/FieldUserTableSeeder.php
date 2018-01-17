<?php

use Illuminate\Database\Seeder;

class FieldUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = \App\Models\Field::all()->pluck('id');

        \App\Models\User::all()->each(function($user) use ($fields) {

            // 往显示字段表加入
            $user->fields()->attach($fields);
        });
    }
}
