<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recursoshumano
 *
 * @property $id
 * @property $periodo
 * @property $nombre
 * @property $documento
 * @property $updated_at
 * @property $created_at
 *
 * @property Periodo $periodo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recursoshumano extends Model
{
    
    static $rules = [
		'periodo' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['periodo','nombre','documento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periodo()
    {
        return $this->hasOne('App\Models\Periodo', 'periodo', 'periodo');
    }
    

}
