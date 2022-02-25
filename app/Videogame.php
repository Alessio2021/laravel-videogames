<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    protected $fillable = [
        'title',
        'genre',
        'developer',
        'publisher',
        'photo',
        'pegi',
        'price'
    ];
}
