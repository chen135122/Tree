<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldIndexUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_index_user', function (Blueprint $table) {
            $table->integer('field_index_id')->unsigned();
            $table->foreign('field_index_id')->references('id')->on('field_indices');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });

        DB::statement("ALTER TABLE `field_index_user` comment '用户选择要查看的列表列'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('field_index_user');
    }
}
