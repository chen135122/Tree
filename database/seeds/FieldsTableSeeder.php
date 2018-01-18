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
        $json = __DIR__ . '/../data/fields.json';

        $json = file_get_contents($json);
        return json_decode($json, true);
    }
}
