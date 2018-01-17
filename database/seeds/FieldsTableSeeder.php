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

            $instance = new $data['model'];

            $columns = $this->getTableColumns($instance);
            $data = $this->transformData($columns, $data['group']);
            Field::insert($data);
        }
    }

    protected function getModels()
    {
        return [
            [
                'model' => \Spatie\Permission\Models\Role::class,
                'group' => 'roles'
            ],
            [
                'model' => \Spatie\Permission\Models\Permission::class,
                'group' => 'permissions'
            ],
            [
                'model' => \App\Models\User::class,
                'group' => 'users'
            ]
        ];
    }

    protected function getTableColumns($instance)
    {
        $columns = $instance->getConnection()->getSchemaBuilder()->getColumnListing($instance->getTable());

        return $columns;
    }

    protected function transformData(array $columns, $group)
    {
        $data = [];
        foreach ($columns as $column) {
            $data[] = [
                'field' => $column,
                'group' => $group
            ];
        }

        return $data;
    }
}
