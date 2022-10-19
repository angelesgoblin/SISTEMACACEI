<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluaciondocente
 *
 * @property $id
 * @property $rfc
 * @property $periodo
 * @property $total_cuantitativo
 * @property $total_cualitativo
 * @property $documento
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario $horario
 * @property Horario $horario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evaluaciondocente extends Model
{
    
    static $rules = [
		'rfc' => 'required',
		'periodo' => 'required',
		'total_cuantitativo' => 'required',
		'total_cualitativo' => 'required',
		'documento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rfc','periodo','total_cuantitativo','total_cualitativo','documento'];


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
    public function horariope()
    {
        return $this->hasOne('App\Models\Horario', 'periodo', 'periodo');
    }
    

}
