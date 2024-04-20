<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livres extends Model
{
    use HasFactory;
    protected $fillable=['titre','anneepub','nbrpages','auteur_id'];

    public function Auteurs(){
        return $this->belongsTo(auteurs::class);
    }
    public function Emprunts(){
        return $this->hasMany(Emprunt::class);
    }
    public function getNom()
    {
        return auteurs::find( $this->auteur_id)->nom;
    }
}
