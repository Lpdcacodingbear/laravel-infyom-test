<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class User
 * @package App\Models
 * @version January 21, 2022, 2:40 pm UTC
 *
 * @property string $username
 */
class User extends Model
{


    public $table = 'users';
    



    public $fillable = [
        'username'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'username' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'username' => 'required'
    ];

    
}
