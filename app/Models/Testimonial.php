<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'project_id',
        'author',
        'quote',
        'approved',
    ];

    protected $casts = ['approved'=>'boolean'];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
