<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->bigincrements('id');
          
            $table->string('departure', 30);
            $table->string('arrival', 30);
            $table->string('poster', 100)->nullable();
            $table->float('price', 8, 2);
            $table->string('transport', 20);
            $table->date('departure_date');
            $table->date('return_date');
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
        Schema::dropIfExists('holidays');
    }
}