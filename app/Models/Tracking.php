<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $fillale = [
        'shipping_id',
        'location',
        'status',
        'logged_at',
    ];

    function shipment(){
        return $this->belongsTo(Shipment::class);
    }
}
