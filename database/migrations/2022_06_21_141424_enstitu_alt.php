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
        Schema::create('enstituAlt', function (Blueprint $table) {
            $table->id();
            $table->string('bolum_name');
            $table->unsignedBigInteger('enstitu_id');
            $table->timestamps();

            $table->foreign('enstitu_id')
                ->references('id')
                ->on('fakulte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enstituAlt');
    }
};
