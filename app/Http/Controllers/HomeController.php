<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
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
        return view('home');
    }

    public function send(){
        Mail::send(['text'=>'testEmail'],['name','Abdulaziz'], function($message){
            $message->to('ezooag@gmail.com','to you ')->subject('Test Login');
            $message->from('ezooag@gmail.com','azo');
        });
    }
}
