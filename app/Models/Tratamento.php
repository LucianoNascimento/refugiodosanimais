<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamento extends Model
{
    use HasFactory;

    protected $table = 'tratamentos';
    protected $fillable = ['id_animal', 'id_veterinario', 'data_inicio', 'data_fim', 'descricao', 'medicacao'];
}
