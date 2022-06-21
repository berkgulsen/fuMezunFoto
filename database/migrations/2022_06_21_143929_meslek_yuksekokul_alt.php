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
        Schema::create('meslekYuksekokulAlt', function (Blueprint $table) {
            $table->id();
            $table->string('bolum_name');
            $table->unsignedBigInteger('meslekYuksekokul_id');
            $table->timestamps();

            $table->foreign('meslekYuksekokul_id')
                ->references('id')
                ->on('meslekYuksekokulAlt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meslekYuksekokulAlt');
    }
};
