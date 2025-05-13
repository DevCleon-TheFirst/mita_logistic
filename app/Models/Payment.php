<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'qoute_id',
        'shipment_id',
        'payment_reference',
        'amount',
        'currency',
        'status',
        'gateway',
        'response',

    ];
    protected $casts = [
        'response' => 'array',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function quote(){
        return $this->belongsTo(Quote::class);
    }

    public function shipment(){
        return $this->belongsTo(Shipment::class);
    }
}

