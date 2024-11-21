@extends('layout.helper')
@section('content')
    <?php
    $lang = \Illuminate\Support\Facades\App::getLocale();
    ?>
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/assets/front/img/bg/video-img.png)">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>{{$product['name_'.$lang]}}</h2>
                                <div class="breadcrumb-wrap">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('main.home')}}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{__('main.products')}} </li>
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
                                <p>{{$product->category['name_' . $lang]}}</p>
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
                            <p>{{$product['description_' . $lang]}}</p>
                            <div class="product-cat mt-30 mb-30">
                                <span>{{__('main.cart8')}}: {{$product->category['name_' . $lang]}} </span>

                            </div>
                            <div class="product-details-action">
                                <form action="{{ route('cart.addItem', $product->id) }}" method="POST">
                                    @csrf
                                    <div class="plus-minus">
                                        <div class="cart-plus-minus" style="display: flex; align-items: center; border: 1px solid #ddd; border-radius: 4px; overflow: hidden; margin-right: 20px;">
                                            <button type="submit" name="change_quantity" value="-1" style="background-color: #f8f9fa; border: none; padding: 10px; font-size: 16px; cursor: pointer;">-</button>
                                            <input id="quantity-input" type="text" value="{{ session('cart.'.$product->id.'.quantity', 0) }}" readonly style="width: 60px; text-align: center; border: none; font-size: 16px; padding: 10px; border-radius: 4px; border: 1px solid #ddd; margin: 0 5px;" />
                                            <button type="submit" name="change_quantity" value="1" style="background-color: #f8f9fa; border: none; padding: 10px; font-size: 16px; cursor: pointer;">+</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="price" value="{{ ($product->price) * (100 - $product->percentage) / 100 }}" /> <!-- Mahsulot narxi -->
                                    <p>{{__('main.cart5')}} <span id="total-price">{{ session('cart.'.$product->id.'.quantity', 0) * ($product->price * (100 - $product->percentage) / 100) }}</span> sum</p>
                                    <button class="btn btn-black" type="submit" style="background-color: #000; color: #fff; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">{{__('main.shop')}}</button>
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
        function changeQuantity(change, productId) {
            let quantityInput = document.getElementById('quantity-input');
            let quantity = parseInt(quantityInput.value) + change;
            if (quantity < 0) quantity = 0;
            quantityInput.value = quantity;

            let price = document.getElementById('price').value;
            let totalPrice = quantity * price;
            document.getElementById('total-price').innerText = totalPrice + ' sum';
        }
    </script>



@endsection
