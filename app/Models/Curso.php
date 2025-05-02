<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    // Se o nome da tabela for diferente de 'cursos', defina manualmente:
    // protected $table = 'nome_da_tabela';

    // Se a tabela não tiver timestamps (created_at e updated_at), adicione:
    // public $timestamps = false;

    // Se quiser definir quais colunas podem ser preenchidas em massa:
    // protected $fillable = ['titulo', 'descricao', 'imagem'];
}
