<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'slug', 'image',
    'description', 'meta_title', 'meta_keywords',
    'meta_description', 'status'
];

}
