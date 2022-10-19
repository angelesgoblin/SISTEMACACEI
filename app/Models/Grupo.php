<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grupo
 *
 * @property $periodo
 * @property $materia
 * @property $grupo
 * @property $capacidad_grupo
 * @property $alumnos_inscritos
 * @property $paralelo_de
 * @property $exclusivo_carrera
 * @property $exclusivo_reticula
 * @property $rfc
 * @property $tipo_personal
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera $carrera
 * @property Carrera $carrera
 * @property Catalogodocente $catalogodocente
 * @property Materia $materia
 * @property Periodo $periodo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grupo extends Model
{
    
    static $rules = [
		'periodo' => 'required',
		'materia' => 'required',
		'grupo' => 'required',
		'capacidad_grupo' => 'required',
		'alumnos_inscritos' => 'required',
		'paralelo_de' => 'required',
		'exclusivo_carrera' => 'required',
		'exclusivo_reticula' => 'required',
		'rfc' => 'required',
		'tipo_personal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['periodo','materia','grupo','capacidad_grupo','alumnos_inscritos','paralelo_de','exclusivo_carrera','exclusivo_reticula','rfc','tipo_personal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'carrera', 'exclusivo_carrera');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrerare()
    {
        return $this->hasOne('App\Models\Carrera', 'reticula', 'exclusivo_reticula');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function catalogodocente()
    {
        return $this->hasOne('App\Models\Catalogodocente', 'rfc', 'rfc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne('App\Models\Materia', 'materia', 'materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periodo()
    {
        return $this->hasOne('App\Models\Periodo', 'periodo', 'periodo');
    }
    

}
