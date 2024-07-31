<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderLineController extends Controller
{
public function index(){
    return view('orderLine.index');
}
}
