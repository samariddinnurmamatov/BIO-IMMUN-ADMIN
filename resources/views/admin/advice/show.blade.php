@extends('layout.main')
@section('title', 'Blogs')
@section('content')
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Advice Show</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{route('advices.index')}}" class="text-slate-400 dark:text-zink-200">Advices</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Advice Show
                    </li>
                </ul>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 justify-between" style="margin-top: 20px; padding: 0px 20px; width: 100%;">
                <div class="lg:col-span-6 px-2">
                    <div class="relative before:absolute " data-aos="zoom-out-up">
                        @if($advice->photo)
                            <img src="{{ asset('storage/uploads/' . $advice->photo) }}" alt="Advice Photo">
                        @else
                            <p>No photo available.</p>
                        @endif
                    </div>
                </div>

                <div class="ml-auto lg:col-span-6" style="display: flex; flex-direction: column; align-items: start; justify-content: center; width: 100%">
                    <p class="mb-2 text-purple-500 text-15 aos-init" data-aos="fade-left" data-aos-delay="300"></p>
                    <h1 class="mb-3 leading-normal capitalize aos-init" data-aos="fade-left" data-aos-delay="400">{{$advice->title_uz}}</h1>
                    <p class="mb-5 text-lg text-slate-500 dark:text-zinc-400 aos-init" data-aos="fade-left" data-aos-delay="500">{{$advice->description_uz}}</p>

                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
@endsection

<style>
    .custom-carousel {
        position: relative;
        width: 100%;
        overflow: hidden;
    }
    .carousel-inner {
        display: flex;
        transition: transform 0.5s ease;
    }
    .carousel-item {
        min-width: 100%;
        box-sizing: border-box;
    }
    .carousel-control-prev, .carousel-control-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        font-size: 18px;
        cursor: pointer;
    }
    .carousel-control-prev {
        left: 10px;
    }
    .carousel-control-next {
        right: 10px;
    }
</style>

<script>
    let currentSlide = {};

    function initCarousel(id) {
        currentSlide[id] = 0;
    }

    function showSlide(id, index) {
        const carousel = document.getElementById(`carousel-${id}`);
        const slides = carousel.querySelectorAll('.carousel-item');
        if (index >= slides.length) {
            currentSlide[id] = 0;
        } else if (index < 0) {
            currentSlide[id] = slides.length - 1;
        } else {
            currentSlide[id] = index;
        }
        const offset = -currentSlide[id] * 100;
        carousel.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
    }

    function nextSlide(id) {
        showSlide(id, currentSlide[id] + 1);
    }

    function prevSlide(id) {
        showSlide(id, currentSlide[id] - 1);
    }

    document.addEventListener('DOMContentLoaded', () => {
        initCarousel({{ $advice->id }});
    });
</script>
