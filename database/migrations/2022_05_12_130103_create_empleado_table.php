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
        Schema::create('empleado', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',40);
            $table->string('apellidos',40);
            $table->integer('telefono')->length(10);
            $table->string('direccion',40);
            $table->date('fechaNacimiento',40);
            $table->float('salario',12,2);
            $table->time('horarioInicio');
            $table->time('horarioSalida');
            $table->unsignedBigInteger('commissions_id');
            $table->foreign("commissions_id")->references("id")->on("commissions")->onDelete("cascade")->onUpdate("cascade");;
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
        Schema::dropIfExists('empleado');
    }
};
