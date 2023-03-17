<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class LtmStall extends Model
{
    public function business()
    {
        return $this->belongsTo('App\Business');
    }
    public function participant_category()
    {
        return $this->belongsTo('App\ParticipantCategory');
    }
    
}
