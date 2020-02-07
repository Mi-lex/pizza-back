<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function type(): BelongsTo
    {
        return $this->belongsTo('App\Type');
    }

    public function scopeOfType($query, string $type): Builder
    {
        return $query
            ->select('menu_items.*')
            ->leftJoin('types', 'menu_items.type_id', '=', 'types.id')
            ->where('types.name', '=', $type);
    }
}
