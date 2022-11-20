<?php

use App\Models\Film;
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
        Schema::create('films', function (Blueprint $table) {
            $table->id('film_id');
            $table->foreignId('forgalmazo_id')->references('forgalmazo_id')->on('forgalmazos');
            $table->string('nev');
            $table->integer('hossz');
            $table->integer('besorolas');
            $table->timestamps();
        });

        Film::create(['forgalmazo_id' => 1, 'nev' => 'Bosszúállók', 'hossz' => 100, 'besorolas' => 16]);
        Film::create(['forgalmazo_id' => 2, 'nev' => 'Star Wars', 'hossz' => 110, 'besorolas' => 12]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};
