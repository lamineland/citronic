<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Un role a beaucoup de users
     */

    public function users() 
    {
        return $this->hasMany('App\User');
    }

    protected $fillable = [
        'role_name'
    ];
}
