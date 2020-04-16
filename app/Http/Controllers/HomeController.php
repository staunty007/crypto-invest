<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.auth.index');
        //return view('home');
    }

    public function profile()
    {
        return view('pages.auth.profile');
        //return view('home');
    }

    public function plans()
    {
        return view('pages.auth.plans');
        //return view('home');
    }
}
