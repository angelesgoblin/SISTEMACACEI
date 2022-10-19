<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Catalogodocente
 *
 * @property $rfc
 * @property $clave_area
 * @property $apellidos_empleado
 * @property $nombre_empleado
 * @property $correo_electronico
 * @property $created_at
 * @property $updated_at
 *
 * @property Organigrama $organigrama
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Catalogodocente extends Model
{
    
    static $rules = [
		'rfc' => 'required',
		'clave_area' => 'required',
		'apellidos_empleado' => 'required',
		'nombre_empleado' => 'required',
		'correo_electronico' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rfc','clave_area','apellidos_empleado','nombre_empleado','correo_electronico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function organigrama()
    {
        return $this->hasOne('App\Models\Organigrama', 'clave_area', 'clave_area');
    }
    

}
