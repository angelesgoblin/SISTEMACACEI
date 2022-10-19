<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use DB;

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
        Schema::create('catalogodocentes', function (Blueprint $table) {
            $table->char('rfc',13);
            $table->char('clave_area',6);
            $table->string('apellidos_empleado',45);
            $table->string('nombre_empleado',35);
            $table->string('correo_electronico',60);

            $table->primary('rfc');
            $table->foreign('clave_area')->references('clave_area')->on('organigramas')->onDelete('cascade');          


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
