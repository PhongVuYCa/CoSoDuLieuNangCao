<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;

class Category extends Model
{
    protected $collection = 'category';
    protected $fillable = ['_id','code','name'];

    public function products()
    {
        return $this->hasMany(products::class);
    }
}
