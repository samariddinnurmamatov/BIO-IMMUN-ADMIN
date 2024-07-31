@extends('layout.main')
@section('title', 'Blogs')
@section('content')
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Add Advice</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Advices</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Add New
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
                <div class="xl:col-span-9">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Create Advice</h6>

                            <form action="{{route('advices.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                                    <div class="xl:col-span-6">
                                        <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Advice Title</label>
                                        <input type="text" name="title"   id="productNameInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Advice title"     >
                                        @error('title')
                                        <p class="mt-1 text-sm text-slate-400 dark:text-zink-200">{{$message}}.</p>
                                        @enderror
                                    </div><!--end col-->

                                    <div class="lg:col-span-2 xl:col-span-12">
                                        <label for="genderSelect" class="inline-block mb-2 text-base font-medium">Advice Images</label>
                                        <div class="flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-300 dark:bg-zink-700 dark:border-zink-500 dropzone2 dz-clickable" onclick="document.getElementById('fileInput').click()">
                                            <input type="file" name="photo" id="fileInput" class="hidden"  multiple>
                                            <div class="w-full py-5 text-lg text-center dz-message needsclick">
                                                <div class="mb-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="upload-cloud" class="lucide lucide-upload-cloud block mx-auto size-12 text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500">
                                                        <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path>
                                                        <path d="M12 12v9"></path>
                                                        <path d="m16 16-4-4-4 4"></path>
                                                    </svg>
                                                </div>
                                                <h5 class="mb-0 font-normal text-slate-500 dark:text-zink-200 text-15">
                                                    Drag and drop your advice image or <a href="#!" onclick="document.getElementById('fileInput').click()">browse</a> your blog images
                                                </h5>
                                            </div>
                                        </div>
                                        @error('photo')
                                        <p class="mt-1 text-sm text-slate-400 dark:text-zink-200">{{$message}}.</p>
                                        @enderror

                                        <ul class="flex flex-wrap mb-0 gap-x-5" id="dropzone-preview2">

                                        </ul>
                                    </div>
                                    <div class="lg:col-span-2 xl:col-span-12">
                                        <div>
                                            <label for="productDescription" class="inline-block mb-2 text-base font-medium">Description</label>
                                            <textarea  name="description"  class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="productDescription" placeholder="Enter Description" rows="5"></textarea>
                                            @error('description')
                                            <p class="mt-1 text-sm text-slate-400 dark:text-zink-200">{{$message}}.</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!--end grid-->
                                <div class="flex justify-end gap-2 mt-4">
                                    <button type="reset" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Reset</button>
                                    <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Create Advice</button>
                                    <button type="button" class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10">Draft &amp; Preview</button>
                                </div>
                            </form>
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
                <div class="xl:col-span-3">
                    <div class="card sticky top-[calc(theme('spacing.header')_*_1.3)]">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Advice Card Preview</h6>

                            <div class="px-5 py-8 rounded-md bg-sky-50 dark:bg-zink-600">
                                <img src="assets/images/img-03.png" alt="" class="block mx-auto h-44">
                            </div>

                            <div class="mt-3">
                                <h5 class="mb-2">$145.99 <small class="font-normal line-through">299.99</small></h5>
                                <h6 class="mb-1 text-15">Fastcolors Typography Men</h6>
                                <p class="text-slate-500 dark:text-zink-200">Men's Fashion</p>
                            </div>
                            <h6 class="mt-3 mb-2 text-15">Colors</h6>
                            <div class="flex flex-wrap items-center gap-2">
                                <div>
                                    <input id="selectColorPre1" class="inline-block align-middle border rounded-full appearance-none cursor-pointer size-5 bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color1" name="selectColorPre">
                                </div>
                                <div>
                                    <input id="selectColorPre2" class="inline-block align-middle bg-orange-500 border border-orange-500 rounded-full appearance-none cursor-pointer size-5 checked:bg-orange-500 checked:border-orange-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color2" name="selectColorPre" checked="">
                                </div>
                                <div>
                                    <input id="selectColorPre3" class="inline-block align-middle bg-green-500 border border-green-500 rounded-full appearance-none cursor-pointer size-5 checked:bg-green-500 checked:border-green-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color3" name="selectColorPre">
                                </div>
                                <div>
                                    <input id="selectColorPre4" class="inline-block align-middle bg-purple-500 border border-purple-500 rounded-full appearance-none cursor-pointer size-5 checked:bg-purple-500 checked:border-purple-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color4" name="selectColorPre">
                                </div>
                            </div>

                            <h6 class="mt-3 mb-2 text-15">Colors</h6>
                            <div class="flex flex-wrap items-center gap-2">
                                <div>
                                    <input id="selectSizePreXS" class="hidden peer" type="checkbox" value="XS" name="selectSizePre">
                                    <label for="selectSizePreXS" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-8 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">XS</label>
                                </div>
                                <div>
                                    <input id="selectSizePreS" class="hidden peer" type="checkbox" value="S" name="selectSizePre">
                                    <label for="selectSizePreS" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-8 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">S</label>
                                </div>
                                <div>
                                    <input id="selectSizePreM" class="hidden peer" type="checkbox" value="M" name="selectSizePre">
                                    <label for="selectSizePreM" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-8 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">M</label>
                                </div>
                                <div>
                                    <input id="selectSizePreL" class="hidden peer" type="checkbox" value="L" name="selectSizePre">
                                    <label for="selectSizePreL" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-8 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">L</label>
                                </div>
                                <div>
                                    <input id="selectSizePreXL" class="hidden peer" type="checkbox" value="XL" name="selectSizePre">
                                    <label for="selectSizePreXL" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-8 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">XL</label>
                                </div>
                            </div>
                            <div class="flex gap-2 mt-4">
                                <button type="button" class="w-full bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">Create Products</button>
                                <button type="button" class="w-full text-white bg-purple-500 border-purple-500 btn hover:text-white hover:bg-purple-600 hover:border-purple-600 focus:text-white focus:bg-purple-600 focus:border-purple-600 focus:ring focus:ring-purple-100 active:text-white active:bg-purple-600 active:border-purple-600 active:ring active:ring-purple-100 dark:ring-purple-400/10">Draft</button>
                            </div>
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end grid-->

        </div>
        <!-- container-fluid -->
    </div>
@endsection