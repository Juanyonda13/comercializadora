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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->time('horaProgramada');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->time('tiempoTotal');
            $table->float('totalPago',12,2);
            $table->unsignedBigInteger('empleado_id');
            $table->foreign("empleado_id")->references("id")->on("empleado")->onDelete("cascade")->onUpdate("cascade");
            $table->unsignedBigInteger('forma_pago_id');
            $table->foreign("forma_pago_id")->references("id")->on("forma_pago")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('quotes');
    }
};
