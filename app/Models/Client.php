<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'type',
        'nom',
        'prenom',
        'raison_sociale',
        'email',
        'telephone',
        'telephone_secondaire',
        'adresse',
        'ville',
        'pays',
        'numero_identification',
        'date_naissance',
        'statut',
        'notes',
    ];

    protected $casts = [
        'date_naissance' => 'date',
    ];
}