<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    use HasFactory;

    protected $table = 'doacaos';
    protected $fillable = ['id_campanha', 'valor', 'data_doacao', 'tipo_doacao'];
}
