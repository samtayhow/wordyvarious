<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordList extends Model
{
    protected $fillable = ['title', 'slug', 'author', 'description', 'words', 'tags'];
}
