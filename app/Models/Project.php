<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'github_url',
        'demo_url',
        'views',
        'featured',
    ];
    protected $casts = ['featured' => 'boolean'];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function testimonails(){
        return $this->hasMany(Testimonial::class);
    }
}
