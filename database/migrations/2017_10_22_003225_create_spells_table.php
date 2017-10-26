<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spells', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('level');
            $table->string('path', 20);
            $table->string('action', 6);
            $table->string('type', 15);
            $table->string('effects');
            $table->string('intBase', 2);
            $table->string('intIntermediate', 2);
            $table->string('intAdvanced', 2);
            $table->string('intArcane', 2);
            $table->string('zeonBase', 5);
            $table->string('zeonIntermediate', 5);
            $table->string('zeonAdvanced', 5);
            $table->string('zeonArcane', 5);
            $table->boolean('dailyMaintenance', 5);
            $table->integer('maintBase');
            $table->integer('maintIntermediate');
            $table->integer('maintAdvanced');
            $table->integer('maintArcane');
            $table->string('base', 50);
            $table->string('intermediate', 50);
            $table->string('advanced', 50);
            $table->string('arcane', 50);
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
        Schema::dropIfExists('spells');
    }
}
