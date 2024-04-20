<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fil extends Model
{
    use HasFactory;
    protected $fillable=['libelle'];
    public function students()
    {
        return $this->hasMany(Student::class);
    }

}

