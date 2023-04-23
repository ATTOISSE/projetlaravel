<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    public string $nom;
    public string $duree;
    public string $propriete;
}
