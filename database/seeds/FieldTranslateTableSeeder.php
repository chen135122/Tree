<?php

use Illuminate\Database\Seeder;

class FieldTranslateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Field::all()->each(function($field) {
           dd(json_decode($field->json_fields),$field->json_field);
       });
    }

    protected function getModels()
    {

    }
}
