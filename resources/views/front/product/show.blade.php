@extends('layout.helper')
@section('content')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(img/bg/bdrc-bg.jpg)">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Shop Details</h2>
                                <div class="breadcrumb-wrap">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Shop Details </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- shop-banner-area start -->
        <section class="shop-banner-area pt-120 pb-90 " data-animation="fadeInUp animated" data-delay=".2s">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="product-details-img mb-30">
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="home" role="tabpanel">
                                    <div class="product-large-img">
                                        <img src="/{{($product->photo)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="product-details mb-30">
                            <div class="product-details-title">
                                <p>{{$product->category->name}}</p>
                                <h1>{{$product->name}}</h1>
                                <div class="price">
                                    @if($product->percentage != '0')
                                        <span class="old-price">{{$product->price}} sum</span>
                                        <span>{{ ($product->price) * (100 - $product->percentage) / 100 }} sum</span>
                                    @else
                                        <span>{{ $product->price }} sum</span>
                                    @endif
                                </div>
                            </div>
                            <p>{{$product->description}}</p>
                            <div class="product-cat mt-30 mb-30">
                                <span>Category: {{$product->category->name}} </span>

                            </div>
                            <div class="product-details-action">
                                <form action="#">
                                    <div class="plus-minus">
                                        <div class="cart-plus-minus" style="display: flex; align-items: center; border: 1px solid #ddd; border-radius: 4px; overflow: hidden; margin-right: 20px;">
                                            <button type="button" style="background-color: #f8f9fa; border: none; padding: 10px; font-size: 16px; cursor: pointer;" onclick="changeQuantity(-1,{{$product->id}})">-</button>
                                            <input id="quantity-input" type="text" value="1" readonly style="width: 60px; text-align: center; border: none; font-size: 16px; padding: 10px; border-radius: 4px; border: 1px solid #ddd; margin: 0 5px;" />
                                            <button type="button" style="background-color: #f8f9fa; border: none; padding: 10px; font-size: 16px; cursor: pointer;" onclick="changeQuantity(1,{{$product->id}})">+</button>
                                        </div>
                                    </div>
                                    <input type="hidden" id="price" value="1000" /> <!-- Mahsulot narxi -->
                                    <p>Total Price: <span id="total-price"></span> sum</p>
                                    <button class="btn btn-black" type="submit" style="background-color: #000; color: #fff; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-banner-area end -->
    </main>
    <script>
        function changeQuantity(amount, id) {

            var input = document.getElementById('quantity-input');
            var currentValue = parseInt(input.value);
            var newValue = currentValue + amount;

            if (newValue < 0) {
                newValue = 0;
            }
            input.value = newValue;

            let key = 'productI'+id
            let productsLocal = window.localStorage.getItem('productsLocal')
            if (!productsLocal) {
                productsLocal = {};
            } else {
                productsLocal = JSON.parse(productsLocal);
            }
            productsLocal[key] = newValue
            window.localStorage.setItem('productsLocal', JSON.stringify(productsLocal));


            updateTotalPrice();
        }

        function updateTotalPrice() {
            var quantity = parseInt(document.getElementById('quantity-input').value);
            var price = parseFloat(document.getElementById('price').value);
            var totalPrice = quantity * price;

            document.getElementById('total-price').innerText = totalPrice.toFixed(2); // Yig'indi 2 ta kasrli raqam bilan ko'rsatiladi
        }

        // Sahifa yuklanishi bilan hisobni yangilash
        updateTotalPrice();
    </script>
@endsection
