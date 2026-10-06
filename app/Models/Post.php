<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'body',
        'published_at',
    ];

    protected $casts = ['published_at' => 'datetime'];

    #[Override]
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
