<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['menu_item_id', 'quantity'];

    public function menuItems(): HasMany
    {
        return $this->hasMany('App\MenuItem');
    }
}
