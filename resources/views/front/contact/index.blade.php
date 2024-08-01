@extends('layout.helper')
@section('content')
    <div class="container">
        <h2>Your Cart</h2>

        @if(session('cart_items') && count(session('cart_items')) > 0)
            <form id="updateCartForm" method="POST" action="{{ route('cart.update') }}">
                @csrf
                <div class="row">
                    @foreach(session('cart_items') as $cartItem)
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="/{{ $cartItem['photo'] }}" alt="">
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" href="">{{ $cartItem['name'] }}</a>
                                    <p>{{ $cartItem['description'] }}</p>
                                    <span class="text-primary me-1">${{ $cartItem['price'] }}</span>
                                    <input type="hidden" name="cart_items[{{ $cartItem['id'] }}][product_id]" value="{{ $cartItem['id'] }}">
                                    <input type="number" name="cart_items[{{ $cartItem['id'] }}][quantity]" value="{{ $cartItem['quantity'] }}" min="1" required>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update Cart</button>
{{--                <a href="{{ route('checkout') }}" class="btn btn-success mt-3">Proceed to Checkout</a>--}}
            </form>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>

@endsection
