<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSofasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sofas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('merksofa', 50); 
            $table->integer('hargasofa'); 
            $table->boolean('tersedia'); 
            $table->float('berat'); 
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
        Schema::dropIfExists('sofas');
    }
}
