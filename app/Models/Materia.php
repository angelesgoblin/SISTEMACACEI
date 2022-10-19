<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $materia
 * @property $nivel_escolar
 * @property $tipo_materia
 * @property $clave_area
 * @property $nombre_completo_materia
 * @property $nombre_abreviado_materia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'materia' => 'required',
		'nivel_escolar' => 'required',
		'tipo_materia' => 'required',
		'clave_area' => 'required',
		'nombre_completo_materia' => 'required',
		'nombre_abreviado_materia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['materia','nivel_escolar','tipo_materia','clave_area','nombre_completo_materia','nombre_abreviado_materia'];



}
