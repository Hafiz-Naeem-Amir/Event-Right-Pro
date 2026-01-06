<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'reason',
        'message',
        'event_id',
    ];

    // Relationship to Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
