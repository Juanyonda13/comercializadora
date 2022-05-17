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
        Schema::create('assistance', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora_llegada');
            $table->time('hora_salida');
            $table->time('horas_trabajadas');
            $table->unsignedBigInteger('empleado_id');
            $table->foreign("empleado_id")->references("id")->on("empleado")->onDelete("cascade")->onUpdate("cascade");;
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
        Schema::dropIfExists('assistance');
    }
};
