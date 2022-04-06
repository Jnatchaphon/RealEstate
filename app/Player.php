<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $table = 'player';
    protected $fillable = [
        'id',
        'nm',
        'nation',
        'position',
        'p_num',
        'goals',
        'assisted',
        'injuries',
        'profile',
        'games',
        'red_c',
        'yel_c',
        'pic1',
        'pic2',
        'nation_flag',
        'p_stat',
        'shows',
        'pin'
    ];
}
