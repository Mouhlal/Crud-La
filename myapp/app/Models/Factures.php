<?php


namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factures extends Model
{
    use HasFactory;
    protected $fillable = ['numfact', 'datefact', 'montantfact', 'idclient'];

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }
    public function getClient()
    {
        return Clients::find( $this->idclient)->nomcli;
    }
}

