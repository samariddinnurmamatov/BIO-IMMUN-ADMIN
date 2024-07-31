@extends('layout.main')
@section('title', 'Blogs')
@section('content')
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Blog Show</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{route('blogs.index')}}" class="text-slate-400 dark:text-zink-200">Blogs</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Blog Show
                    </li>
                </ul>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-5">
                <div class="lg:col-span-5">
                    <div class="relative before:absolute before:h-full before:w-full before:border-[15px] before:border-double before:border-green-500/10 before:-top-16 lg:before:-right-16 aos-init" data-aos="zoom-out-up">
                        <img src="{{ url('uploads/' . $blog->photo) }}" alt="" class="relative inline-block rounded-md aos-init" data-aos="zoom-out-up" data-aos-delay="500">
                    </div>
                </div>

                <div class="ml-auto lg:col-span-5 lg:col-start-8">
                    <p class="mb-2 text-purple-500 text-15 aos-init" data-aos="fade-left" data-aos-delay="300"></p>
                    <h1 class="mb-3 leading-normal capitalize aos-init" data-aos="fade-left" data-aos-delay="400">{{$blog->title}}</h1>
                    <p class="mb-5 text-lg text-slate-500 dark:text-zinc-400 aos-init" data-aos="fade-left" data-aos-delay="500">{{$blog->description}}</p>
                    <button type="button" class="px-8 py-3 text-white border-0 text-15 btn bg-gradient-to-r from-custom-500 to-purple-500 hover:text-white hover:from-purple-500 hover:to-custom-500 aos-init aos-animate" data-aos="fade-left" data-aos-delay="600">Shop now
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="move-right" class="lucide lucide-move-right inline-block align-middle size-4 rtl:mr-1 ltr:ml-1">
                            <path d="M18 8L22 12L18 16"></path>
                            <path d="M2 12H22"></path>
                        </svg>
                    </button>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
@endsection