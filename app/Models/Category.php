<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
        'image',
        'name',
        'status',
    ];

     public function events()
    {
        return $this->hasMany(Event::class);
    }
     public function contents()
    {
        return $this->hasMany(Content::class, 'category_id');
    }
}
