<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'banner',
        'details',
        'html',
        'pos',
        'meta_keywords',
        'meta_descriptions'
    ];
    public $timestamps = false;
}
