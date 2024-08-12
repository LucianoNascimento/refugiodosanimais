<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animals';
    protected $fillable = ['nome', 'especie', 'raca', 'idade', 'sexo', 'cor', 'tamanho', 'descricao', 'data_entrada', 'status'];

}
