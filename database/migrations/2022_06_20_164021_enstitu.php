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
        Schema::create('enstitu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enstitu_id');
            $table->string('enstitu_name');
            $table->timestamps();

            $table->foreign('enstitu_id')
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
        Schema::dropIfExists('enstitu');
    }
};
