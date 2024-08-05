<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Stock;
use App\Models\OrderLine;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id', // `exists` qoidasini qo'shish
            'order_date' => 'required|date', // `date` formatni tekshirish
            'order_amount' => 'required|numeric|min:0', // `numeric` va `min` qoidasini qo'shish
            'order_status' => 'required|string', // Qo'lda belgilangan statuslar
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

    public function updateOrderStatus(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);

        $previousStatus = $order->order_status;

        $order->order_status = $request->input('order_status');
        $order->save();

        if (in_array($order->order_status, ['yetkazildi'])) {
            // Buyurtma qatorlarini olish
            $orderLines = OrderLine::where('order_id', $orderId)->get();

            foreach ($orderLines as $orderLine) {
                // Stokni yangilash
                $stock = new Stock();
                $stock->product_id = $orderLine->product_id;
                $stock->quantity = $orderLine->quantity; // Yetkazilganda miqdorni kamaytirish
                $stock->type = 'out'; // Ma'lumot turini qo'shish
                $stock->save();

                // Mahsulotni yangilash
                $product = Product::find($orderLine->product_id);
                if ($product) {
                    $product->quantity -= $orderLine->quantity;
                    $product->save();
                }
            }

        } elseif ($order->order_status === 'rad_etildi') {
            // Buyurtma qatorlarini olish
            $orderLines = OrderLine::where('order_id', $orderId)->get();

            foreach ($orderLines as $orderLine) {
                // Stokni yangilash
                $stock = new Stock();
                $stock->product_id = $orderLine->product_id;
                $stock->quantity = $orderLine->quantity; // Rad etilganda miqdorni qaytarish
                $stock->type = 'in'; // Ma'lumot turini qo'shish
                $stock->save();

                // Mahsulotni yangilash
                $product = Product::find($orderLine->product_id);
                if ($product) {
                    $product->quantity += $orderLine->quantity;
                    $product->save();
                }
            }
        }

        return redirect()->back()->with('success', 'Order status updated and stock adjusted.');
    }
}


