<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderitems extends Model
{
    protected $table = 'order_items';
    protected $fillable = [
         'oder_id',
        'product_name','product_qty','product_price'
    ];

//    public  function order(){
//        return $this->belongsTo(Order::class);
//
//    }
}
