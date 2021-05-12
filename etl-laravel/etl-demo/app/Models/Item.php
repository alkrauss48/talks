<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function store() {
        return $this->belongsTo('App\Models\Store');
    }
}
