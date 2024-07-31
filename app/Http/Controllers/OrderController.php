<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('admin.order.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id', // `exists` qoidasini qo'shish
            'order_date' => 'required|date', // `date` formatni tekshirish
            'order_amount' => 'required|numeric|min:0', // `numeric` va `min` qoidasini qo'shish
            'order_status' => 'required|string|in:Verified,Waiting,Rejected', // Qo'lda belgilangan statuslar
        ]);
//        dd($request->all());

        Order::create([
            'user_id' => $request->user_id,
            'order_date' => $request->order_date,
            'order_amount' => $request->order_amount,
            'order_status' => $request->order_status
        ]);

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

}
