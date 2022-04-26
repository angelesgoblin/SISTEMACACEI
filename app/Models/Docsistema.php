<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docsistema
 *
 * @property $id
 * @property $Estatus
 * @property $Docente
 * @property $Departamento
 * @property $Periodo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docsistema extends Model
{
    
    static $rules = [
		'Estatus' => 'required',
		'Docente' => 'required',
		'Departamento' => 'required',
		'Periodo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Estatus','Docente','Departamento','Periodo'];



}
