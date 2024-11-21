@extends('layout.main')
@section('content')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Buyurtmalar</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{route('dashboard')}}" class="text-slate-400 dark:text-zink-200">Bosh menyu</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Buyurtmalar
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
                <div class="xl:col-span-12">
                    <div class="card" id="usersTable">
                        <div class="card-body">
                            <div class="flex items-center">
                                <h6 class="text-15 grow">Buyurtmalar Ro'yxati</h6>
                            </div>
                        </div>
                        <div class="!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500">
                            <form action="#!">
                                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                    <div class="relative xl:col-span-2">
                                        <input type="text"
                                               class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                               placeholder="Qidirish  ism, familiya, telefon  orqali ..."
                                               autocomplete="off">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" data-lucide="search"
                                             class="lucide lucide-search inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </svg>
                                    </div><!--end col-->
                                    <div class="xl:col-span-2">
                                        <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                             aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select
                                                    class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 choices__input"
                                                    data-choices="" id="choices-single-default" hidden="" tabindex="-1"
                                                    data-choice="active">
                                                    <option value="" data-custom-properties="[object Object]">Qidirish
                                                        Status Orqali
                                                    </option>
                                                </select>
                                                <div class="choices__list choices__list--single">
                                                    <div
                                                        class="choices__item choices__placeholder choices__item--selectable"
                                                        data-item="" data-id="1" data-value=""
                                                        data-custom-properties="[object Object]" aria-selected="true">
                                                        Select Status
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <input type="search" name="search_terms"
                                                       class="choices__input choices__input--cloned" autocomplete="off"
                                                       autocapitalize="off" spellcheck="false" role="textbox"
                                                       aria-autocomplete="list" aria-label="Select Status"
                                                       placeholder="">
                                                <div class="choices__list" role="listbox">
                                                    <div id="choices--choices-single-default-item-choice-3"
                                                         class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                         role="option" data-choice="" data-id="3" data-value=""
                                                         data-select-text="Press to select" data-choice-selectable=""
                                                         aria-selected="true">Select Status
                                                    </div>
                                                    <div id="choices--choices-single-default-item-choice-1"
                                                         class="choices__item choices__item--choice choices__item--selectable"
                                                         role="option" data-choice="" data-id="1" data-value="Hidden"
                                                         data-select-text="Press to select" data-choice-selectable="">
                                                        Hidden
                                                    </div>
                                                    <div id="choices--choices-single-default-item-choice-2"
                                                         class="choices__item choices__item--choice choices__item--selectable"
                                                         role="option" data-choice="" data-id="2" data-value="Rejected"
                                                         data-select-text="Press to select" data-choice-selectable="">
                                                        Rejected
                                                    </div>
                                                    <div id="choices--choices-single-default-item-choice-4"
                                                         class="choices__item choices__item--choice choices__item--selectable"
                                                         role="option" data-choice="" data-id="4" data-value="Verified"
                                                         data-select-text="Press to select" data-choice-selectable="">
                                                        Verified
                                                    </div>
                                                    <div id="choices--choices-single-default-item-choice-5"
                                                         class="choices__item choices__item--choice choices__item--selectable"
                                                         role="option" data-choice="" data-id="5" data-value="Waiting"
                                                         data-select-text="Press to select" data-choice-selectable="">
                                                        Waiting
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="xl:col-span-3 xl:col-start-10">
                                        <div class="flex gap-2 xl:justify-end">
                                            <div>
                                                <button type="button"
                                                        class="bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         data-lucide="download"
                                                         class="lucide lucide-download inline-block size-4">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                        <line x1="12" x2="12" y1="15" y2="3"></line>
                                                    </svg>
                                                    <span class="align-middle">Saqlab olish</span></button>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end grid-->
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="-mx-5 -mb-5 overflow-x-auto">
                                <table class="w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap">
                                    <thead class="text-left">

                                    <tr class="relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&amp;.active]:after:border-custom-500 [&amp;.active]:bg-slate-100 dark:[&amp;.active]:bg-zink-600">
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold">
                                            <div class="flex items-center h-full">
                                                <input id="CheckboxAll"
                                                       class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800 cursor-pointer"
                                                       type="checkbox">
                                            </div>
                                        </th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                            data-sort="user-id">ID
                                        </th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                            data-sort="name">Mijoz ismi
                                        </th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                            data-sort="email">Kategoriya
                                        </th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                            data-sort="location">Mahsulot
                                        </th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                            data-sort="phone-number">Soni
                                        </th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                            data-sort="joining-date">Buyurtma sanasi
                                        </th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                            data-sort="status">Status
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="list">
                                    @foreach($orders as $order=>$value)
                                        <tr class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&amp;.active]:after:border-custom-500 [&amp;.active]:bg-slate-100 dark:[&amp;.active]:bg-zink-600">
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                                <div class="flex items-center h-full">
                                                    <input id="Checkbox1"
                                                           class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800 cursor-pointer"
                                                           type="checkbox">
                                                </div>
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
                                                                                              class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">{{$value->id}}</a>
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                                <div class="flex items-center gap-2">
                                                    <div
                                                        class="flex items-center justify-center font-medium rounded-full size-10 shrink-0 bg-slate-200 text-slate-800 dark:text-zink-50 dark:bg-zink-600">
                                                        <img src="assets/images/avatar-2.png" alt=""
                                                             class="h-10 rounded-full">
                                                    </div>
                                                    <div class="grow">
                                                        <h6 class="mb-1"><a href="#!"
                                                                            class="name">{{$value->order->client->first_name}}    {{$value->order->client->last_name}}</a>
                                                        </h6>
                                                        <p class="text-slate-500 dark:text-zink-200">{{$value->order->client->phone_number}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">{{$value->product->category->name_uz}}</td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">{{$value->product->name_uz}}</td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">{{$value->quantity}}</td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">{{ $value->created_at->format('d M, Y') }}
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">

                                                <!-- Trigger Button -->
                                                <a href="#" class="px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent inline-flex items-center status" data-modal-target="showModal{{$value->order->id}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" size-3 mr-1.5">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <path d="m9 11 3 3L22 4"></path>
                                                    </svg>
                                                    <span id="order-status-text">{{$value->order->order_status}}</span>
                                                </a>

                                                <!-- Modal -->
                                                <div id="showModal{{$value->order->id}}" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                                                    <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                        <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                                            <h5 class="text-16" id="exampleModalLabel">Edit Status</h5>
                                                            <button data-modal-close="showModal{{$value->order->id}}" class="transition-all duration-200 ease-linear text-slate-400 hover:text-slate-500"><i data-lucide="x" class="size-5"></i></button>
                                                        </div>
                                                        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
                                                            <form class="statusForm" action="{{route('orders.updateStatus', $value->order->id)}}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="mb-3">
                                                                    <label for="status-field" class="inline-block mb-2 text-base font-medium">Status <span class="text-red-500">*</span></label>
                                                                    <select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-trigger="" name="order_status" >
                                                                        <option value="">Status</option>
                                                                        <option value="yangi">Yangi</option>
                                                                        <option value="yetkazildi">Yetkazildi</option>
                                                                        <option value="rad_etildi">Rad etildi</option>
                                                                    </select>
                                                                </div>
                                                                <div class="flex justify-end gap-2">
                                                                    <button type="button" data-modal-close="showModal{{$value->order->id}}" class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/10" data-modal-close="showModal">Close</button>
                                                                    <button type="submit" data-modal-close="showModal{{$value->order->id}}" class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10" id="add-btn">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="py-6 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" data-lucide="search"
                                             class="lucide lucide-search w-6 h-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </svg>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 199+
                                            users We did not find any users for you search.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-4">
                                <div class="flex gap-2 pagination-wrap">
                                    {{ $orders->links('pagination.custom') }}
                                </div>
                            </div> </div>
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end grid-->

        </div>
        <!-- container-fluid -->
    </div>

@endsection
