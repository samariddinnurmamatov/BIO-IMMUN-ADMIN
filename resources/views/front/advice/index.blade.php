@extends('layout.helper')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
        <!-- blog-area -->
    <main>
        <section class="breadcrumb-area d-flex  p-relative align-items-center"
                 style="background-image:url(/assets/front/img/bg/video-img.png)">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Maslahatlar</h2>
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home')}}">Bosh Sahifa</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Maslahatlar</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="blog" class="blog-area p-relative fix pt-120 pb-90"
                 style="background: url(img/bg/services-bg.png); background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    @foreach($advices as $advice=>$value)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp"
                                 data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href=""><img src="{{ url('storage/uploads/'.$value->photo) }}" alt="img"></a>
                                </div>
                                <div class="blog-content2">
                                    <div class="date-home">
                                        <i class="fal fa-calendar-alt"></i> {{Carbon::parse($value->created_at)->format('jS F Y')}}
                                    </div>
                                    <div class="b-meta">
                                        <div class="meta-info">
                                            <ul>
                                                <li><i class="fal fa-user"></i>Admin tomonidan</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4><a href="{{route('advice.details', $value->id)}}">{{$value->title}}</a>
                                    </h4>
                                    <p>{{  Str::limit($value->description, 100) }}.</p>
                                    <div class="blog-btn"><a href="{{route('advice.details', $value->id)}}">Ko'proq
                                            <i class="fal fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination-wrap mt-50 text-center">

                                {{$advices->links('pagination.custom_two')}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->
    </main>

@endsection
