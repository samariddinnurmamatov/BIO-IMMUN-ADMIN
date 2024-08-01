@extends('layout.helper')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
                <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
            </div>
            <div class="row gx-4">
                <!-- Mahsulot sahifasida -->
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="/{{ $product->photo }}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="">{{ $product->name }}</a>
                                <p>{{ $product->description }}</p>
                                <span
                                    class="text-primary me-1">${{ ($product->price) * (100 - $product->percentage) / 100 }}</span>
                                @if($product->percentage == 0)
                                @else
                                    <span class="text-decoration-line-through">${{ $product->price }}</span>
                                @endif
                                <form class="add-to-cart-form mt-2" method="POST"
                                      action="{{ route('cart.addItem', ['id'=>$product->id]) }}">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <label for="quantity{{ $product->id }}"></label>
                                    <input hidden type="number" id="quantity{{ $product->id }}" name="quantity" min="1"
                                           value="1">
                                    <button type="submit" class="btn btn-primary mt-2">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Product End -->

@endsection
