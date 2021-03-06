<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = ['bill', 'phone', 'address'];

    public function orderItems(): HasMany
    {
        return $this->hasMany('App\OrderItem');
    }
}
