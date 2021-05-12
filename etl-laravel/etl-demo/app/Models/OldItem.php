<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OldItem extends Model
{
    use HasFactory;

    public function store() {
        return $this->belongsTo('App\OldStore');
    }
}
