<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Cart;
use App\Models\OrderLine;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;

class CartController extends Controller
{
    public static function getCartItemCount()
    {
        $cart = session()->get('cart', []);
        return count($cart);
    }

    public function addProductToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $request->quantity;
        } else {
            $cart[$id] = [
                'product_id' => $id,
                'quantity' => $request->quantity,
                'price' => $product->price * (100 - $product->percentage) / 100,
                'name' => $product->name,
                'photo' => $product->photo
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCartProductQuantity(Request $request)
    {
        $cart = session()->get('cart');

        if (!$cart) {
            return redirect()->back()->with('error', 'Cart is empty!');
        }

        $product_id = $request->product_id;
        $quantity = $request->quantity;

        $product = Product::findOrFail($product_id);
        $discountedPrice = $product->price * (100 - $product->percentage) / 100;

        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] = $quantity;
            $cart[$product_id]['price'] = $discountedPrice;
            session()->put('cart', $cart);
        } else {
            return redirect()->back()->with('error', 'Product not found in cart!');
        }

        return redirect()->back()->with('success', 'Cart updated successfully!');
    }

    public function removeProductFromCart(Request $request)
    {
        $cart = session()->get('cart');

        if (!$cart) {
            return redirect()->back()->with('error', 'Cart is empty!');
        }

        $product_id = $request->input('product_id');

        if (isset($cart[$product_id])) {
            unset($cart[$product_id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product removed from cart successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in cart!');
    }

    public function showCart()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $key => $item) {
            if (is_array($item)) {
                $total += $item['price'] * $item['quantity'];
            }
        }

        return view('front.cart.index', ['cart' => $cart, 'total' => $total]);
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
        ]);

        $client = Client::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone_number' => $request->input('phone_number'),
        ]);

        $order = Order::create([
            'client_id' => $client->id,
            'order_date' => now(),
            'order_status' => 'yangi',
            'order_amount' => 0,
        ]);

        $cart = session()->get('cart', []);
        $orderAmount = 0;

        foreach ($cart as $item) {
            $total = $item['price'] * $item['quantity'];
            OrderLine::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'total' => $total,
            ]);
            $orderAmount += $total;
        }

        $order->update(['order_amount' => $orderAmount]);

        // Savatchani tozalash
        session()->forget('cart');

        return redirect()->route('cart.index')->with('success', 'Order placed successfully!');
    }
}
