<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'nom_ar',
        'prenom_ar',
        'date_naissance',
        'lieu_naissance',
        'lieu_naissance_ar',
        'provance_naissance',
        'sexe',
        'nationnalite',
        'situation_familiale',
        'situation_handicap',
        'enseignement_superieur',
        'universite_nom',
        'serie_bac',
        'type_etablissement',
        'mention_bac',
        'province_etablissement',
        'scan_bac',
        'relvi_note',
        'a_obtention_bac',
        'is_registered',
        'adresse1',
        'adresse2',
        'province',
        'pays',
        'email',
        'photo',
        'cin_et',
        'cm_ou_cne',
        'code_postal',
        'profession_pere',
        'profession_mere',
        'telephone',
        'telephone_mere',
        'telephone_pere',
        'cin_pere',
        'cin_mere',
        'vivre_pere',
        'vivre_mere',
        'pdf_et',
        'sport_individuels',
        'sports_collectifs',
        'culturelles_arts_plastiques',
        'culturelles_theatre',
        'culturelles_audiovisuel',
        'culturelles_echecs',
        'culturelles_ecriture',
    ];
}
