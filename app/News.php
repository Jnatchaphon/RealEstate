<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $fillable = [
        'id',
        'n_type',
        'nm',
        'des',
        'de',
        'p_1',
        'p_2',
        'n_views',
        'w_views',
        'm_views',
        'n_date',
        'w_date',
        'm_date',
        'n_time',
        'pic',
        'shows',
        'pin',
        't_r',
        'str_n',
        'str_w',
        'str_m',
    ];
}
