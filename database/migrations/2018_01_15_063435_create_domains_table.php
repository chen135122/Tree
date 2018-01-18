<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->comment('区域的名字');
            $table->string('description')->default('')->comment('区域的描述');

            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();

            $table->timestamps();
        });

        DB::statement("ALTER TABLE `domains` comment '区域表，用户有多个区域'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domains');
    }
}
