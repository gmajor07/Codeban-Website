<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends Model
{
    protected $fillable = [
        'page_id',
        'section_key',
        'title',
        'subtitle',
        'content',
        'button_text',
        'button_link',
        'image',
        'sort_order',
        'status',
    ];

    public $timestamps = false;

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }
}
