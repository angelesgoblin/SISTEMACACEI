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
        Schema::create('horarios', function (Blueprint $table) {
            
            $table->integer('codigo')->unsigned();
            $table->char('periodo',5);
            $table->char('rfc',13);
            $table->char('materia',8)->nullable();
            $table->char('grupo',3)->nullable();
            $table->integer('dia_semana');
            $table->char('tipo_horario',1);
            $table->datetime('hora_inicial');
            $table->datetime('hora_final');
            $table->char('actividad',10)->nullable();


            $table->primary(array('codigo','periodo','rfc'));

            $table->foreign('periodo')
            ->references('periodo')
            ->on('grupos')
            ->onDelete('cascade');

           $table->foreign('rfc')
            ->references('rfc')
            ->on('catalogodocentes')
            ->onDelete('cascade');

            $table->foreign('materia')
            ->references('materia')
            ->on('grupos')
            ->onDelete('cascade');

            $table->foreign('grupo')
            ->references('grupo')
            ->on('grupos')
            ->onDelete('cascade');

            $table->foreign('actividad')
            ->references('actividad')
            ->on('actividadesapoyos')
            ->onDelete('cascade');

            
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

        });
        DB::statement('ALTER TABLE horarios MODIFY codigo INTEGER NOT NULL AUTO_INCREMENT');


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
