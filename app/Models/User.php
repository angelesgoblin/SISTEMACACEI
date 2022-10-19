<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

use Illuminate\Foundation\Auth\User as Authenticatable;   

class User extends Authenticatable
//class User extends Model //----->daba error
{
  use \Illuminate\Notifications\Notifiable;
  use HasRoles;
  //use Notifiable;
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
    'password' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','password'];

}
