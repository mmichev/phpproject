<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string ('Name','64');
            $table->string ('GameName','64');
            $table->integer ('Capacity');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_clubs');
    }
}
