<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'page',
        'question',
        'answer',
        'sort_order',
        'status',
    ];

    public $timestamps = false;
}
