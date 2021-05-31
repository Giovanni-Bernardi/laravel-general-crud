<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class MyMatch extends Model {

    protected $table = "matches";
    
    protected $fillable = [ 
        'team1',
        'team2',
        'score1',
        'score2',
        'result'
    ];
}

    
