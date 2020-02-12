<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderItem extends Model
{
    protected $fillable = ['menu_item_id', 'quantity'];
    public $timestamps = false;

    public function menuItems(): HasMany
    {
        return $this->hasMany('App\MenuItem');
    }
}
