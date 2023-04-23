<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    
    public function coefficient()
    {
        return $this->belongsTo(Coefficient::class);
    }

     public function note()
    {
        return $this->belongsTo(Note::class);
    }
}