<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name'
    ];

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function blogs()
    {
        return $this->hasMany('App\Blog');
    }
}
