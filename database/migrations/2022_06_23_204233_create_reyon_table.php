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
        Schema::create('reyon', function (Blueprint $table) {
            $table->id();
            $table->text('reyon_adi');
            $table->unsignedBigInteger('reyon_id');
            $table->text('urun_adi');
            $table->foreign('reyon_id')->references('id')->on('reyons');
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
        Schema::dropIfExists('reyon');
    }
};
