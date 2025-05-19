<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $fillable = [
        'shipment_id',
        'location',
        'status',
        'note',
        'logged_at',
    ];

}
