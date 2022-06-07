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

    public function gigs(){
        return $this->belongsToMany(Gig::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
