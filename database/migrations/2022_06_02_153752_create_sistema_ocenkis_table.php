<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistema_ocenkis', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('text1')->nullable();
            $table->string('text2')->nullable();
            $table->string('text3')->nullable();
            $table->string('text4')->nullable();
            $table->string('text5')->nullable();
            $table->string('text6')->nullable();
            $table->string('text7')->nullable();
            $table->string('text8')->nullable();
            $table->string('text9')->nullable();
            $table->string('text10')->nullable();
            $table->string('text11')->nullable();
            $table->string('text12')->nullable();
            $table->string('text13')->nullable();
            $table->string('text14')->nullable();
            $table->string('text15')->nullable();
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
        Schema::dropIfExists('sistema_ocenkis');
    }
};
