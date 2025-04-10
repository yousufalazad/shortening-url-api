<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class UrlShortening extends Model
{
    use HasFactory;
    protected $fillable = [
        'shortened_url',
        'original_url'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
