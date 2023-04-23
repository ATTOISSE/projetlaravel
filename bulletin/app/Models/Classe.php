<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }
    public function coefficients()
    {
        return $this->hasMany(Coefficient::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    
    
}