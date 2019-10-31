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
        return view('frontend.home.home');
    }
    public function course(){

        return view('frontend.course.course');
    }
    public function event(){

        return view('frontend.event.event');
    }
    public function blog(){

        return view('frontend.blog.blog');
    }
    public function contact(){

        return view('frontend.contact.contact');
    }
}
