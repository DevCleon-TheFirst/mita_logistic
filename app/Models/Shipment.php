<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'quote_id',
        'user_id',
        'tracking_code',
        'origin',
        'destination',
        'pickup_date',
        'delivery_date',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function quote(){
        return $this->belongsTo(Quote::class);
    }
}
