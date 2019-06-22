<?php

namespace projeto_sonhar\Models;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    /** Define o nome da tabela para este controle.*/
    protected $table = 'VOL_VOLUNTARIO';
    protected $primaryKey = 'VOL_ID';
    protected $fillable = ['VOL_NOME', 'VOL_RG', 'VOL_CPF', 'VOL_DT_NASCIMENTO', 'VOL_TELEFONE', 'VOL_STATUS', 'INST_ID', 'FUN_ID'];
}