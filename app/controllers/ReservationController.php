<?php

class ReservationController extends BaseController
{

    public function showDashboard()
    {
        $now = date('d.m.Y');

        $ts = strtotime($now);
        $weekStart = (date('N', $ts) == 1) ? $ts : strtotime('last monday', $ts);
        $weekEnd = strtotime('next friday', $weekStart);

        $reservations = Reservation::where('date', '>=', date('Y-m-d', $weekStart))->where('date', '<=', date('Y-m-d', $weekEnd))->get();


        return View::make('dashboard');
    }

}