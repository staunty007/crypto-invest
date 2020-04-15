<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $route = 'pages.guest.';

    public function index() {
        return view($this->route . "index");
    }
    public function about() {
        return view($this->route . "about-us");
    }
    public function contact() {
        return view($this->route . "contact");
    }
    public function features() {
        return view($this->route . "features");
    }
}

