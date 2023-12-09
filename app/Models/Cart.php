<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Cart extends Model
{
    protected $collection = 'cart';

    protected $fillable = ['_id', 'code', 'customer_id', 'product_id', 'quantity', 'total'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function customer()
    {
        return $this->belongsTo(Users::class, 'customer_id');
    }

}

