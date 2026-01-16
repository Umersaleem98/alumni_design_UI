<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
     protected $fillable = [
        'chapter_name',
        'category',
        'country',
        'description',
        'cover_image',
        'team_images',
        'team_details',
        'focus_areas',
    ];

    protected $casts = [
        'team_images' => 'array',
        'team_details' => 'array',
        'focus_areas' => 'array',
    ];
}
