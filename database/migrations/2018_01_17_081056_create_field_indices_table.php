<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldIndicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_indices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('table_name');
            $table->string('field_name');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `field_indices` comment '字段列表表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('field_indices');
    }
}
