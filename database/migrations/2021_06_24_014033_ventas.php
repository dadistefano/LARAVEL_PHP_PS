<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->time('hora');
            $table->decimal('importe', 8, 2);   //8 digitos + 2 decimales
            $table->unsignedBigInteger('id_producto');
            $table->string('descripcion', 100)->nullable(); //puede ser nuleable
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
        Schema::dropIfExists('ventas');
    }
}
