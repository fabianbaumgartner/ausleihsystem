<?php

class Reservation extends Eloquent
{
    protected $timestamps = false;

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function device()
    {
        return $this->belongsTo('Device');
    }
}