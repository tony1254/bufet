<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Session;

// use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('home');
    }
    public function raiz() {
        //Session::put('permission', [1, 2, 3, 4, 5]);
        return view('welcome');
    }
}
