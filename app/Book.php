<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'desc',
        'author',
        'price',
        'genre_id',
        'type_id',
    ];

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
