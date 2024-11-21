<?php

namespace App\Http\Controllers;

use App\Models\OrderLine;
use Illuminate\Http\Request;

class OrderLineController extends Controller
{
public function index(){
    $orders = OrderLine::orderBy('created_at', 'desc')->paginate(10);
    return view('admin.orderLine.index', compact('orders'));
}

public function dashboard_page(){
    $orders = OrderLine::orderBy('created_at', 'desc')->paginate(10);
    return view('admin.welcome', compact('orders'));
}
}
