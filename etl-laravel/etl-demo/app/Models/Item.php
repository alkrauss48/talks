<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function store() {
        return $this->belongsTo('App\Store');
    }
}
