<?php

use App\Models\Forgalmazo;
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
        Schema::create('forgalmazos', function (Blueprint $table) {
            $table->id('forgalmazo_id');
            $table->string('nev');
            $table->smallInteger('alapitas_ev');
            $table->timestamps();
        });

        Forgalmazo::create(['nev' => 'Marvel', 'alapitas_ev' => 1972]);
        Forgalmazo::create(['nev' => 'Disney', 'alapitas_ev' => 1935]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forgalmazos');
    }
};
