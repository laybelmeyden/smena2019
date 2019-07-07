<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Formtwo extends Model
{
    protected $fillable = [
        'email',    
        'fio', 
        'nameproject', 
        'celi', 
        'aktual', 
        'opis', 
        'plan',
        'team', 
        'priloj', 
    ];
}
