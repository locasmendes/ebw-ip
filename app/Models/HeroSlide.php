<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSlide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
        'description',
        'link',
        'call_to_action',
        'overlay_url',
        'overlay_caption',
    ];
}
