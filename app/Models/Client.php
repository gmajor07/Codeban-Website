<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'website',
        'sort_order',
        'status',
    ];

    public $timestamps = false;

    public function websiteUrl(): string
    {
        if (! $this->website) {
            return '#';
        }

        return str_starts_with($this->website, 'http') ? $this->website : 'https://'.$this->website;
    }
}
