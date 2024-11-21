@extends('layout.helper')
@section('content')
    <?php
    $lang = \Illuminate\Support\Facades\App::getLocale();
    $categories=\App\Models\Category::all();
    ?>
    <main>
        <style>
            .page-item.active{
                border: none;
                height: 50px;
                width: 50px;
                display: block;
                line-height: 50px;
                background-color: black;
                border-radius: 50%;
                color: #fff;
                font-size: 14px;
                text-align: center;
            }
        </style>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex p-relative align-items-center" style="background-image:url(/assets/front/img/bg/video-img.png)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>{{$category['name_'.$lang]}}</h2>
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('main.home')}}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{__('main.products')}}</li>
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
        <section class="shop-area pt-120 pb-120 p-relative" data-animation="fadeInUp animated" data-delay=".2s">
            <div class="container display-flex">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row align-items-center">
                            @foreach($products as $product)
                                <div class="col-lg-4 col-md-6">
                                    <div class="product mb-40">
                                        <div class="product__img">
                                            <a href="{{route('product.details', $product->id)}}">
                                                <img src="/{{ $product->photo }}" alt="" style="height: 180px"></a>
                                            <div class="product-action text-center mt-3">
                                                <a href="{{ route('cart.addItem', $product->id) }}"
                                                   onclick="event.preventDefault(); document.getElementById('add-to-cart-form-{{ $product->id }}').submit();"
                                                   class="btn btn-primary btn-sm px-4 py-2" style="border-radius: 50px; background-color: #ff7f50; border: none; transition: background-color 0.3s ease;">
                                                    <i class="fas fa-shopping-cart"></i> {{__('main.shop')}}
                                                </a>
                                                <form id="add-to-cart-form-{{ $product->id }}" action="{{ route('cart.addItem', $product->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product__content text-center pt-30">
                                            <span class="pro-cat"><a href="#">{{ $product->category['name_' . $lang] }}</a></span>
                                            <h4 class="pro-title"><a href="{{route('product.details', $product->id)}}">{{ $product['name_' . $lang] }}</a></h4>
                                            <p>{{ Str::limit($product['description_' . $lang], 20) }}</p>
                                            <div class="price">
                                                @if($product->percentage != 0)
                                                    <span class="old-price">{{ $product->price }} sum</span>
                                                    <span>{{ ($product->price) * (100 - $product->percentage) / 100 }} sum</span>
                                                @else
                                                    <span>{{ $product->price }} sum</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <aside class="sidebar-widget">
                            <section id="search-3" class="widget widget_search">
                                <h2 class="widget-title">Search</h2>
                                <form role="search" method="get" class="search-form" action="http://wordpress.zcube.in/finco/">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                                    </label>
                                    <input type="submit" class="search-submit" value="Search" />
                                </form>
                            </section>
                            <section id="categories-1" class="widget widget_categories">
                                <h2 class="widget-title">{{__('main.categories')}}</h2>
                                <ul>
                                  @foreach($categories as $category)
                                        <li class="cat-item cat-item-16"><a href="{{route('category.showPage', $category->id)}}">{{$category['name_'.$lang]}}</a>
                                            {{count($category->products)}}</li>
                                  @endforeach

                                </ul>
                            </section>
                        </aside>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="pagination-wrap mt-50 text-center">
                            {{ $products->links('pagination.custom_two') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-area-end -->
    </main>
@endsection

