<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Organigrama
 *
 * @property $clave_area
 * @property $descripcion_area
 * @property $area_depende
 * @property $nivel
 * @property $created_at
 * @property $updated_at
 *
 * @property Organigrama $organigrama
 * @property Organigrama[] $organigramas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Organigrama extends Model
{
    
    static $rules = [
		'clave_area' => 'required',
		'descripcion_area' => 'required',
		'area_depende' => 'required',
		'nivel' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['clave_area','descripcion_area','area_depende','nivel'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function organigrama()
    {
        return $this->hasOne('App\Models\Organigrama', 'clave_area', 'area_depende');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function organigramas()
    {
        return $this->hasMany('App\Models\Organigrama', 'area_depende', 'clave_area');
    }
    

}
