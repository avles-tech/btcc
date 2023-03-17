<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Business extends Model
{
    public function member()
    {
        return $this->belongsTo('App\Member');
    }
    public function classified_ads()
    {
        return $this->hasMany('App\ClassifiedAd');
    }
}
