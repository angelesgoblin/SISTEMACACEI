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
        Schema::create('materias', function (Blueprint $table) {
            //$table->bigincrements('id');
            $table->char('materia', 8);
            $table->char('nivel_escolar', 1);
            $table->integer('tipo_materia');
            $table->char('clave_area', 6);    
            $table->string('nombre_completo_materia', 100);
            $table->string('nombre_abreviado_materia', 30);
            
            $table->primary('materia');    

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
