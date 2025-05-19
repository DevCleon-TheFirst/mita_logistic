<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'user_id',
        'origin',
        'destination',
        'weight',
        'item_description',
        'dimensions',
        'quote_amount',
        'tracking_code',
        'status',
        'is_complete',
        'loading_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($quote) {
            $quote->tracking_code = strtoupper(uniqid('TRK-'));
        });
    }
}
