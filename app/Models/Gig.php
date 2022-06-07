<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'date',
    ];
    public function artist() {
        return $this->belongsToMany(Artist::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
