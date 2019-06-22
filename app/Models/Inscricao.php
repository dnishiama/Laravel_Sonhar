<?php

namespace projeto_sonhar\Models;
use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    protected $table = 'INSC_INSCRICAO';
    protected $primaryKey = 'INSC_ID';
    protected $fillable = ['INSC_NOME', 'INSC_RG', 'INSC_CPF', 'INSC_DT_NASCIMENTO', 'INSC_TELEFONE', 'INSC_DT_FORMACAO', 'INSC_PRESENCA_FORMACAO', 'INST_ID'];
}
