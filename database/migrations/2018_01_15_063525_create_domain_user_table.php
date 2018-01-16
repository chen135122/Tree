<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_user', function (Blueprint $table) {
            $table->integer('domain_id')->unsigned();
            $table->foreign('domain_id')->references('id')->on('domains');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });

        DB::statement("ALTER TABLE `domain_user` comment '用户和区域多对多关联表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domain_user');
    }
}
