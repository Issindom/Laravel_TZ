<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'year'];

    public function authors()
    {
        return $this->belongsToMany(Authors::class, 'book_author', 'author_id', 'book_id');
    }
}
