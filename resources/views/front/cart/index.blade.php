@extends('layout.helper')

@section('content')
    <div class="container">
        <h2>Shopping Cart</h2>

        @if(count($cart) > 0)
            <table class="table">
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
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-black decrease" type="button" onclick="changeQuantity('{{ $item['product_id'] }}', -1)">−</button>
                                </div>
                                <input type="text" id="quantity-{{ $item['product_id'] }}" name="quantity" class="form-control text-center quantity-amount" value="{{ $item['quantity'] ?? 1 }}" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-black increase" type="button" onclick="changeQuantity('{{ $item['product_id'] }}', 1)">+</button>
                                </div>
                            </div>
                        </td>
                        <td>${{ $item['price'] ?? '0.00' }}</td>
                        <td>${{ ($item['price'] ?? 0) * ($item['quantity'] ?? 1) }}</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST" style="display: inline;" onsubmit="removeItem('{{ $item['product_id'] }}')">
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
            <button class="btn btn-primary" data-toggle="modal" data-target="#checkoutModal">Checkout</button>
        @else
            <p>Your cart is empty!</p>
        @endif
    </div>
    <!-- Modal -->
    <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="checkoutForm" action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Place Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Load quantities from localStorage on page load
        document.addEventListener("DOMContentLoaded", function() {
            @foreach($cart as $item)
                let quantity = localStorage.getItem('quantity-{{ $item['product_id'] }}');
                if (quantity) {
                    document.getElementById('quantity-{{ $item['product_id'] }}').value = quantity;
                }
            @endforeach
        });

        function changeQuantity(productId, change) {
            var quantityInput = document.getElementById('quantity-' + productId);
            var currentQuantity = parseInt(quantityInput.value);
            var newQuantity = currentQuantity + change;

            if (newQuantity < 1) {
                newQuantity = 1;
            }

            quantityInput.value = newQuantity;

            // Save the updated quantity to localStorage
            localStorage.setItem('quantity-' + productId, newQuantity);

            // Update the total price for the item
            var price = parseFloat(document.querySelector(`#quantity-${productId}`).closest('tr').querySelector('td:nth-child(3)').innerText.replace('$', ''));
            document.querySelector(`#quantity-${productId}`).closest('tr').querySelector('td:nth-child(4)').innerText = '$' + (price * newQuantity).toFixed(2);

            // Update the total price for the cart
            updateCartTotal();
        }

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
