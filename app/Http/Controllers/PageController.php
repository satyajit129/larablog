<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function services(){
        return view('frontend.pages.services');
    }
    public function team(){
        return view('frontend.pages.team');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
}
