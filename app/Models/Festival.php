<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'img',
    ];

    public function user() {
        return $this->belongsToMany(User::class);
    }

    public function artists() {
        return $this->belongsToMany(Artist::class);
    }
}
