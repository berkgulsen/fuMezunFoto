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
        Schema::create('imagePath', function (Blueprint $table) {
            $table->id();
            $table->string('imagePath');
            $table->unsignedBigInteger('akademi_id');
            $table->unsignedBigInteger('sub_id');
            $table->unsignedBigInteger('department_id');
            $table->timestamps();

            $table->foreign('akademi_id')
                  ->references('id')
                  ->on('akademis');

            $table->foreign('sub_id')
                  ->references('id')
                  ->on('sub');

            $table->foreign('department_id')
                  ->references('id')
                  ->on('department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagePath');
    }
};
