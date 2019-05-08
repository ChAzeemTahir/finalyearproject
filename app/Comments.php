<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'table_comments';
    protected $fillable = [
        'name', 'email',
        'comment'
    ];
}
