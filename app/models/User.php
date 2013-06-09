<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{

    protected $hidden = array('password');

    public static $rules = array(
        'email'     => 'required|email',
        'password'  => 'required|min:5',
        'phone'     => 'required|numeric',
        'firstname' => 'required',
        'lastname'  => 'required',
        'studentid' => 'required',
    );

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }

    public function reservations()
    {
        return $this->hasMany('Reservation');
    }

}