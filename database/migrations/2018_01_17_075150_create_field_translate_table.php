<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldTranslateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_translate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('language')->comment('语言种类');
            $table->text('json_fields')->comment('翻译的内容');

            $table->integer('field_id')->unsigned();
            $table->foreign('field_id')->references('id')->on('field_ids');

            $table->timestamps();
        });

        DB::statement("ALTER TABLE `field_translate` comment '字段翻译表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('field_translate');
    }
}
