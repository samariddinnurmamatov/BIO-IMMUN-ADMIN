@extends('layout.helper')

@section('content')
    <div class="container">
        <h2>Shopping Cart</h2>

        @if(count($cart) > 0)
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td>{{ $item['name'] ?? 'Unknown' }}</td>
                        <td>
                            <form action="{{ route('cart.updateQuantity') }}" method="POST" class="d-flex align-items-center justify-content-center">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item['product_id'] }}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-black decrease" type="submit" onclick="event.preventDefault(); this.closest('form').querySelector('.quantity-amount').stepDown(); this.closest('form').submit();">−</button>
                                    </div>
                                    <input type="number" id="quantity-{{ $item['product_id'] }}" name="quantity" class="form-control text-center quantity-amount" value="{{ $item['quantity'] ?? 1 }}" min="1">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-black increase" type="submit" onclick="event.preventDefault(); this.closest('form').querySelector('.quantity-amount').stepUp(); this.closest('form').submit();">+</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td>${{ $item['price'] ?? '0.00' }}</td>
                        <td>${{ ($item['price'] ?? 0) * ($item['quantity'] ?? 1) }}</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this item?');">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item['product_id'] }}">
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div>
                <strong>Total: ${{ $total }}</strong>
            </div>
            <!-- Cart table -->
            <!-- Cart table -->

            <!-- Shop button to trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clientModal">
                Shop
            </button>

            <!-- Client Modal -->
            <div class="modal fade" id="clientModal" tabindex="-1" aria-labelledby="clientModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('cart.checkout') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="clientModalLabel">Client Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
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
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

        // function changeQuantity(productId, change) {
        //     var quantityInput = document.getElementById('quantity-' + productId);
        //     var currentQuantity = parseInt(quantityInput.value);
        //     var newQuantity = currentQuantity + change;
        //
        //     if (newQuantity < 1) {
        //         newQuantity = 1;
        //     }
        //
        //     quantityInput.value = newQuantity;
        //
        //     // Save the updated quantity to localStorage
        //     localStorage.setItem('quantity-' + productId, newQuantity);
        //
        //     // Update the total price for the item
        //     var price = parseFloat(document.querySelector(`#quantity-${productId}`).closest('tr').querySelector('td:nth-child(3)').innerText.replace('$', ''));
        //     document.querySelector(`#quantity-${productId}`).closest('tr').querySelector('td:nth-child(4)').innerText = '$' + (price * newQuantity).toFixed(2);
        //
        //     // Update the total price for the cart
        //     updateCartTotal();
        // }

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
