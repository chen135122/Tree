<?php

use App\Models\FieldIndex;
use Illuminate\Database\Seeder;

class FieldIndeicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::all()->pluck('id');

        \App\Models\Field::all()->each(function($instance) use ($users){
            // 字段列表
            $fields = json_decode($instance->json_fields);
            foreach ($fields as $field) {
                $fixeldIndex = FieldIndex::create(
                    [
                        'table_name' => $instance->table_name,
                        'field_name' => $field
                    ]
                );

                // 默认每个用户都开启所有列
                $fixeldIndex->users()->attach($users);
            }

        });
    }
}
