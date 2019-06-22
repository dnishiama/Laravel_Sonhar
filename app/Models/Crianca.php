<?php

namespace projeto_sonhar\Models;
use Illuminate\Database\Eloquent\Model;

class Crianca extends Model
{
    protected $table = 'CRI_CRIANCA';
    protected $primaryKey = 'CRI_ID';
    protected $fillable = ['CRI_NOME', 'CRI_IDADE', 'CRI_STATUS', 'INST_ID'];
}
