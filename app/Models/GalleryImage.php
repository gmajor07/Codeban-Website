<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $table = 'gallery';

    protected $fillable = [
        'title',
        'image',
        'category',
        'status',
    ];

    public $timestamps = false;
}
