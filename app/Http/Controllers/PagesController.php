<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'David Coutts | Home',
        );
        return view('pages.index')->with($data);
    }

    public function sites(){
        $data = array(
            'title' => 'David Coutts | Work',
        );
        return view('pages.work')->with($data);
    }

    public function services(){
        $data = array(
            'title' => 'David Coutts | Services',
        );
        return view('pages.services')->with($data);
    }

    public function contact(){
        $data = array(
            'title' => 'David Coutts | Contact Me',
        );
        return view('pages.contact')->with($data);
    }

    public function resume(){
        $data = array(
            'title' => 'David Coutts | Resume',
        );
        return view('pages.resume')->with($data);
    }
}
