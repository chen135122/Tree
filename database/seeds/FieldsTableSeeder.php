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

        foreach ($this->getModels() as $data) {
            Field::insert($data);
        }
    }

    protected function getModels()
    {
        return [
            [
                'json_fields' => json_encode(
                    [
                        'id',
                        'name',
                        'description',
                        'created_at',
                        'updated_at',
                        'created_at',
                        'updated_at'
                    ]
                ),
                'table_name' => 'roles.index'
            ]
        ];
    }
}
