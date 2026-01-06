<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'event_id',
        'discount',
        'discount_type',
        'max_use',
        'max_use_per_user',
        'start_date',
        'end_date',
        'minimum_amount',
        'maximum_discount',
        'description',
        'status',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
