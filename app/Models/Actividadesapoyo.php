<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;

/**
 * Class Actividadesapoyo
 *
 * @property $actividad
 * @property $descripcion_actividad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actividadesapoyo extends Model
{

 /* use prunable;
    public function prunable()
    {
        //return afterAt(now()->subMinutes(2));
        
    }*/
    
    static $rules = [
		'actividad' => 'required',
		'descripcion_actividad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['actividad','descripcion_actividad'];



}
