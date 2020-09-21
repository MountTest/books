<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'cart',
        'address',
        'name',
        'phone',
        'email',
        'user_id',
    ];

    protected $casts = [
        'cart' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
