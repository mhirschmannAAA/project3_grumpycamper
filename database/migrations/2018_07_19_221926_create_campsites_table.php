<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campsites', function (Blueprint $table) {
            $table->increments('id');
            $table->text('camp_name')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('level')->nullable();
            $table->text('shade')->nullable();
            $table->text('groundcover')->nullable();
            $table->text('deckpad')->nullable();
            $table->text('picnic')->nullable();
            $table->text('privacy')->nullable();
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
        Schema::dropIfExists('campsites');
    }
}
