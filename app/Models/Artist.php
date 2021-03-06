<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genre',
        'img',
    ];

    public function gig() {
        return $this->belongsToMany(Gig::class);
    }
    
    public function festivals(){
        return $this->belongsToMany(Festival::class);
    }

}
