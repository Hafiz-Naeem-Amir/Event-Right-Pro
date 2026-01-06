<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'page_id',
        'title',
        'h1',
        'h2',
        'p',
        'image',
        'tags',
        'keyword',
        'description',
        'content',
        'category_id'
    ];

    protected $casts = [
        'tags' => 'array',   // REQUIRED ❗
    ];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
