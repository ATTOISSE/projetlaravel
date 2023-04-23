<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public string $nom;
    public string $description;
    public string $dateDebut;
    public string $dateFin;
}
