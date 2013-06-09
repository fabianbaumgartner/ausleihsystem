<?php

class Device extends Eloquent
{
    public function reservations()
    {
        return $this->hasMany('Reservation');
    }
}