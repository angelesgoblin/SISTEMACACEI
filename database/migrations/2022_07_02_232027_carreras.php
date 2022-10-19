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
        Schema::create('carreras', function (Blueprint $table) {
            $table->char('carrera', 3);
            $table->integer('reticula');
            $table->char('nivel_escolar', 1);
            $table->char('clave_oficial', 20);
            $table->string('nombre_carrera', 80);
            $table->string('nombre_reducido', 30);
            $table->string('siglas', 10);
            $table->primary(array('carrera','reticula'));
            
            $table->index('reticula');
            
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
