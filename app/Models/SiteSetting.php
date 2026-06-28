<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class SiteSetting extends Model
{
    protected $table = 'site_settings';

    protected $fillable = [
        'company_name',
        'tagline',
        'phone1',
        'phone2',
        'phone3',
        'email1',
        'email2',
        'email3',
        'website',
        'instagram',
        'address',
        'logo',
    ];

    public $timestamps = false;

    public static function current(): self
    {
        if (! Schema::hasTable('site_settings')) {
            return new static(static::defaults());
        }

        return static::query()->first() ?? new static(static::defaults());
    }

    public static function defaults(): array
    {
        return [
            'company_name' => 'Codeban Company Limited',
            'tagline' => 'Supplying PPE, uniforms, footwear, fire safety equipment, branding, and professional business solutions in Tanzania.',
            'phone1' => '+255 784 993 355',
            'phone2' => '+255 658 634 462',
            'phone3' => '+255 713 185 183',
            'email1' => 'codebancl@gmail.com',
            'email2' => 'barakamaka31@gmail.com',
            'email3' => 'info@codeban.co.tz',
            'website' => 'www.codeban.co.tz',
            'instagram' => '@codeban2020',
            'address' => 'Block G Plot No.12, House No.1, Macedonia/Baraka Street, Tabata - Kinyerezi, Dar es Salaam, Tanzania',
        ];
    }

    public function phoneList(): array
    {
        return array_values(array_filter([$this->phone1, $this->phone2, $this->phone3]));
    }

    public function emailList(): array
    {
        return array_values(array_filter([$this->email1, $this->email2, $this->email3]));
    }

    public function phoneLine(string $separator = ' / '): string
    {
        return implode($separator, $this->phoneList());
    }

    public function emailLine(string $separator = ' / '): string
    {
        return implode($separator, $this->emailList());
    }

    public function websiteUrl(): string
    {
        if (! $this->website) {
            return '#';
        }

        return str_starts_with($this->website, 'http') ? $this->website : 'https://'.$this->website;
    }

    public function instagramUrl(): string
    {
        if (! $this->instagram) {
            return '#';
        }

        return 'https://www.instagram.com/'.ltrim($this->instagram, '@');
    }
}
