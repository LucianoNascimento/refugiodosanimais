<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    use HasFactory;

    protected $table = 'campanhas';
    protected $fillable = ['nome', 'descricao', 'data_inicio', 'data_fim', 'finalidade'];
}
