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
        
        Schema::create('grupos', function (Blueprint $table) {
            $table->integer('codigo')->unsigned();
            $table->char('periodo', 5);
            $table->char('materia', 8);
            $table->char('grupo', 3);
            $table->integer('capacidad_grupo');
            $table->integer('alumnos_inscritos');
            $table->char('paralelo_de',5)->nullable();
            $table->char('exclusivo_carrera',3)->nullable();
            $table->integer('exclusivo_reticula');
            $table->char('rfc',13)->nullable();
            $table->char('tipo_personal',1);
            
            $table->primary(['codigo','periodo','materia','grupo']);
            
            $table->index('grupo');

            $table->foreign('periodo')->references('periodo')->on('periodos')->onDelete('cascade');          
            $table->foreign('materia')->references('materia')->on('materias')->onDelete('cascade');          
            $table->foreign('rfc')->references('rfc')->on('catalogodocentes')->onDelete('cascade');  
            $table->foreign('exclusivo_carrera')->references('carrera')->on('carreras')->onDelete('cascade'); 
            $table->foreign('exclusivo_reticula')->references('reticula')->on('carreras')->onDelete('cascade');          
                 
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

        });
        DB::statement('ALTER TABLE grupos MODIFY codigo INTEGER NOT NULL AUTO_INCREMENT');


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
};
