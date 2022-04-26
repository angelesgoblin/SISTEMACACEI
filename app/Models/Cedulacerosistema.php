<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cedulacerosistema
 *
 * @property $id
 * @property $Periodo
 * @property $Departamento
 * @property $Documento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cedulacerosistema extends Model
{
    
    static $rules = [
		'Periodo' => 'required',
		'Departamento' => 'required',
		'Documento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['uuid','Periodo','Departamento','Documento'];



}
