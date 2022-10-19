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
        Schema::create('evaluaciondepartamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->char('rfc',13);
             $table->char('periodo',5);
             $table->string('calificacion_cuantitativa',50);
             $table->string('calificacion_cualitativa',50);
             $table->longText('documento')->nullable();
 
             $table->foreign('rfc')
            ->references('rfc')
            ->on('horarios')
            ->onDelete('cascade');

            $table->foreign('periodo')
            ->references('periodo')
            ->on('horarios')
            ->onDelete('cascade');
 
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
