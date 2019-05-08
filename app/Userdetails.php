<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetails extends Model
{
    protected $table = 'users_details';
    protected $fillable = [
        'user_id', 'oder_id',
        'firt_name','last_name', 'email','contry'
    ];



}

