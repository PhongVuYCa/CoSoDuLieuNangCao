<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model;


class OrderDetail extends Model
{
    protected $table = 'orderDetail';
    protected $fillable = [
        'id',
        'code',
        'quantity',
        'total',
        'customer_id',
        'product_id',
        'order_id'
    ];

//     public function product()
//     {
//         return $this->belongsTo(Product::class, 'product_id');
//     }
public function product()
{
    return $this->belongsTo(Product::class, 'product_id', '_id');
}
}
