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
        Schema::create('sub', function (Blueprint $table) {
            $table->id();
            $table->string('sub_name');
            $table->unsignedBigInteger('akademi_id');
            $table->timestamps();

            $table->foreign('akademi_id')
                ->references('id')
                ->on('akademis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub');
    }
};
