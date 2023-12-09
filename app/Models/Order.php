<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable=[
        '_id',
        'code',
        'customer_id',
        'subtotal'
    ];

}
