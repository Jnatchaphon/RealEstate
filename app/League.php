<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    //
    protected $table = 'league';
    protected $fillable = [
        'id',
        'team',
        'play',
        'win',
        'draw',
        'lost',
        'gf',
        'ga',
        'gd',
        'pts',
        'pos',
        'ude'
    ];
}
