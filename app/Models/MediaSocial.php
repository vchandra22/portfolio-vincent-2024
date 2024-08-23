<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MediaSocial extends Model
{
    use HasFactory;

    protected $table = 'media_socials';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'link',
        'gambar',
    ];

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid =  Str::uuid()->toString();
        });
    }
}
