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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('marca',100);
           $table->string('modelo',100); 
            $table->string('version',100);
           $table-> integer('km');
           $table-> integer('precio');
           $table-> integer('año');
            $table->string('trasmision',50);
           $table->string('combustible',50); 
           $table-> integer('cv');
           $table->string('pais',100); 
           $table->string('estado',50); 
           $table-> string('carroceria',100);
           $table->integer('puertas'); 
            $table->string('categoriaEmisiones',50);
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
        Schema::dropIfExists('cars');
    }
};
