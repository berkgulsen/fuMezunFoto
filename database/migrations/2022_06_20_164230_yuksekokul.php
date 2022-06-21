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
        Schema::create('yuksekokul', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('yuksekokul_id');
            $table->string('yuksekokul_name');
            $table->timestamps();

            $table->foreign('yuksekokul_id')
                  ->references('id')
                  ->on('akademi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yuksekokul');
    }
};
