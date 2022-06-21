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
        Schema::create('meslekyuksekokul', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meslekyuksekokul_id');
            $table->string('meslekyuksekokul_name');
            $table->timestamps();

            $table->foreign('meslekyuksekokul_id')
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
        Schema::dropIfExists('meslekyuksekokul');
    }
};
