<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrera
 *
 * @property $carrera
 * @property $reticula
 * @property $nivel_escolar
 * @property $clave_oficial
 * @property $nombre_carrera
 * @property $nombre_reducido
 * @property $siglas
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrera extends Model
{
    
    static $rules = [
		'carrera' => 'required',
		'reticula' => 'required',
		'nivel_escolar' => 'required',
		'clave_oficial' => 'required',
		'nombre_carrera' => 'required',
		'nombre_reducido' => 'required',
		'siglas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['carrera','reticula','nivel_escolar','clave_oficial','nombre_carrera','nombre_reducido','siglas'];



}
