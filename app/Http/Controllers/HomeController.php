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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function home()
    {
        return view('home');
    }
    public function index()
    {
        return view('index');
    }
    public function login(){
        return view('login');
    }

    public function nueva(){
      return view('nueva');
    }

    public function faq(){
        return view('faq');
    }
    public function register(){
        return view('register');
    }
    public function welcome(){
        return view('welcome');
    }


}
