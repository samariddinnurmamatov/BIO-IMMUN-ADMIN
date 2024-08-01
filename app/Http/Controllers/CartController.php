<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public static function getCartItemCount()
    {
        $cart = session()->get('cart', []);
        return count($cart);
    }
    public function addProductToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $cart = session()->get('cart', []);
        $discountedPrice = $product->price * (100 - $product->percentage) / 100;
        if (isset($cart[$request->product_id])) {
            $cart[$request->product_id]['quantity'] += $request->quantity;
            $cart[$request->product_id]['price'] = $discountedPrice;
        } else {
            $cart[$request->product_id] = [
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'price' => $discountedPrice,
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

        // Mahsulotni olish
        $product = Product::findOrFail($product_id);

        // Chegirmali narxni hisoblash
        $discountedPrice = $product->price * (100 - $product->percentage) / 100;

        // Agar $cart massivi bo'lsa, uni tekshirib chiqing va yangilanishni amalga oshiring
        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] = $quantity;
            $cart[$product_id]['price'] = $discountedPrice; // Narxni yangilash
            session()->put('cart', $cart);
        } else {
            return redirect()->back()->with('error', 'Product not found in cart!');
        }

        return redirect()->back()->with('success', 'Cart updated successfully!');
    }

    // app/Http/Controllers/CartController.php
    public function removeProductFromCart(Request $request)
    {
        $cart = session()->get('cart');

        if (!$cart) {
            return redirect()->back()->with('error', 'Cart is empty!');
        }

        $product_id = $request->input('product_id');

        // Agar $cart da mahsulot mavjud bo'lsa, o'chirib tashlang
        if (isset($cart[$product_id])) {
            // Mahsulotni o'chiring
            unset($cart[$product_id]);
            // Yangilangan savatni saqlang
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product removed from cart successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in cart!');
    }

    public function showCart()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        // Agar cart massivi bo'lsa, har bir element to'g'ri formatda ekanligini tekshirish
        foreach ($cart as $key => $item) {
            if (is_array($item)) {
                $total += $item['price'] * $item['quantity'];
            }
        }

        return view('front.cart.index', ['cart' => $cart, 'total' => $total]);
    }


}
