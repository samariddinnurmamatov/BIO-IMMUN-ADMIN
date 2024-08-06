@extends('layout.helper')
@section('content')
    <?php
    $categories=\App\Models\Category::all();
    ?>
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/assets/front/img/bg/video-img.png)">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Mahsulotlar</h2>
                                <div class="breadcrumb-wrap">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home')}}">Bosh Sahifa</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Mahsulotlar </li>
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
        <!-- shop-area -->
        <section class="shop-area pt-120 pb-120 p-relative " data-animation="fadeInUp animated" data-delay=".2s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                    </div>
                    <div class="col-lg-6 col-sm-6 text-right">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="menu_order" selected="selected">Kategoriyalar</option>
                            @foreach($categories as $category)
                                <option value="popularity">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="row align-items-center">
                    @foreach($products as $product=>$value)
                        <div class="col-lg-3 col-md-6">
                            <div class="product mb-40">
                                <div class="product__img">
                                    <a href="{{route('product.details', $value->id)}}"><img src="{{ $value->photo }}" alt=""></a>
                                    <div class="product-action text-center">
                                        <form action="{{ route('cart.addItem', $value->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $value->id }}">
                                            <button type="submit" class="btn btn-primary">Savatga qo'shish</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product__content text-center pt-30">
                                    <span class="pro-cat"><a href="#">{{$value->category->name}}</a></span>
                                    <h4 class="pro-title"><a href="{{route('product.details', $value->id)}}">{{$value->name}}</a></h4>
                                    <p>
                                        {{  Str::limit($value->description, 20) }}
                                    </p>
                                    <div class="price">
                                        @if($value->percentage != '0')
                                            <span class="old-price">{{$value->price}} sum</span>
                                            <span>{{ ($value->price) * (100 - $value->percentage) / 100 }} sum</span>
                                        @else
                                            <span>{{ $value->price }} sum</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <div class="row">
                            <div class="col-12">
                                <div class="pagination-wrap mt-50 text-center">

                                    {{$products->links('pagination.custom_two')}}

                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="pagination-wrap mt-50 text-center">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item active"><a href="#">1</a></li>
                                    <li class="page-item"><a href="#">2</a></li>
                                    <li class="page-item"><a href="#">3</a></li>
                                    <li class="page-item"><a href="#">...</a></li>
                                    <li class="page-item"><a href="#">10</a></li>
                                    <li class="page-item"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-area-end -->
    </main>
@endsection
