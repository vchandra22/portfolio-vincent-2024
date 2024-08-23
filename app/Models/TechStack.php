<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TechStack extends Model
{
    use HasFactory;

    protected $table = 'tech_stacks';
    protected $primaryKey = 'id';

    protected $fillable = [
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
