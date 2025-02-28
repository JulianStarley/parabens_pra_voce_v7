<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aniversario extends Model
{
    use HasFactory;
    protected $table = 'aniversariante';
    protected $fillable = [
        'nome_aniversariante',
        'data_nascimento',
        'nro_telefone'];
}

