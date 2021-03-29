<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "I'm learning Laravel 8";

        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = "I'm learning Laravel 8";
        return view('pages.about')->with('title',$title);
    }

    public function service(){
        $data = array(
            'title' => "I'm learning Laravel 8",
            'Services' => ['programmer','api','i dontknow']
        );

        return view('pages.service')->with($data);
    }
}
