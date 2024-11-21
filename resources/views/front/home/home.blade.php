@extends('layout.helper')
@section('content')

    @php
        $lang = \Illuminate\Support\Facades\App::getLocale();
            use Carbon\Carbon;
        $products=\App\Models\Product::latest()->take(5)->get();
        $advices=\App\Models\Advice::latest()->take(3)->get();
        $says=\App\Models\Say::latest()->take(4)->get();
        $blogs=\App\Models\Blog::latest()->take(4)->get();
        $photos=\App\Models\Photo::latest()->take(5)->get();

    @endphp
    <main>
        <!-- slider-area -->
        <section id="home" class="slider-area fix p-relative">

            <div class="slider-active" style="background: #141b22;">
                <div class="single-slider slider-bg d-flex align-items-center"
                     style="background-image: url(/assets/front/img/slider/slider_bg.png); background-size: cover;">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-7 col-md-6">
                                <div class="slider-content s-slider-content">
                                    <h5 data-animation="fadeInUp" data-delay=".4s">{{__('main.home1')}}</h5>
                                    <h2 data-animation="fadeInUp" data-delay=".4s">{{__('main.home2')}}
                                        <span>{{__('main.home3')}}</span></h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">{{__('main.home5')}}.</p>

                                    <div class="slider-btn mt-30">
                                        <a href="{{route('about')}}" class="btn ss-btn mr-15"
                                           data-animation="fadeInLeft" data-delay=".4s">{{__('main.home4')}} <i
                                                    class="fal fa-long-arrow-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 p-relative">
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- slider-area-end -->

        <!-- about-area -->
        <section class="about-area about-p pt-120 pb-120 p-relative fix">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft"
                             data-delay=".4s">
                            <img src="/assets/front/img/features/about_img_02.png" alt="img">

                            <div class="about-text second-about">
                                <img src="/assets/front/img/features/about-play.png" alt="img">
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="about-content s-about-content pl-60 wow fadeInRight  animated"
                             data-animation="fadeInRight" data-delay=".4s">
                            <div class="about-title second-title pb-25">
                                <h5>{{__('main.about')}}</h5>
                                <h2>{{__('main.home6')}}</h2>
                            </div>
                            <p>{{__('main.home7')}}</p>
                            <p>{{__('main.home8')}}</p>
                            <div class="about-content2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="green2">
                                            <li>
                                                <div class="abcontent">
                                                    <div class="ano"><span><img
                                                                    src="/assets/front/img/icon/ab-icon-01.png"
                                                                    alt="img">   </span></div>
                                                    <div class="text"><h3>{{__('main.home9')}}</h3>
                                                        <p>{{__('main.home10')}}</p></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="abcontent">
                                                    <div class="ano"><span><img
                                                                    src="/assets/front/img/icon/ab-icon-02.png"
                                                                    alt="img"> </span></div>
                                                    <div class="text"><h3>{{__('main.home111')}} </h3>
                                                        <p>{{__('main.home12')}}</p></div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- about-area-end -->
        <!-- services-five-area -->
        <section id="services-05" class="services-05 pt-120 pb-100 p-relative fix"
                 style="background: url(img/bg/services-bg.png); background-repeat: no-repeat;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-title center-align mb-20">
                            <h5>{{__('main.home13')}}</h5>
                            <h2>
                                {{__('main.home14')}}
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-right  d-none d-lg-block">
                        <a href="#contact" class="btn ss-btn wow fadeInDown animated" data-animation="fadeInDown"
                           data-delay=".4s">{{__('main.home15')}}</a>
                    </div>
                    <div class="col-lg-12">
                        <div class="services-active">
                            @foreach($blogs as $blog=>$value)
                                <div class="services-box-05" data-animation="fadeInUp" data-delay=".4s">
                                    <div class="services-icon-05">
                                        @php
                                            $firstPhoto = $value->photos[0] ?? 'default.jpg'; // Agar array bo'sh bo'lsa, default.jpg ishlatiladi
                                        @endphp
                                        <a href="{{route('blog.details', $value->id)}}"><img
                                                    src="{{ url('storage/uploads/'.$firstPhoto) }}" alt="icon01"></a>
                                    </div>
                                    <div class="services-content-05">
                                        <div class="icon">
                                            <h4>
                                                <a href="{{route('blog.details', $value->id)}}">{{$value['title_'.$lang]}}</a>
                                            </h4>
                                        </div>
                                        <p>{{Str::limit($value['description_'. $lang], 50)}}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
        </section>
        <!-- services-three-area -->

        <!-- frequently-area -->
        <section class="faq-area pb-120 p-relative fix">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-6">
                        <div class="faq-wrap pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="faq-btn" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree">
                                                {{__('main.home22')}}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse show"
                                         data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            {{__('main.home23')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne">
                                                {{__('main.home24')}}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            {{__('main.home25')}} </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo">
                                                {{__('main.home26')}}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            {{__('main.home27')}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title wow fadeInLeft animated mb-20" data-animation="fadeInDown animated"
                             data-delay=".2s">
                            <h5>{{__('main.home28')}}</h5>
                            <h2>{{__('main.home29')}}</h2>
                        </div>
                        <p>{{__('main.home30')}}</p>
                        <p>{{__('main.home31')}}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- frequently-area-end -->
        <!-- product-slider -->
        <section id="editor-choice" class="product-slider pt-120 pb-90 fix"
                 style="background: url(img/bg/product-bg.png); background-size: contain; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-align mb-50 text-center wow fadeInDown  animated"
                             data-animation="fadeInDown" data-delay=".4s">
                            <h5>{{__('main.home32')}}</h5>
                            <h2>
                                {{__('main.home33')}}
                            </h2>

                        </div>

                    </div>

                </div>
                <div class="row home-blog-active">
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-12">

                            <div class="product mb-40">
                                <div class="product__img">
                                    <a href="{{route('product.details', $product->id)}}"><img src="/{{$product->photo}}"
                                                                                              alt=""></a>
                                    <div class="product-action text-center">
                                        <form action="{{ route('cart.addItem', $product->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <button role="button" class="btn btn-primary"
                                                    type="submit">{{__('main.shop')}}</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product__content pt-30">

                                    <h4 class="pro-title"><a
                                                href="{{route('product.details', $product->id)}}">{{$product['name_'.$lang]}}</a>
                                    </h4>
                                    <div class="price">
                                        @if($product->percentage>0)
                                            <span class="old-price">{{$product->price}}</span>
                                        @endif
                                        <span>{{($product->price)*(100-$product->percentage)/100}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- product-slider -->
        <!-- testimonial-area -->
        <section class="testimonial-area pt-120 pb-100 p-relative fix"
                 style="background: url(img/bg/services-bg.png); background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-50 wow fadeInDown animated text-center" data-animation="fadeInDown"
                             data-delay=".4s">
                            <h5>{{__('main.home34')}}</h5>
                            <h2>
                                {{__('main.home35')}}
                            </h2>
                        </div>

                    </div>

                    <div class="col-lg-12">
                        <div class="testimonial-active">
                            @foreach($says as $say=>$value)
                                <div class="single-testimonial">
                                    <div class="testi-author">
                                        <img src="/{{ $value->photo }}" alt="img">
                                        <div class="ta-info">
                                            <h6>{{$value->name}}</h6>
                                            <span>{{$value['position_'.$lang]}}</span>
                                        </div>
                                    </div>
                                    <p>{{$value['description_'.$lang]}}</p>

                                    <div class="qt-img">
                                        <img src="assets/front/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->
        <!-- steps-area -->
        <section class="steps-area p-relative pb-120">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-12">
                        <div class="wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                            <img src="assets/front/img/bg/steps-img.png" alt="class image">
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="pl-60">
                            <div class="section-title mb-50 wow fadeInDown animated" data-animation="fadeInDown"
                                 data-delay=".4s">
                                <h5>{{__('main.home39')}}</h5>
                                <h2>{{__('main.home40')}}</h2>
                            </div>
                            <ul>
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp"
                                         data-delay=".4s">
                                        <div class="dnumber">
                                            <div class="date-box"><img src="assets/front/img/icon/fea-icon01.png"
                                                                       alt="icon"></div>
                                        </div>
                                        <div class="text">
                                            <h3>{{__('main.home41')}}</h3>
                                            <p>{{__('main.home42')}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp"
                                         data-delay=".4s">
                                        <div class="dnumber">
                                            <div class="date-box"><img src="assets/front/img/icon/fea-icon02.png"
                                                                       alt="icon"></div>
                                        </div>
                                        <div class="text">
                                            <h3>{{__('main.home43')}}</h3>
                                            <p>{{__('main.home44')}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp"
                                         data-delay=".4s">
                                        <div class="dnumber">
                                            <div class="date-box"><img src="assets/front/img/icon/fea-icon03.png"
                                                                       alt="icon"></div>
                                        </div>
                                        <div class="text">
                                            <h3>{{__('main.home45')}}</h3>
                                            <p>{{__('main.home46')}}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- steps-area-end -->

        <!-- blog-area -->
        <section id="blog" class="blog-area p-relative fix pt-120 pb-90"
                 style="background: url(assets/front/img/bg/services-bg.png); background-repeat: no-repeat;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-title center-align mb-50 text-center wow fadeInDown animated"
                             data-animation="fadeInDown" data-delay=".4s">
                            <h5>{{__('main.home47')}}</h5>
                            <h2>
                                {{__('main.home48')}}
                            </h2>

                        </div>

                    </div>
                </div>
                <div class="row">
                    @foreach($advices as $advice)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp"
                                 data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="{{route('advice.details', $advice->id)}}"><img
                                                src="{{ url('storage/uploads/'.$advice->photo) }}" alt="img"></a>
                                </div>
                                <div class="blog-content2">
                                    <div class="date-home">
                                        <i class="fal fa-calendar-alt"></i> {{Carbon::parse($advice->created_at)->format('jS F Y')}}
                                    </div>
                                    <div class="b-meta">
                                        <div class="meta-info">
                                            <ul>
                                                <li><i class="fal fa-user"></i> By Admin</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4><a href="{{route('advice.details', $advice->id)}}">{{$advice['title_' . $lang]}}</a></h4>
                                    <p>{{  Str::limit($advice['description_' . $lang], 100) }}</p>
                                    <div class="blog-btn"><a href="{{route('advice.details', $advice->id)}}">Read More
                                            <i class="fal fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

    <!-- brand-area -->
    <div class="brand-area pb-120">
        <div class="container">
            <div class="row brand-active">
               @foreach($photos as $photo)
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="{{$photo->photo}}" alt="img">
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

</main>
@endsection
