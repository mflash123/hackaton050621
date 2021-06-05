<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        DB::table('events')->insert([
            ['name' => 'Хоккей'],
            ['name' => 'Футбол'],
            ['name' => 'Баскетбол'],
            ['name' => 'Волейбол'],
            ['name' => 'Гонки с препятсвиями'],
            ['name' => 'Настольный теннис'],
            ['name' => 'Бег'],
            ['name' => 'Триатлон'],
            ['name' => 'Стречинг'],
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
