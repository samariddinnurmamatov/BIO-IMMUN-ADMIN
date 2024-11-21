@extends('layout.helper')
@section('content')
    @php
    use Carbon\Carbon;
    $lang = \Illuminate\Support\Facades\App::getLocale();
    @endphp

    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(img/bg/bdrc-bg.jpg)">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>{{__('main.detail2')}}</h2>
                                <div class="breadcrumb-wrap">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('main.home')}}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{__('main.detail2')}}</li>
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

        <!-- inner-blog -->
        <section class="inner-blog b-details-p pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-details-wrap">
                            <div class="details__content pb-30">
                                <h2>{{$advice['title_' . $lang]}}.</h2>
                                <div class="meta-info">
                                    <ul>
                                        <li><i class="fal fa-calendar-alt"></i> {{Carbon::parse($advice->created_at)->format('jS F Y')}}</li>
                                    </ul>
                                </div>
                                <p>{{$advice['description_' . $lang]}}</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-details-wrap">
                                <div class="details__content-img">
                                    <img src="{{url('storage/uploads/'.$advice->photo)}}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- #right side -->

                </div>
            </div>
        </section>
        <!-- inner-blog-end -->


    </main>
@endsection
