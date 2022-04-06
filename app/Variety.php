<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    //
    protected $table = 'variety';
    protected $fillable = [
        'id',
        'v_type',
        'nm',
        'des',
        'de',
        'v_views',
        'v_date',
        'v_time',
        'pic',
        'shows',
        'pin',
    ];
}
