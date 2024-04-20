<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=['matricule','nom','note','idFiliere'];
    public function filiere()
    {
        return $this->belongsTo(Fil::class);
    }

}
