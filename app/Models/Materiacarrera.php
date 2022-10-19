<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materiacarrera
 *
 * @property $id
 * @property $carrera
 * @property $reticula
 * @property $materia
 * @property $creditos_materia
 * @property $horas_teoricas
 * @property $horas_practicas
 * @property $especialidad
 * @property $clave_oficial_materia
 * @property $estatus_materia_carrera
 * @property $programa_estudios
 * @property $renglon
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera $carrera
 * @property Carrera $carrera
 * @property Materia $materia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materiacarrera extends Model
{
    
    static $rules = [
		'carrera' => 'required',
		'reticula' => 'required',
		'materia' => 'required',
		'creditos_materia' => 'required',
		'horas_teoricas' => 'required',
		'horas_practicas' => 'required',
		'clave_oficial_materia' => 'required',
		'estatus_materia_carrera' => 'required',
		'renglon' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['carrera','reticula','materia','creditos_materia','horas_teoricas','horas_practicas','especialidad','clave_oficial_materia','estatus_materia_carrera','programa_estudios','renglon'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'carrera', 'carrera');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrerareticula()
    {
        return $this->hasOne('App\Models\Carrera', 'reticula', 'reticula');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne('App\Models\Materia', 'materia', 'materia');
    }
    

}
