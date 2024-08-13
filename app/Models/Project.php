<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Sluggable\SlugOptions;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'gambar',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'og_image',
    ];



    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid =  Str::uuid()->toString();
        });
    }
}
