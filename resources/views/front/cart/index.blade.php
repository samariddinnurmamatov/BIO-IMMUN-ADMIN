@extends('layout.helper')

@section('content')
    @php
        $lang = \Illuminate\Support\Facades\App::getLocale();
    @endphp
    <div class="container">

        @if(count($cart) > 0)
            <table class="table table-striped table-bordered mt-5">
                <thead>
                <tr>
                    <th>{{__('main.cart1')}}</th>
                    <th>{{__('main.cart2')}}</th>
                    <th>{{__('main.cart3')}}</th>
                    <th>{{__('main.cart4')}}</th>
                    <th>{{__('main.cart5')}}</th>
                    <th>{{__('main.cart6')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $item)
                        @php
                    $product=\App\Models\Product::findOrFail($item['product_id']);
                    @endphp
                    <tr>
                        <td>{{ $product['name_'.$lang] ?? 'Unknown' }}</td>
                        <td>
                            <img src="/{{ $item['photo'] ?? 'Unknown' }}" style="width: 100px; height: auto;">
                        </td>
                        <td>
                            <form action="{{ route('cart.updateQuantity') }}" method="POST"
                                  class="d-flex align-items-center justify-content-center">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item['product_id'] }}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-black decrease" type="submit"
                                                onclick="event.preventDefault(); this.closest('form').querySelector('.quantity-amount').stepDown(); this.closest('form').submit();">
                                            −
                                        </button>
                                    </div>
                                    <input type="number" id="quantity-{{ $item['product_id'] }}" name="quantity"
                                           class="form-control text-center quantity-amount"
                                           value="{{ $item['quantity'] ?? 1 }}" min="1">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-black increase" type="submit"
                                                onclick="event.preventDefault(); this.closest('form').querySelector('.quantity-amount').stepUp(); this.closest('form').submit();">
                                            +
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td>{{ $item['price'] ?? '0.00' }} sum </td>
                        <td>{{ ($item['price'] ?? 0) * ($item['quantity'] ?? 1) }} sum</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to remove this item?');">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item['product_id'] }}">
                                <button type="submit" class="btn btn-danger btn-sm">{{__('main.cart7')}}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div>
                <strong>Total: {{ $total }} sum</strong>
            </div>
            <!-- Cart table -->
            <!-- Cart table -->

            <!-- Shop button to trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#clientModal">
                Shop
            </button>

            <!-- Client Modal -->
            <div class="modal fade" id="clientModal" tabindex="-1" aria-labelledby="clientModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('cart.checkout') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="clientModalLabel">Client Information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number"
                                           required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Checkout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        @else
            <p>Your cart is empty!</p>
        @endif
    </div>
    <!-- Modal -->

    <script>
        function updateCartTotal() {
            var total = 0;
            @foreach($cart as $item)
            var quantity = parseInt(localStorage.getItem('quantity-{{ $item['product_id'] }}')) || {{ $item['quantity'] ?? 1 }};
            var price = parseFloat('{{ $item['price'] ?? 0 }}');
            total += price * quantity;
            @endforeach
            document.querySelector('strong').innerText = 'Total: $' + total.toFixed(2);
        }

        function removeItem(productId) {
            localStorage.removeItem('quantity-' + productId);
        }
    </script>

@endsection
