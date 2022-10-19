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
        //
        Schema::create('periodos', function (Blueprint $table) {
            $table->char('periodo', 5);
            $table->char('identificacion_larga', 30);
            $table->char('identificacion_corta', 12);
            $table->char('status', 1);
            $table->timestamp('fecha_inicio')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('fecha_termino')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->primary('periodo');

            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
