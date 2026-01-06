<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    // Mass assignable fields
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'lat',
        'long',
        'instagram',
        'facebook',
        'twitter',
        'pinterest',
        'app_name',
        'footertext',
        'logo',
        'favicon',
        'maintenance_text',
        'maintenance_mode',
        'maintenance_bgimg',
    ];
}
