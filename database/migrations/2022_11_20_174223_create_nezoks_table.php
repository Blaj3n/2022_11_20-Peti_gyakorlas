<?php

use App\Models\Nezok;
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
        Schema::create('nezoks', function (Blueprint $table) {
            $table->id('nezok_id');
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->foreignId('film_id')->references('film_id')->on('films');
            $table->timestamps();
        });

        Nezok::create(['user_id' => 1, 'film_id' => 1]);
        Nezok::create(['user_id' => 2, 'film_id' => 2]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nezoks');
    }
};
