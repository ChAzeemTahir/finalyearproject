<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $table = 'example';
    protected $fillable = [
        'title', 'author_name',
        'filename', 'book_price','filed'
    ];
}
