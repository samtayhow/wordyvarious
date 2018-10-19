<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    protected $fillable = ['title', 'slug', 'author', 'description', 'words', 'tags'];
    protected $table = 'lists';
}
