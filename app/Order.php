<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['bill'];

    public function orderItems(): HasMany
    {
        return $this->hasMany('App\OrderItem');
    }
}
