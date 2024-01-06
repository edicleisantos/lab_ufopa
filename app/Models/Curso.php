<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'unidade',
        'campus',
        'grau',
        'descricao',
        'status'
    ];

    public function modulos(){
        return $this->HasMany(Modulo::class);

    }
}
