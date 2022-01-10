<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected  $fillable = ['PartitionKey', 'AnoLectivo', 'NomeEstabelecimento', 'Tipologia', 'Morada', 'CodPostal', 'JuntaFreguesia', 'Contacto', 'Site'];

    protected  $with = ['user'];

    public function user()
    {
        return $this->hasMany('App\Models\User', 'school_id');
    }


}
