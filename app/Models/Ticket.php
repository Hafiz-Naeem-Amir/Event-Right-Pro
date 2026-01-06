<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';  // table name
    protected $guarded = ['id'];

    // Relation to Orders
    public function orders()
    {
        return $this->hasMany(Order::class, 'ticket_id');
    }
    public function user()
{
    return $this->belongsTo(UserProfile::class, 'user_profile_id');
}

}
