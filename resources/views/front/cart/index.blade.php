@extends('layout.helper')

@section('content')
    <body>

    <div class="container">
        <h2>Shopping Cart</h2>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Mahsulot nomi</th>
                <th>Soni</th>
                <th>Narxi</th>
                <th>Umumiy Narxi</th>
                <th>O'chirish</th>
            </tr>
            </thead>
            <tbody id="cart-items">
            <!-- Cart items will be populated here by JavaScript -->
            </tbody>
        </table>

        <div>
            <strong>Total: $<span id="cart-total">0.00</span></strong>
        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clientModal">
            Shop
        </button>

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
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            loadCartItems();
            updateCartTotal();
        });

        function loadCartItems() {
            let cartItems = JSON.parse(localStorage.getItem('productsLocal')) || {};

            for (const [key, value] of Object.entries(cartItems)) {
                let productId = key.replace('productI', '');
                addCartItemRow(productId, value);
            }
        }

        function addCartItemRow(productId, quantity) {
            let cartTable = document.getElementById('cart-items');
            let row = document.createElement('tr');

            // Here, you would replace with actual product data, assuming you have a function to fetch product details
            let product = getProductDetails(productId);

            row.innerHTML = `
            <td>${product.name}</td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-black decrease" onclick="changeQuantity(-1, ${productId})">−</button>
                    </div>
                    <input type="number" id="quantity-${productId}" name="quantity" class="form-control text-center quantity-amount" value="${quantity}" min="1" readonly>
                    <div class="input-group-append">
                        <button class="btn btn-outline-black increase" onclick="changeQuantity(1, ${productId})">+</button>
                    </div>
                </div>
            </td>
            <td>$${product.price.toFixed(2)}</td>
            <td>$<span id="total-${productId}">${(product.price * quantity).toFixed(2)}</span></td>
            <td>
                <button class="btn btn-danger btn-sm" onclick="removeCartItem(${productId})">Remove</button>
            </td>
        `;
            cartTable.appendChild(row);
        }

        function getProductDetails(productId) {
            // This is a mock function. Replace it with actual logic to get product details from your server or data source.
            const products = {
                1: { name: "Product 1", price: 10.00 },
                2: { name: "Product 2", price: 15.00 },
                3: { name: "Product 3", price: 20.00 }
            };
            return products[productId] || { name: "Unknown", price: 0.00 };
        }

        function changeQuantity(amount, productId) {
            let input = document.getElementById('quantity-' + productId);
            let currentValue = parseInt(input.value);
            let newValue = currentValue + amount;

            if (newValue < 1) {
                newValue = 1; // Minimal qiymat 1 bo'lishi kerak
            }
            input.value = newValue;

            let productsLocal = JSON.parse(localStorage.getItem('productsLocal')) || {};
            productsLocal['productI' + productId] = newValue;
            localStorage.setItem('productsLocal', JSON.stringify(productsLocal));

            updateTotalPrice(productId, newValue);
            updateCartTotal();
        }

        function updateTotalPrice(productId, quantity) {
            let product = getProductDetails(productId);
            let total = product.price * quantity;
            document.getElementById('total-' + productId).innerText = total.toFixed(2);
        }

        function updateCartTotal() {
            let total = 0;
            let cartItems = JSON.parse(localStorage.getItem('productsLocal')) || {};

            for (const [key, value] of Object.entries(cartItems)) {
                let productId = key.replace('productI', '');
                let product = getProductDetails(productId);
                total += product.price * value;
            }

            document.getElementById('cart-total').innerText = total.toFixed(2);
        }

        function removeCartItem(productId) {
            let productsLocal = JSON.parse(localStorage.getItem('productsLocal')) || {};
            delete productsLocal['productI' + productId];
            localStorage.setItem('productsLocal', JSON.stringify(productsLocal));

            document.getElementById('quantity-' + productId).closest('tr').remove();
            updateCartTotal();
        }
    </script>

    </body>

@endsection
