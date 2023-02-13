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
        Schema::create('organigramas', function (Blueprint $table) {
            $table->char('clave_area', 6);
            $table->char('siglas', 6);
            $table->string('descripcion_area', 200);
            $table->char('area_depende', 6);
            $table->char('nivel', 1);  
            $table->primary('clave_area');
            
            $table->foreign('area_depende')->references('clave_area')->on('organigramas')->onDelete('cascade');          
            

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
