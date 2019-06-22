<?php

namespace projeto_sonhar\Models;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $table = 'ATV_ATIVIDADE';
    protected $primaryKey = 'ATV_ID';
    protected $fillable = ['ATV_DATA', 'ATV_DESCRICAO', 'INST_ID'];
}
