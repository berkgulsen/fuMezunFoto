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
        Schema::create('yuksekokulAlt', function (Blueprint $table) {
            $table->id();
            $table->string('bolum_name');
            $table->unsignedBigInteger('yuksekokul_id');
            $table->timestamps();

            $table->foreign('yuksekokul_id')
                ->references('id')
                ->on('yuksekokul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yuksekokulAlt');
    }
};
