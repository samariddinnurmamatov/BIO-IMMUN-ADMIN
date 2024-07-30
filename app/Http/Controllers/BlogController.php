<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blog.index');
    }
    public function create(){
        return view('blog.create');
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);

    }

}
