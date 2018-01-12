<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            ['name' => '中国'],
            ['name' => '美国'],
            ['name' => '澳大利亚'],
        ];

        \App\Models\Area::insert($areas);
    }
}
