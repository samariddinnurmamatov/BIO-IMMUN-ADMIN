@extends('layout.main')
@section('title', 'Dashboard')
@section('content')
    @php
        $settings = json_decode(Illuminate\Support\Facades\File::get(storage_path('app/settings.json')), true);
    @endphp
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Ecommerce</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Dashboards</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Ecommerce
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
                <div class="relative col-span-12 overflow-hidden card 2xl:col-span-12 bg-slate-900">
                    <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
                        <div class="xl:col-span-12">
                            <div class="card">
                                <div class="card-body">


                                    <form action="{{ route('update.settings') }}" method="post">
                                        @csrf
                                        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">

                                            <div class="xl:col-span-4">
                                                <label for="productPrice"
                                                       class="inline-block mb-2 text-base font-medium">Telefon
                                                    raqam</label>
                                                <input type="text" id="productPrice"
                                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                       placeholder="Telefon raqamni kiriting"
                                                       name="phone_number" value="{{ $settings['phone_number'] ?? '' }}"
                                                       required>
                                            </div><!--end col-->
                                            <div class="xl:col-span-4">
                                                <label for="productPrice"
                                                       class="inline-block mb-2 text-base font-medium">Telefon raqam
                                                    qo'shimcha</label>
                                                <input type="text" id="productPrice"
                                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                       placeholder="Telefon raqamni kiriting" name="phone_number2"
                                                       value="{{ $settings['phone_number2'] ?? '' }}" required>
                                            </div><!--end col-->
                                            <div class="xl:col-span-4">
                                                <label for="productPrice"
                                                       class="inline-block mb-2 text-base font-medium">Email
                                                    manzili</label>
                                                <input type="text" id="productPrice"
                                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                       placeholder="Email manzilini kiriting" name="email_address"
                                                       value="{{ $settings['email_address'] ?? '' }}" required>
                                            </div><!--end col-->
                                            <div class="xl:col-span-4">
                                                <label for="productPrice"
                                                       class="inline-block mb-2 text-base font-medium">Email
                                                    manzili 2</label>
                                                <input type="text" id="productPrice"
                                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                       placeholder="Email manzilini kiriting" name="email_address2"
                                                       value="{{ $settings['email_address2'] ?? '' }}" required>
                                            </div><!--end col-->
                                            <div class="xl:col-span-4">
                                                <label for="productPrice"
                                                       class="inline-block mb-2 text-base font-medium">Manzil</label>
                                                <input type="text" id="productPrice"
                                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                       placeholder="Manzilini kiriting" name="address"
                                                       value="{{ $settings['address'] ?? '' }}" required>
                                            </div>
                                            <div class="xl:col-span-4">
                                                <label for="productPrice"
                                                       class="inline-block mb-2 text-base font-medium">Manzil qo'shimcha</label>
                                                <input type="text" id="productPrice"
                                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                       placeholder="Manzil qo'shimcha" name="address2"
                                                       value="{{ $settings['address2'] ?? '' }}" required>
                                            </div>
                                            <div class="xl:col-span-4">
                                                <label for="productPrice"
                                                       class="inline-block mb-2 text-base font-medium">facebook</label>
                                                <input type="text" id="productPrice"
                                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                       placeholder="https://www.facebook.com/ kabi kiriting"
                                                       name="facebook" value="{{ $settings['facebook'] ?? '' }}"
                                                       required>
                                            </div><!--end col-->
                                            <div class="xl:col-span-4">
                                                <label for="productPrice"
                                                       class="inline-block mb-2 text-base font-medium">Instagram</label>
                                                <input type="text" id="productPrice"
                                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                       placeholder="https://www.instagram.com/ kabi kiriting"
                                                       value="{{ $settings['instagram'] ?? '' }}" required>
                                            </div><!--end col-->
                                            <div class="xl:col-span-4">
                                                <label for="productPrice"
                                                       class="inline-block mb-2 text-base font-medium">Telegram</label>
                                                <input type="text" id="productPrice"
                                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                       placeholder="https://t.me/ kabi kiriting" name="telegram"
                                                       value="{{ $settings['telegram'] ?? '' }}" required>
                                            </div><!--end col-->

                                        </div><!--end grid-->
                                        <div class="flex justify-end gap-2 mt-4">
                                            <button type="submit"
                                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                                Saqlash
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div>
                </div><!--end col-->

                <div class="col-span-12 card 2xl:col-span-12">
                    <div class="card-body">
                        <div class="grid items-center grid-cols-1 gap-3 mb-5 2xl:grid-cols-12">
                            <div class="2xl:col-span-3">
                                <h6 class="text-15">Mahsulot Buyurtmalari</h6>
                            </div><!--end col-->
                            <div class="2xl:col-span-3 2xl:col-start-10">
                                <div class="flex gap-3">
                                    <div class="relative grow">
                                        <input type="text"
                                               class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                               placeholder="Search for ..." autocomplete="off">
                                        <i data-lucide="search"
                                           class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                    </div>
                                    <button type="button"
                                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                        <i class="align-baseline ltr:pr-1 rtl:pl-1 ri-download-2-line"></i> Yuklab Olish
                                    </button>
                                </div>
                            </div><!--end col-->
                        </div><!--end grid-->
                        <div class="overflow-x-auto">
                            <div class="-mx-5 -mb-5 overflow-x-auto">
                                <table class="w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap">
                                    <thead class="text-left">

                                    <tr class="relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&amp;.active]:after:border-custom-500 [&amp;.active]:bg-slate-100 dark:[&amp;.active]:bg-zink-600">
                                        <th class=" px-4.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
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
                                        <tr class=" relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&amp;.active]:after:border-custom-500 [&amp;.active]:bg-slate-100 dark:[&amp;.active]:bg-zink-600">

                                            <td class="px-4.5 py-2.5 first:pl-5 last:pr-5"><a href="#!"
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
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">{{$value->product->category->name}}</td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">{{$value->product->name}}</td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">{{$value->quantity}}</td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">{{ $value->created_at->format('d M, Y') }}
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">

                                                <!-- Trigger Button -->
                                                <a href="#"
                                                   class="px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent inline-flex items-center status"
                                                   data-modal-target="showModal{{$value->order->id}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class=" size-3 mr-1.5">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <path d="m9 11 3 3L22 4"></path>
                                                    </svg>
                                                    <span id="order-status-text">{{$value->order->order_status}}</span>
                                                </a>

                                                <!-- Modal -->
                                                <div id="showModal{{$value->order->id}}" modal-center=""
                                                     class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                                                    <div
                                                        class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                        <div
                                                            class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                                            <h5 class="text-16" id="exampleModalLabel">Edit Status</h5>
                                                            <button data-modal-close="showModal{{$value->order->id}}"
                                                                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-slate-500">
                                                                <i data-lucide="x" class="size-5"></i></button>
                                                        </div>
                                                        <div
                                                            class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
                                                            <form class="statusForm"
                                                                  action="{{route('orders.updateStatus', $value->order->id)}}"
                                                                  method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="mb-3">
                                                                    <label for="status-field"
                                                                           class="inline-block mb-2 text-base font-medium">Status
                                                                        <span class="text-red-500">*</span></label>
                                                                    <select
                                                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                        data-trigger="" name="order_status">
                                                                        <option value="">Status</option>
                                                                        <option value="yangi">Yangi</option>
                                                                        <option value="yetkazildi">Yetkazildi</option>
                                                                        <option value="rad_etildi">Rad etildi</option>
                                                                    </select>
                                                                </div>
                                                                <div class="flex justify-end gap-2">
                                                                    <button type="button"
                                                                            data-modal-close="showModal{{$value->order->id}}"
                                                                            class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/10"
                                                                            data-modal-close="showModal">Close
                                                                    </button>
                                                                    <button type="submit"
                                                                            data-modal-close="showModal{{$value->order->id}}"
                                                                            class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10"
                                                                            id="add-btn">Save changes
                                                                    </button>
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
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div>
        <!-- container-fluid -->
    </div>

@endsection
