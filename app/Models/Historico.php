<?php

namespace projeto_sonhar\Models;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $table = 'HIS_HISTORICO';
    protected $fillable = ['VOL_ID', 'CRI_ID', 'ATV_ID'];
}
