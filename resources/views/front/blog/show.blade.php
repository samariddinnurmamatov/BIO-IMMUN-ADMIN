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
                                <h2>Yangilik Haqida</h2>
                                <div class="breadcrumb-wrap">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home')}}">Bosh Sahifa</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Yangilik Haqida</li>
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

        <!-- service-details-area -->
        <div class="about-area5 about-p p-relative">
            <div class="container pt-120 pb-90">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 order-1">
                        <div class="service-detail">


                            <div class="content-box">
                                <!-- Two Column -->
                                <div class="two-column">
                                    <div class="row">
                                        <h3>{{$blog->title}}</h3>
                                        <div class="image-column col-xl-6 col-lg-12 col-md-12">
                                            @php
                                                    $firstPhoto = $blog->photos[0] ?? 'default.jpg'; // Agar array bo'sh bo'lsa, default.jpg ishlatiladi
                                            @endphp
                                            <figure class="image"><img src="{{ url('storage/uploads/'.$firstPhoto) }}" alt=""></figure>
                                        </div>
                                        <div class="text-column col-xl-6 col-lg-12 col-md-12">
                                            @php
                                                    $thirdPhoto = $blog->photos[1] ?? 'default.jpg'; // Agar array bo'sh bo'lsa, default.jpg ishlatiladi
                                            @endphp
                                            <figure class="image"><img src="{{ url('storage/uploads/'.$thirdPhoto) }}" alt=""></figure>
                                        </div>
                                        <p>{{$blog->description}}</p>

                                    </div>
                                </div>

                                <!-- Two Column -->
                                <div class="two-column">
                                    <div class="row">
                                        <div class="image-column col-xl-12 col-lg-12 col-md-12">
                                            @php
                                                    $secondPhoto = $blog->photos[2] ?? 'default.jpg'; // Agar array bo'sh bo'lsa, default.jpg ishlatiladi
                                            @endphp
                                            <figure class="image"><img src="{{ url('storage/uploads/'.$secondPhoto) }}" alt=""></figure>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- service-details-area-end -->

    </main>
@endsection
