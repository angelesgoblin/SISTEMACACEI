<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 *
 * @property $periodo
 * @property $rfc
 * @property $materia
 * @property $grupo
 * @property $dia_semana
 * @property $tipo_horario
 * @property $hora_inicial
 * @property $hora_final
 * @property $actividad
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividadesapoyo $actividadesapoyo
 * @property Catalogodocente $catalogodocente
 * @property Cedulacero[] $cedulaceros
 * @property Evaluaciondepartamento[] $evaluaciondepartamentos
 * @property Evaluaciondepartamento[] $evaluaciondepartamentos
 * @property Evaluaciondocente[] $evaluaciondocentes
 * @property Evaluaciondocente[] $evaluaciondocentes
 * @property Grupo $grupo
 * @property Grupo $grupo
 * @property Grupo $grupo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{
    
    static $rules = [
		'periodo' => 'required',
		'rfc' => 'required',
		'materia' => 'required',
		'grupo' => 'required',
		'dia_semana' => 'required',
		'tipo_horario' => 'required',
		'hora_inicial' => 'required',
		'hora_final' => 'required',
		'actividad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['periodo','rfc','materia','grupo','dia_semana','tipo_horario','hora_inicial','hora_final','actividad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actividadesapoyo()
    {
        return $this->hasOne('App\Models\Actividadesapoyo', 'actividad', 'actividad');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function catalogodocente()
    {
        return $this->hasOne('App\Models\Catalogodocente', 'rfc', 'rfc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cedulaceros()
    {
        return $this->hasMany('App\Models\Cedulacero', 'rfc', 'rfc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluaciondepartamentos()
    {
        return $this->hasMany('App\Models\Evaluaciondepartamento', 'rfc', 'rfc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluaciondepartamentosper()
    {
        return $this->hasMany('App\Models\Evaluaciondepartamento', 'periodo', 'periodo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluaciondocentes()
    {
        return $this->hasMany('App\Models\Evaluaciondocente', 'rfc', 'rfc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluaciondocentesper()
    {
        return $this->hasMany('App\Models\Evaluaciondocente', 'periodo', 'periodo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grupo()
    {
        return $this->hasOne('App\Models\Grupo', 'grupo', 'grupo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grupoma()
    {
        return $this->hasOne('App\Models\Grupo', 'materia', 'materia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grupoper()
    {
        return $this->hasOne('App\Models\Grupo', 'periodo', 'periodo');
    }
    

}
