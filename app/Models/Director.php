<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'position',
        'description',
        'quote',
        'img',
        'linkedin',
    ];
}
