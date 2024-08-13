<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adocao extends Model
{
    use HasFactory;

    protected $table = 'adocaos';
    protected $fillable = ['id_animal', 'id_adotante', 'data_da_adocao', 'status_adocao', 'observacao'];

}
