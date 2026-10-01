<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }


    function about(){
        return view('about');
    }

    
    function contact(){
        return view('contact');
    }

}
