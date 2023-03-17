<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class WithoutStallGuest extends Model
{
    public function participant_category()
    {
        return $this->belongsTo('App\ParticipantCategory');
    }
}
