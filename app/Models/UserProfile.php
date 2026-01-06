<?php

namespace App\Models;

use App\Models\Organizer;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfile extends Model
{
    use HasFactory;

    // 1. Table name
    protected $table = 'user_profiles';

    // 2. Fillable fields
    protected $fillable = [
        'image',
        'first_name',
        'last_name',
        'email',
        'phone',
        'status',
        'verified',
        'password',
        'organization_id'
    ];

    // 3. Casts
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // 4. Relations
    public function bookings()
    {
        return $this->hasMany(Ticket::class, 'user_profile_id');
    }
    // 5. Relations
    public function organization()
    {
        return $this->belongsTo(Organizer::class, 'organization_id');
    }
}
