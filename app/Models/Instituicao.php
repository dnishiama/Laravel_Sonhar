<?php

namespace projeto_sonhar\Models;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $table = 'INST_INSTITUICAO';
    protected $primaryKey = 'INST_ID';
    protected $fillable = ['INST_NOME', 'INST_ENDERECO', 'INST_STATUS'];
}
