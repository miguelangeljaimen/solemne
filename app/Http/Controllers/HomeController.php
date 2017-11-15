<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function calcularDias(){
        $date = "2016-09-17 11:00:00";
        $datework = new Carbon($date);

        Carbon::diffInDay()
        printf(Carbon::createFromTimestamp(0)->diffInDays());
        return view('app.testAgenda.index');
    }
}
