<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsI18nTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records_i18n', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('record_id');
            $table->string('name')->nullable();
            $table->longText('text')->nullable();
            $table->string('h1')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->enum('language', ['ru', 'ua', 'en'])->default('ru');

            $table->foreign('record_id')->references('id')->on('records');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records_i18n');
    }
}
