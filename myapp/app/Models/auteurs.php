<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auteurs extends Model
{
    use HasFactory;

    protected $fillable =['nom','prenom'] ;
    public function Livres(){
        return $this->hasMany(Livres::class);
    }
}
