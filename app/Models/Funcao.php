<?php

namespace projeto_sonhar\Models;
use Illuminate\Database\Eloquent\Model;

class Funcao extends Model
{
    protected $table = 'FUN_FUNCAO';
    protected $primaryKey = 'FUN_ID';
    protected $fillable = ['FUN_DESCRICAO'];
}
