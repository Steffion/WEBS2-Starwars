<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->hasOne('App\Category', 'name', 'category');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
