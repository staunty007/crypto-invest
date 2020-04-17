<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use App\User;

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
        $this->middleware('nopackage')->except('plans');
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
        $packages = Package::all();
        return view('pages.auth.plans', compact('packages'));
        //return view('home');
    }

}
