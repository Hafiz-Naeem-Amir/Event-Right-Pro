<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'description'];
     public function contents()
    {
        return $this->hasMany(Content::class, 'page_id');
    }
}

