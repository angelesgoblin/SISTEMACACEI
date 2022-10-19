<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluaciondepartamento
 *
 * @property $id
 * @property $rfc
 * @property $periodo
 * @property $cañificacion_cuantitativa
 * @property $calificacion_cualitativa
 * @property $documento
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario $horario
 * @property Horario $horario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evaluaciondepartamento extends Model
{
    
    static $rules = [
		'rfc' => 'required',
		'periodo' => 'required',
		'calificacion_cuantitativa' => 'required',
		'calificacion_cualitativa' => 'required',
		'documento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rfc','periodo','calificacion_cuantitativa','calificacion_cualitativa','documento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function horario()
    {
        return $this->hasOne('App\Models\Horario', 'rfc', 'rfc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function horarioper()
    {
        return $this->hasOne('App\Models\Horario', 'periodo', 'periodo');
    }
    

}
