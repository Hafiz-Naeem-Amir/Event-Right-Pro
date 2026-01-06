<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Attributes\Ticket;

class Order extends Model
{
    protected $guarded = ['id'];

    // Order belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
      // Relation to Ticket
    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }
}
