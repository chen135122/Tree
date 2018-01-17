<?php

use App\Models\Field;
use Illuminate\Database\Seeder;

class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::all()->pluck('id');

        foreach ($this->getData() as $data) {
            $field = Field::create($data);
            // 默认每个用户都显示列
            $field->users()->attach($users);
        }
    }

    protected function getData()
    {
        return [
            [
                'json_data' => json_encode(
                    ['zh' => 'ID', 'en' => 'ID']
                ),
                'table_name' => 'roles',
                'field_name' => 'id',
            ],
            [
                'json_data' => json_encode(
                    ['zh' => '名字', 'en' => 'name']
                ),
                'table_name' => 'roles',
                'field_name' => 'name',
            ],
            [
                'json_data' => json_encode(
                    ['zh' => '描述', 'en' => 'description']
                ),
                'table_name' => 'roles',
                'field_name' => 'description',
            ],
            [
                'json_data' => json_encode(
                    ['zh' => '创建时间', 'en' => 'created time']
                ),
                'table_name' => 'roles',
                'field_name' => 'created_at',
            ],
            [
                'json_data' => json_encode(
                    ['zh' => '修改时间', 'en' => 'updated time']
                ),
                'table_name' => 'roles',
                'field_name' => 'updated_at',
            ],
            [
                'json_data' => json_encode(
                    ['zh' => '创建人', 'en' => 'created person']
                ),
                'table_name' => 'roles',
                'field_name' => 'created_id',
            ],
            [
                'json_data' => json_encode(
                    ['zh' => '修改人', 'en' => 'updated person']
                ),
                'table_name' => 'roles',
                'field_name' => 'updated_at',
            ],
            [
                'json_data' => json_encode(
                    ['zh' => '操作', 'en' => 'operate']
                ),
                'table_name' => 'roles',
                'field_name' => '',
            ],
        ];
    }
}
