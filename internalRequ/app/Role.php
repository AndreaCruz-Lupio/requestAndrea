<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';
    protected $primaryKey ='idrole';
    protected $fillable = [
        'Name',
        'Description',
       
    ];
}
