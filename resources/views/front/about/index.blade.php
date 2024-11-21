@extends('layout.helper')
@section('content')
    @php
        $lang = \Illuminate\Support\Facades\App::getLocale();
       $says=\App\Models\Say::latest()->take(4)->get();
       $photos=\App\Models\Photo::latest()->take(5)->get();
    @endphp
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/assets/front/img/bg/video-img.png)">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>{{__('main.about')}}</h2>
                                <div class="breadcrumb-wrap">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('main.home')}}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{__('main.about')}}</li>
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
        <!-- about-area -->
        <section class="about-area about-p pt-120 pb-120 p-relative fix">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                            <img src="/assets/front/img/features/about_img_02.png" alt="img">

                            <div class="about-text second-about">
                                <img src="/assets/front/img/features/about-play.png" alt="img">
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="about-content s-about-content pl-60 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                            <div class="about-title second-title pb-25">
                                <h5>{{__('main.about')}}</h5>
                                <h2>{{__('main.home6')}}</h2>
                            </div>
                            <p >{{__('main.home7')}}</p>
                            <p>{{__('main.home8')}}</p>
                            <div class="about-content2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="green2">
                                            <li><div class="abcontent"><div class="ano"><span><img src="/assets/front/img/icon/ab-icon-01.png" alt="img">   </span></div> <div class="text"><h3>{{__('main.home9')}}</h3> <p>{{__('main.home10')}}</p></div></div></li>
                                            <li><div class="abcontent"><div class="ano"><span><img src="/assets/front/img/icon/ab-icon-02.png" alt="img"> </span></div> <div class="text"><h3>{{__('main.home111')}} </h3> <p>{{__('main.home12')}}</p></div></div></li>

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
        <!-- testimonial-area -->
        <!-- testimonial-area -->
        <section class="testimonial-area pt-120 pb-100 p-relative fix"  style="background: url(img/bg/services-bg.png); background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-50 wow fadeInDown animated text-center" data-animation="fadeInDown" data-delay=".4s">
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

        <!-- steps-area-end -->

        <!-- video-area-end -->
        <section class="team-area2 fix p-relative pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-relative">
                        <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                            <h5>{{__('main.about1')}}</h5>
                            <h2>
                                {{__('main.about2')}}
                            </h2>

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- team-area-end -->
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
                            <div class="section-title mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h5>{{__('main.home39')}}</h5>
                                <h2>{{__('main.home40')}}</h2>
                            </div>
                            <ul>
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                        <div class="dnumber">
                                            <div class="date-box"><img src="assets/front/img/icon/fea-icon01.png" alt="icon"></div>
                                        </div>
                                        <div class="text">
                                            <h3>{{__('main.home41')}}</h3>
                                            <p>{{__('main.home42')}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                        <div class="dnumber">
                                            <div class="date-box"><img src="assets/front/img/icon/fea-icon02.png" alt="icon"></div>
                                        </div>
                                        <div class="text">
                                            <h3>{{__('main.home43')}}</h3>
                                            <p>{{__('main.home44')}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                        <div class="dnumber">
                                            <div class="date-box"><img src="assets/front/img/icon/fea-icon03.png" alt="icon"></div>
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
