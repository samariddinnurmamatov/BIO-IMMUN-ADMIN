@extends('layout.helper')

@section('content')
    <main>
        <section class="breadcrumb-area d-flex  p-relative align-items-center"
                 style="background-image:url(/assets/front/img/bg/video-img.png)">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Yangiliklar</h2>
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home')}}">Bosh Sahifa</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Yangiliklar</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- services-five-area -->
        <section id="services-05" class="services-05 pt-120 pb-100 p-relative fix"
                 style="background: url(/assets/front/img/bg/services-bg.png); background-repeat: no-repeat;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    @foreach($blogs as $blog=>$value)
                        <div class="col-lg-3">
                            <div class="services-box-05 mb-30 hover-zoomin wow fadeInUp  animated"
                                 data-animation="fadeInUp" data-delay=".4s">
                                <div class="services-icon-05">
                                    @php
                                        $firstPhoto = $value->photos[0] ?? 'default.jpg'; // Agar array bo'sh bo'lsa, default.jpg ishlatiladi
                                    @endphp
                                    <a href="{{route('blog.details', $value->id)}}"><img style="height: 200px"
                                                                                         src="{{ url('storage/uploads/'.$firstPhoto) }}"
                                                                                         alt="icon01"></a>
                                    {{--                                <a href="single-service.html"><img src="" alt="icon01"></a>--}}
                                </div>
                                <div class="services-content-05">
                                    <div class="icon">
                                        <h4>
                                            <a href="{{route('blog.details', $value->id)}}">{{  Str::limit($value->title, 36) }}</a>
                                        </h4>
                                    </div>

                                    <p>{{  Str::limit($value->description, 50) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="pagination-wrap mt-50 text-center">

                            {{$blogs->links('pagination.custom_two')}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- services-three-area -->
@endsection
