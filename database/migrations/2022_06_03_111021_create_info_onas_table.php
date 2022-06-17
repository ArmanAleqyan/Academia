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
        Schema::create('info_onas', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('info')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('vkontakte')->nullable();
            $table->string('telegram')->nullable();
            $table->string('god')->nullable();
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
        Schema::dropIfExists('info_onas');
    }
};
