<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'id',
        'user_id','email','	total','status'
    ];

    public function order()
    {
        return $this->hasMany('App\Orderitems');
    }
}
