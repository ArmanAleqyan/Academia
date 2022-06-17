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
        Schema::create('user_tarifs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('tariff_id');
            $table->string('treaty')->nullable();
            $table->string('file')->nullable();
            $table->string('filestatus')->nullable();
            $table->string('status')->default(0);
            $table->string('ready_report')->default(0);
            $table->dateTime('expiration_at')->nullable();
            $table->dateTime('finish_data')->nullable();
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
        Schema::dropIfExists('user_tarifs');
    }
};
