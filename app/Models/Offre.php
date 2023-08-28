<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'lien_inscription',
        'date_publication',
        'date_expiration',
        'entreprise_id',
   ];
}
