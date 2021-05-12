<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OldStore extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function transform() {
        return [
            'full_name' => $this->name1
                . ' ' . $this->name2,

            'full_address' => $this->street_address
                . ', ' . $this->city
                . ', ' . $this->state
                . ', ' . $this->postcode,

            'old_store_id' => $this->id,
        ];
    }

    public function items() {
        return $this->hasMany('App\Models\OldItem');
    }
}
