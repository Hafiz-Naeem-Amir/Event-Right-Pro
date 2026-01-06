<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'category_id',
        'user_id',
        'scanner_id',
        'start_time',
        'end_time',
        'people',
        'status',
        'tags',
        'description',
        'type',
        'address',
        'event_url',
        'url',
    ];

    // Relationship with User (Organizer)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Relationship with Scanner
public function scanner()
{
    return $this->belongsTo(Scanner::class, 'scanner_id');
}
// protected $casts = [
//     'images' => 'array',
// ];


}
