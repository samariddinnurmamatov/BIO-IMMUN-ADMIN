@extends('layout.main')
@section('title', 'Bio Immun')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp

    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Mahsulotlar Kirim Chiqim Tarixi</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{route('dashboard')}}" class="text-slate-400 dark:text-zink-200">Bosh Menyu</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Tarix
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                        <div class="xl:col-span-4">
                            <ul class="flex flex-wrap w-full gap-2 text-sm font-medium text-center filter-btns grow"
                                data-filter-target="notes-list">
                                <li>
                                    <a href="javascript:void(0);" data-filter="entry"
                                       class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent filter-btn filter-btn-active:bg-custom-500 text-white dark:text-white hover:text-custom-500 dark:hover:text-custom-500 -mb-[1px]">Filter</a>
                                </li>
                            </ul>
                        </div>

                        <div class="xl:col-start-10 xl:col-span-3">
                            <div class="flex gap-3">
                                <div class="relative grow">
                                    <input type="text"
                                           class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                           placeholder="Qidirish..." autocomplete="off">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" data-lucide="search"
                                         class="lucide lucide-search inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                </div>
                                <div class="shrink-0">
                                    <button data-modal-target="addNotesModal" type="button"
                                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" data-lucide="plus"
                                             class="lucide lucide-plus inline-block size-4">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5v14"></path>
                                        </svg>
                                        <span class="align-middle">Mahsulot Kiritish</span></button>
                                </div>
                            </div>
                        </div><!--end col-->

                    </div>
                </div>
            </div><!--end card-->

            <!-- Entry Product Table Content Here -->
            <div class="card" id="entry-product-list">
                <div class="card-body">

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="ltr:text-left rtl:text-right ">
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border border-custom-500 dark:border-custom-800">
                                    Mahsulot Nomi
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border border-custom-500 dark:border-custom-800">
                                    Kiritish/Chiqarish
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border border-custom-500 dark:border-custom-800">
                                    Soni
                                </th>

                                <th class="px-3.5 py-2.5 font-semibold border border-custom-500 dark:border-custom-800">
                                    Sanasi
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border border-custom-500 dark:border-custom-800">
                                    Operatsiyalar
                                </th>
                            </tr>
                            </thead>
                            <tbody class="">
                            @foreach($stocks as $stock=> $value)
                                <tr>
                                    <td class="px-3.5 py-2.5 border border-custom-500 dark:border-custom-800"><a
                                            href="#!"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">{{$value->product->name_uz}}</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 border border-custom-500 dark:border-custom-800">
                                        @if($value->type=="in")
                                            <i class="ri-arrow-down-line">Kirim</i>
                                        @else
                                            <i class="ri-arrow-up-line">Chiqim</i>
                                        @endif
                                    </td>
                                    <td class="px-3.5 py-2.5 border border-custom-500 dark:border-custom-800">
                                        {{$value->quantity}}
                                    </td>
                                    <td class="px-3.5 py-2.5 border border-custom-500 dark:border-custom-800">{{ Carbon::parse($value->created_at)->format('d M, Y') }}
                                    </td>

                                    <td class="px-3.5 py-2.5 border border-custom-500 dark:border-custom-800">
                                        <div class="flex gap-2">
                                            <div class="edit">
                                                <a type="button" data-modal-target="editModal{{$value->id}}"
                                                   class="edit-button py-1 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 edit-item-btn"
                                                   data-bs-toggle="modal" id="create-btn"
                                                   data-bs-target="#editModal{{$value->id}}">Tahrirlash
                                                </a>
                                                <div id="editModal{{$value->id}}" modal-center=""
                                                     class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
                                                    <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                        <div class="flex items-center justify-between p-4 border-b dark:border-zink-300/20">
                                                            <h5 class="text-16">Edit entry product</h5>
                                                            <button data-modal-close="editModal{{$value->id}}"
                                                                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                                                                <i data-lucide="x" class="size-5"></i></button>
                                                        </div>
                                                        <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                                                            <form action="{{route('stocks.update', $value->id)}}"  method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="mb-3">
                                                                    <label for="productSelect" class="inline-block mb-2 text-base font-medium">Mahsulot</label>
                                                                    <select
                                                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                        name="product_id" id="productSelect">
                                                                        <option value="">Mahsulotni Tanlang</option>
                                                                        @foreach($products as $product)
                                                                            <option value="{{$product->id}}">{{$product->name_uz}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <label for="productSelect" class="inline-block mb-2 text-base font-medium">Turi</label>
                                                                    <select
                                                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                        name="type" id="productSelect">
                                                                        <option value="in">Mahsulot Kiritish</option>
                                                                    </select>

                                                                    <div>
                                                                        <label for="quantity" class="inline-block mb-2 text-base font-medium">Soni<span
                                                                                class="text-red-500">*</span></label>
                                                                        <input type="number" name="quantity" id="quantity"
                                                                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                               placeholder="Quantity" value="{{$value->quantity ?? ''}}">
                                                                        @error('quantity')

                                                                        @enderror
                                                                        <div id="quantityError" class="text-red-500"></div>
                                                                    </div>
                                                                    <div class="flex justify-end gap-2 mt-4">
                                                                        <button type="button" data-modal-close="editModal{{$value->id}}"
                                                                                class="text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600">
                                                                            Cancel
                                                                        </button>
                                                                        <button type="submit"
                                                                                class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white">
                                                                            Edit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="remove">
                                                <button type="submit" data-modal-target="deleteModal{{$value->id}}"
                                                        id="delete-record"
                                                        class="py-1 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20 remove-item-btn">
                                                    O'chirish
                                                </button>
                                            </div>
                                            <form action="{{route('stocks.destroy', $value->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <div id="deleteModal{{$value->id}}" modal-center=""
                                                     class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                                                    <div
                                                        class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                        <div
                                                            class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                                                            <div class="float-right">
                                                                <button data-modal-close="deleteModal{{$value->id}}"
                                                                        id="close-deleteModal{{$value->id}}l"
                                                                        class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round"
                                                                         stroke-linejoin="round"
                                                                         data-lucide="x"
                                                                         class="lucide lucide-x size-5">
                                                                        <path d="M18 6 6 18"></path>
                                                                        <path d="m6 6 12 12"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <img
                                                                src="data:image/png;base64,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"
                                                                alt="" class="block h-12 mx-auto">
                                                            <div class="mt-5 text-center">
                                                                <h5 class="mb-1">Ishonchingiz komilmi?</h5>
                                                                <p class="text-slate-500 dark:text-zink-200">Bu tarixni o'chirishni hohlaysizmi?</p>
                                                                <div class="flex justify-center gap-2 mt-6">
                                                                    <button type="button"
                                                                            data-modal-close="deleteModal{{$value->id}}"
                                                                            class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">
                                                                        Orqaga
                                                                    </button>
                                                                    <button type="submit" id="remove-notes"
                                                                            class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">
                                                                        Ha, O'chirilsin!
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>
                    <div class="flex justify-end mt-4">
                        <div class="flex gap-2 pagination-wrap">
                            {{ $stocks->links('pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4 hidden" id="take-product-list">
            <!-- Take Product Table Content Here -->
            <div class="card">
                <div class="card-body">
                    <h5 class="text-16">Take Products</h5>
                    <!-- Table or content for Take Products -->
                </div>
            </div>
        </div><!--end grid-->

    </div>
    <div id="addNotesModal" modal-center=""
         class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-300/20">
                <h5 class="text-16">Mahsulot Kiritish</h5>
                <button data-modal-close="addNotesModal"
                        class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i
                        data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{route('stocks.store')}}"  method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="productSelect" class="inline-block mb-2 text-base font-medium">Mahsulot</label>
                        <select
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            name="product_id" id="productSelect">
                            <option value="">Mahsulotni Tanlang</option>
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name_uz}}</option>
                            @endforeach
                        </select>
                        <label for="productSelect" class="inline-block mb-2 text-base font-medium">Turi</label>
                        <select
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            name="type" id="productSelect">
                            <option value="in">Mahsulot Kiritish</option>
                        </select>

                        <div>
                            <label for="quantity" class="inline-block mb-2 text-base font-medium">Soni <span
                                    class="text-red-500">*</span></label>
                            <input type="number" name="quantity" id="quantity"
                                   class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                   placeholder="Sonini kiriting" value="0" min="0">
                            <div id="quantityError" class="text-red-500"></div>
                        </div>

                        <div class="flex justify-end gap-2 mt-4">
                            <button type="button" data-modal-close="addNotesModal"
                                    class="text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600">
                                Orqaga
                            </button>
                            <button type="submit"
                                    class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white">
                                Mahsulotni kiritish
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div><!--end add user-->



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const quantity = document.querySelectorAll('.quantity');
            const entryProductList = document.getElementById('entry-product-list');
            const takeProductList = document.getElementById('take-product-list');



            filterButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Remove 'active' class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Add 'active' class to the clicked button
                    this.classList.add('active');

                    const filterType = this.getAttribute('data-filter');

                    if (filterType === 'entry') {
                        entryProductList.classList.remove('hidden');
                        takeProductList.classList.add('hidden');
                    } else if (filterType === 'take') {
                        takeProductList.classList.remove('hidden');
                        entryProductList.classList.add('hidden');
                    }
                });
            });
        });
    </script>
@endsection
