<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'url',
        'descricao',
        'video'
    ];

    public function modulos (){
        return $this->belongsTo(Modulo::class);
    }
}
