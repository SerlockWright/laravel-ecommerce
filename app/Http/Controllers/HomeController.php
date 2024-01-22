<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
        $blogs = [
            [
                'title' => 'Blog 1',
                'content' => 'This is blog 1 content',
                'status' => 0
            ],
            [
                'title' => 'Blog 2',
                'content' => 'This is blog 2 content',
                'status' => 1
            ],
            [
                'title' => 'Blog 3',
                'content' => 'This is blog 3 content',
                'status' => 1
            ],
            [
                'title' => 'Blog 4',
                'content' => 'This is blog 4 content',
                'status' => 0
            ]
        ];
        return view('home', compact('blogs'));
    }
}
