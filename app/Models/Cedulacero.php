<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cedulacero
 *
 * @property $id
 * @property $rfc
 * @property $periodo
 * @property $documento
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario $horario
 * @property Horario $horario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cedulacero extends Model
{
    
    static $rules = [
		'rfc' => 'required',
		'periodo' => 'required',
		'documento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','rfc','periodo','documento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function horario()
    {
        return $this->hasOne('App\Models\Horario', 'periodo', 'periodo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function horariorfc()
    {
        return $this->hasOne('App\Models\Horario', 'rfc', 'rfc');
    }
    

}
