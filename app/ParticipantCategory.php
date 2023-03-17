<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ParticipantCategory extends Model
{
    public function ltm_stalls()
    {
        return $this->hasMany('App\LtmStalls');
    }
}
