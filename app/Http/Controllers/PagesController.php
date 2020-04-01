<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'The Home';

        return view('index')->with('title', $title);
    }
    
    public function about() {
        $title = 'About us';
        return view('about')->with('title', $title);
    }

    public function posts() {
        $title = 'Posts Page';
        return view('posts')->with('title', $title);
    }
    
    public function users() {
        $data = array(
            'title' => 'Users Page',
            'names' => ['John', 'david', 'Holly']
        );
        return view('users')->with($data);
    }
}
