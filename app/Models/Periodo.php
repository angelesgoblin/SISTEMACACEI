<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodo
 *
 * @property $periodo
 * @property $identificacion_larga
 * @property $identificacion_corta
 * @property $status
 * @property $fecha_inicio
 * @property $fecha_termino
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Periodo extends Model
{
    
    static $rules = [
		'periodo' => 'required',
		'identificacion_larga' => 'required',
		'identificacion_corta' => 'required',
		'status' => 'required',
		'fecha_inicio' => 'required',
		'fecha_termino' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['periodo','identificacion_larga','identificacion_corta','status','fecha_inicio','fecha_termino'];



}
