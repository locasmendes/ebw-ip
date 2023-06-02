<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

class Page extends Model
{
    use HasFactory;

    //add onSave event to save slug
    protected static function booted()
    {
        static::saving(function () {
            Artisan::call('page-cache:clear');
        });
    }
}
