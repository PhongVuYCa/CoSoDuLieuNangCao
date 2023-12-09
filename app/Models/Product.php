<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Model
{

    protected $collection = 'product';

    protected $fillable = [
        '_id',
        'code',
        'name',
        'image',
        'price',
        'description',
        'quantity',
        'category_id',
        'customer_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    // public function orderDetail()
    // {
    //     return $this->hasOne(OrderDetail::class);
    // }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', '_id');
    }

}
