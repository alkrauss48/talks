<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OldItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function transform($storeId) {
        return [
            'full_name' => $this->name1
                . ' ' . $this->name2,

            'amount' => $this->quantity,

            'old_item_id' => $this->id,

            'store_id' => $storeId,
        ];
    }

    public function store() {
        return $this->belongsTo('App\Models\OldStore');
    }
}
