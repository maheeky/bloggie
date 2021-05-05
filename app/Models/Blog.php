<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image_url',
        'is_live',
        'expired_at',
        'featured_at',
        'main_content',
        'published_at',
        'slug',
        'title',
        'category'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'featured_at'   => 'datetime',
        'expired_at'    => 'datetime',
        'is_live'       => 'boolean',
        'published_at'  => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
