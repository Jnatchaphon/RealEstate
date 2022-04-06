<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nextmatch extends Model
{
    //
    protected $table = 'nextmatch';
    protected $fillable = [
        'id',
        'league',
        'nm_home',
        'nm_away',
        'm_home',
        'm_away',
        'des',
        'm_live',
        'scores',
        'shows'
    ];
}
