@extends('layout.main')
@section('title', 'Category')
@section('content')

    <div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">
        <div id="cartSidePenal" drawer-end=""
             class="fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow dark:bg-zink-600 ltr:right-0 rtl:left-0 md:w-96 z-drawer show">
            <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                <div class="grow">
                    <h5 class="mb-0 text-16">Shopping Cart <span
                            class="inline-flex items-center justify-center w-5 h-5 ml-1 text-[11px] font-medium border rounded-full text-white bg-custom-500 border-custom-500">3</span>
                    </h5>
                </div>
                <div class="shrink-0">
                    <button data-drawer-close="cartSidePenal"
                            class="transition-all duration-150 ease-linear text-slate-500 hover:text-slate-800"><i
                            data-lucide="x" class="size-4"></i></button>
                </div>
            </div>
            <div class="px-4 py-3 text-sm text-green-500 border border-transparent bg-green-50 dark:bg-green-400/20">
                <span class="font-bold underline">starcode50</span> Coupon code applied successfully.
            </div>
            <div>
                <div class="h-[calc(100vh_-_370px)] p-4 overflow-y-auto product-list">
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-2 product">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-100 shrink-0 dark:bg-zink-500">
                                <img src="assets/images/img-012.png" alt="" class="h-8">
                            </div>
                            <div class="overflow-hidden grow">
                                <div class="ltr:float-right rtl:float-left">
                                    <button
                                        class="transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500">
                                        <i data-lucide="x" class="size-4"></i></button>
                                </div>
                                <a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500">
                                    <h6 class="mb-1 text-15">Cotton collar t-shirts for men</h6>
                                </a>
                                <div class="flex items-center mb-3">
                                    <h5 class="text-base product-price"> $<span>155.32</span></h5>
                                    <div class="font-normal rtl:mr-1 ltr:ml-1 text-slate-500 dark:text-zink-200">
                                        (Fashion)
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-3">
                                    <div class="inline-flex text-center input-step">
                                        <button type="button"
                                                class="border w-9 h-9 leading-[15px] minus bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50">
                                            <i data-lucide="minus" class="inline-block size-4"></i></button>
                                        <input type="number"
                                               class="w-12 text-center h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500"
                                               value="2" min="0" max="100" readonly="">
                                        <button type="button"
                                                class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-9 h-9 border-slate-200 plus text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50">
                                            <i data-lucide="plus" class="inline-block size-4"></i></button>
                                    </div>
                                    <h6 class="product-line-price">310.64</h6>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2 product">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-100 shrink-0 dark:bg-zink-500">
                                <img src="assets/images/img-03.png" alt="" class="h-8">
                            </div>
                            <div class="overflow-hidden grow">
                                <div class="ltr:float-right rtl:float-left">
                                    <button
                                        class="transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500">
                                        <i data-lucide="x" class="size-4"></i></button>
                                </div>
                                <a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500">
                                    <h6 class="mb-1 text-15">Like style travel black handbag</h6>
                                </a>
                                <div class="flex items-center mb-3">
                                    <h5 class="text-base product-price"> $<span>349.95</span></h5>
                                    <div class="font-normal rtl:mr-1 ltr:ml-1 text-slate-400 dark:text-zink-200">
                                        (Luggage)
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-3">
                                    <div class="inline-flex text-center input-step">
                                        <button type="button"
                                                class="border w-9 h-9 leading-[15px] minus bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50">
                                            <i data-lucide="minus" class="inline-block size-4"></i></button>
                                        <input type="number"
                                               class="w-12 text-center h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500"
                                               value="1" min="0" max="100" readonly="">
                                        <button type="button"
                                                class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-9 h-9 border-slate-200 plus text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50">
                                            <i data-lucide="plus" class="inline-block size-4"></i></button>
                                    </div>
                                    <h6 class="product-line-price">349.95</h6>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2 product">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-100 shrink-0 dark:bg-zink-500">
                                <img src="assets/images/img-09.png" alt="" class="h-8">
                            </div>
                            <div class="overflow-hidden grow">
                                <div class="ltr:float-right rtl:float-left">
                                    <button
                                        class="transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500">
                                        <i data-lucide="x" class="size-4"></i></button>
                                </div>
                                <a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500">
                                    <h6 class="mb-1 text-15">Blive Printed Men Round Neck</h6>
                                </a>
                                <div class="flex items-center mb-3">
                                    <h5 class="text-base product-price">$<span>546.74</span></h5>
                                    <div class="font-normal rtl:mr-1 ltr:ml-1 text-slate-400 dark:text-zink-200">
                                        (Fashion)
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-3">
                                    <div class="inline-flex text-center input-step">
                                        <button type="button"
                                                class="border w-9 h-9 leading-[15px] minus bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50">
                                            <i data-lucide="minus" class="inline-block size-4"></i></button>
                                        <input type="number"
                                               class="w-12 text-center h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500"
                                               value="4" min="0" max="100" readonly="">
                                        <button type="button"
                                                class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-9 h-9 border-slate-200 plus text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50">
                                            <i data-lucide="plus" class="inline-block size-4"></i></button>
                                    </div>
                                    <h6 class="product-line-price end">2,186.96</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 border-t border-slate-200 dark:border-zink-500">

                    <table class="w-full mb-3 ">
                        <tbody class="table-total">
                        <tr>
                            <td class="py-2">Sub Total :</td>
                            <td class="text-right cart-subtotal">$2,847.55</td>
                        </tr>
                        <tr>
                            <td class="py-2">Discount <span class="text-muted">(starcode50)</span>:</td>
                            <td class="text-right cart-discount">-$476.00</td>
                        </tr>
                        <tr>
                            <td class="py-2">Shipping Charge :</td>
                            <td class="text-right cart-shipping">$89.00</td>
                        </tr>
                        <tr>
                            <td class="py-2">Estimated Tax (12.5%) :</td>
                            <td class="text-right cart-tax">$70.62</td>
                        </tr>
                        <tr class="font-semibold">
                            <td class="py-2">Total :</td>
                            <td class="text-right cart-total">$2,531.17</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="flex items-center justify-between gap-3">
                        <a href="apps-ecommerce-product-grid.html"
                           class="w-full text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/10">Continue
                            Shopping</a>
                        <a href="apps-ecommerce-checkout.html"
                           class="w-full text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

            <div
                class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
                <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                        <div class="grow">
                            <h5 class="text-16">Mahsulotlar</h5>
                        </div>
                        <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                            <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                                <a href="{{route('dashboard')}}" class="text-slate-400 dark:text-zink-200">Bosh
                                    Menyu</a>
                            </li>
                            <li class="text-slate-700 dark:text-zink-100">
                                Mahsulotlar
                            </li>
                        </ul>
                    </div>

                    <div class="card" id="customerList">
                        <div class="card-body">
                            <div class="grid grid-cols-1 gap-5 mb-5 xl:grid-cols-2">
                                <div>
                                    <div class="relative xl:w-3/6">
                                        <input type="text"
                                               class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                               placeholder="Qidirish ..." autocomplete="off">
                                        <i data-lucide="search"
                                           class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                    </div>
                                </div>
                                <div class="ltr:md:text-end rtl:md:text-start">
                                    <button type="button" data-modal-target="showModal"
                                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-btn"
                                            data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i
                                            class="align-bottom ri-add-line me-1"></i> Qo'shish
                                    </button>
                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full whitespace-nowrap" id="customerTable">
                                    <thead class="bg-slate-100 dark:bg-zink-600">
                                    <tr>
                                        <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500"
                                            scope="col" style="width: 50px;">
                                            <input
                                                class="border rounded-sm appearance-none cursor-pointer size-4 bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400"
                                                type="checkbox" id="checkAll" value="option">
                                        </th>
                                        <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                            data-sort="category_id">Kategoriya
                                        </th>
                                        <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                            data-sort="name">Mahsulot
                                        </th>
                                        <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                            data-sort="price">Narxi
                                        </th>
                                        <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                            data-sort="desc">Tavsif
                                        </th>
                                        <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                            data-sort="quantity">Soni
                                        </th>
                                        <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                            data-sort="percent">Aksiya %
                                        </th>
                                        <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                            data-sort="status">Mahsulot Status
                                        </th>
                                        <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                            data-sort="photo">Rasm
                                        </th>
                                        <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                            data-sort="action">Operatsiyalar
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                    <form id="orderForm">

                                    </form>
                                    @foreach ($products as $product=>$value)
                                        <tr>
                                            <th class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"
                                                scope="row">
                                                <input
                                                    class="border rounded-sm appearance-none cursor-pointer size-4 bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400"
                                                    type="checkbox" name="chk_child">
                                            </th>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 id"
                                                style="display:none;"><a href="javascript:void(0);"
                                                                         class="fw-medium link-primary id">#VZ2101</a>
                                            </td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 customer_name">{{ $value->category->name_uz }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 name">{{ $value->name_uz }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 price">{{ $value->price }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 desc">{{ $value->description_uz }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 quantity">{{ $value->quantity }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 percentage">{{ $value->percentage }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                                                @if($value->status==1)
                                                    <span
                                                        class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent text-uppercase">Active</span>
                                                @else
                                                    <span
                                                        class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent text-uppercase">NoActive</span>
                                                @endif
                                            </td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                                                <img src="{{ $value->photo }}" alt="" style="height: 45px"></td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                                <div class="flex gap-2">
                                                    <div class="edit">
                                                        <button data-modal-target="editModal{{$value->id}}"
                                                                class="py-1 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 edit-item-btn">
                                                            Tahrirlash
                                                        </button>
                                                    </div>
                                                    <div id="editModal{{$value->id}}" modal-center=""
                                                         class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                                                        <div
                                                            class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                            <div
                                                                class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                                                <h5 class="text-16" id="exampleModalLabel">
                                                                    Tahrirlash</h5>
                                                                <button data-modal-close="editModal{{$value->id}}"
                                                                        class="transition-all duration-200 ease-linear text-slate-400 hover:text-slate-500">
                                                                    <i data-lucide="x" class="size-5"></i></button>
                                                            </div>
                                                            <div
                                                                class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
                                                                <form class="tablelist-form"
                                                                      action="{{ route('products.update', $value->id) }}"
                                                                      method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="mb-3" id="modal-id"
                                                                         style="display: none;">
                                                                        <label for="id-field"
                                                                               class="inline-block mb-2 text-base font-medium">ID</label>
                                                                        <input type="text" id="id-field"
                                                                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                               placeholder="ID" readonly="">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="customername-field"
                                                                               class="inline-block mb-2 text-base font-medium">Kategoriya
                                                                            <span class="text-red-500">*</span></label>
                                                                        <select name="category_id" id="category_id"
                                                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                                                            @foreach($categories as $category=>$value)
                                                                                <option
                                                                                    value="{{ $value->id }}">{{ $value->name_uz}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="customername-field"
                                                                               class="inline-block mb-2 text-base font-medium">Mahsulot
                                                                            Nomi Uz <span class="text-red-500">*</span></label>
                                                                        <input name="name_uz" type="text"
                                                                               value="{{ $value->name_uz }}"
                                                                               id="customername-field"
                                                                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                               placeholder="Mahsulot Nomini Kiriting"
                                                                               required="">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="customername-field"
                                                                               class="inline-block mb-2 text-base font-medium">Mahsulot
                                                                            Nomi Ru <span class="text-red-500">*</span></label>
                                                                        <input name="name_ru" type="text"
                                                                               value="{{ $value->name_ru }}"
                                                                               id="customername-field"
                                                                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                               placeholder="Mahsulot Nomini Kiriting"
                                                                               required="">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="customername-field"
                                                                               class="inline-block mb-2 text-base font-medium">Mahsulot
                                                                            Nomi En <span class="text-red-500">*</span></label>
                                                                        <input name="name_en" type="text"
                                                                               value="{{ $value->name_en }}"
                                                                               id="customername-field"
                                                                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                               placeholder="Mahsulot Nomini Kiriting"
                                                                               required="">
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-3">
                                                                            <label for="customername-field"
                                                                                   class="inline-block mb-2 text-base font-medium">Tavsifi
                                                                                Uz<span
                                                                                    class="text-red-500">*</span></label>
                                                                            <textarea name="description_uz" type="text"
                                                                                      id="customername-field"
                                                                                      class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                                      placeholder="Tavsif" required="">
                                                                                    {{ old('description_uz', $value->description_uz ?? '') }}                                                                    </textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-3">
                                                                            <label for="customername-field"
                                                                                   class="inline-block mb-2 text-base font-medium">Tavsifi
                                                                                Ru<span
                                                                                    class="text-red-500">*</span></label>
                                                                            <textarea name="description_ru" type="text"
                                                                                      id="customername-field"
                                                                                      class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                                      placeholder="Tavsif" required="">
                                                                        {{ $value->description_ru }}
                                                                    </textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-3">
                                                                            <label for="customername-field"
                                                                                   class="inline-block mb-2 text-base font-medium">Tavsifi
                                                                                En<span
                                                                                    class="text-red-500">*</span></label>
                                                                            <textarea name="description_en" type="text"
                                                                                      id="customername-field"
                                                                                      class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                                      placeholder="Tavsif" required="">
                                                                        {{ $value->description_en }}
                                                                    </textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <input hidden="" name="quantity" value="0"
                                                                               type="text" id="customername-field">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="customername-field"
                                                                               class="inline-block mb-2 text-base font-medium">Mahsulot
                                                                            Narxi <span
                                                                                class="text-red-500">*</span></label>
                                                                        <input name="price" type="number"
                                                                               value="{{ $value->price }}"
                                                                               id="customername-field"
                                                                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                               placeholder="Mahsulot Nomini Kiriting"
                                                                               required="">
                                                                    </div>
                                                                    <div class="flex justify-between gap-5">
                                                                        <div class="mb-3">
                                                                            <label for="customername-field"
                                                                                   class="inline-block mb-2 text-base font-medium">Aksiya
                                                                                % <span
                                                                                    class="text-red-500">*</span></label>
                                                                            <input name="percentage" type="number"
                                                                                   min="0"
                                                                                   value="{{ $value->percentage }}"
                                                                                   id="customername-field"
                                                                                   class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                                   placeholder="Aksiya % da kiriting"
                                                                                   required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="status"
                                                                               class="inline-block mb-2 text-base font-medium">Status<span
                                                                                class="text-red-500">*</span></label>
                                                                        <select name="status" id="status"
                                                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                                                            <option value="0">Fol emas</option>
                                                                            <option value="1">Faol</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="customername-field"
                                                                               class="inline-block mb-2 text-base font-medium">Mahsulot
                                                                            rasmi<span
                                                                                class="text-red-500">*</span></label>
                                                                        <input name="photo" type="file"
                                                                               value="{{ $value->photo }}"
                                                                               id="customername-field"
                                                                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                               placeholder="Mahsulot rasmini kiriting"
                                                                               required="">
                                                                    </div>
                                                                    <div class="flex justify-end gap-2">
                                                                        <button type="button"
                                                                                data-modal-close="editModal{{$value->id}}"
                                                                                class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/10"
                                                                                data-modal-close="showModal">Orqaga
                                                                        </button>
                                                                        <button type="submit"
                                                                                data-modal-close="editModal{{$value->id}}"
                                                                                class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10"
                                                                                id="add-btn">Mahsulotni Saqlash
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="remove">
                                                        <button data-modal-target="deleteModal{{$value->id}}"
                                                                id="delete-record"
                                                                class="py-1 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20 remove-item-btn">
                                                            O'chirish
                                                        </button>
                                                    </div>
                                                    <div id="deleteModal{{$value->id}}" modal-center=""
                                                         class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                                                        <div
                                                            class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                            <div
                                                                class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                                                                <div class="float-right">
                                                                    <button data-modal-close="deleteModal{{$value->id}}"
                                                                            id="close-removeNotesModal"
                                                                            class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500">
                                                                        <i data-lucide="x" class="size-5"></i></button>
                                                                </div>
                                                                <img
                                                                    src="data:image/png;base64,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"
                                                                    alt="" class="block h-12 mx-auto">
                                                                <div class="mt-5 text-center">
                                                                    <h5 class="mb-1">Ishonchingiz komilmi?</h5>
                                                                    <p class="text-slate-500 dark:text-zink-200">Bu
                                                                        mahsulotni o'chirishni hohlaysizmi?</p>
                                                                    <div class="flex justify-center gap-2 mt-6">
                                                                        <form
                                                                            action="{{ route('products.destroy', $value->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button"
                                                                                    data-modal-close="deleteModal{{$value->id}}"
                                                                                    class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">
                                                                                Orqaga
                                                                            </button>
                                                                            <button type="submit"
                                                                                    data-modal="deleteModal{{$value->id}}"
                                                                                    id="remove-notes"
                                                                                    class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">
                                                                                Ha, O'chirilsin!
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center p-7">
                                        <h5 class="mb-2">Sorry! No Result Found</h5>
                                        <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 150+
                                            Orders We did not find any orders for you search.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end mt-4">
                                <div class="flex gap-2 pagination-wrap">
                                    {{ $products->links('pagination.custom') }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

        </div>

    </div>
    <!-- end main content -->

    <div id="showModal" modal-center=""
         class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                <h5 class="text-16" id="exampleModalLabel">Mahsulot qo'shish</h5>
                <button data-modal-close="showModal"
                        class="transition-all duration-200 ease-linear text-slate-400 hover:text-slate-500"><i
                        data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
                <form class="tablelist-form" action="{{ route('products.store') }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3" id="modal-id" style="display: none;">
                        <label for="id-field" class="inline-block mb-2 text-base font-medium">ID</label>
                        <input type="number" name="category_id" id="id-field"
                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                               placeholder="ID" readonly="">
                    </div>
                    <div class="mb-3">
                        <label for="customername-field" class="inline-block mb-2 text-base font-medium">Kategoriyani
                            Tanlang<span class="text-red-500">*</span></label>
                        <select name="category_id" id="category_id"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            <option value="">Kategoriyani tanlang</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="customername-field" class="inline-block mb-2 text-base font-medium">Mahsulot nomi Uz<span
                                class="text-red-500">*</span></label>
                        <input name="name_uz" type="text" id="customername-field"
                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                               placeholder="Mahsulot nomini kiriting">
                    </div>
                    <div class="mb-3">
                        <label for="customername-field" class="inline-block mb-2 text-base font-medium">Mahsulot nomi Ru<span
                                class="text-red-500">*</span></label>
                        <input name="name_ru" type="text" id="customername-field"
                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                               placeholder="Mahsulot nomini kiriting">
                    </div>
                    <div class="mb-3">
                        <label for="customername-field" class="inline-block mb-2 text-base font-medium">Mahsulot nomi En<span
                                class="text-red-500">*</span></label>
                        <input name="name_en" type="text" id="customername-field"
                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                               placeholder="Mahsulot nomini kiriting">
                    </div>
                    <div class="mb-3">
                        <label for="price-field" class="inline-block mb-2 text-base font-medium">Narx <span
                                class="text-red-500">*</span></label>
                        <input name="price" type="number" id="price-field"
                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                               placeholder="Mahsulot narxini kiriting!" min="0">
                    </div>

                    <div class="mb-3">
                        <input hidden="" name="quantity" value="0" type="text" id="customername-field">
                    </div>
                    <div class="flex justify-between gap-5">
                        <div class="mb-3">
                            <label for="customername-field" class="inline-block mb-2 text-base font-medium">Aksiya %
                                <span class="text-red-500">*</span></label>
                            <input name="percentage" type="number" id="customername-field"
                                   class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                   placeholder="Aksiya 0 % boshlanadi" min="0">
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="status" class="inline-block mb-2 text-base font-medium">Status<span
                                class="text-red-500">*</span></label>
                        <select name="status" id="status"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            <option value="0">Fol emas</option>
                            <option value="1">Faol</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="customername-field" class="inline-block mb-2 text-base font-medium">Mahsulot
                            rasmi<span class="text-red-500">*</span></label>
                        <input name="photo" type="file" id="customername-field"
                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                               placeholder="Mahsulot rasmini tanlang" required="">
                    </div>
                    <div>
                        <div class="mb-3">
                            <label for="customername-field" class="inline-block mb-2 text-base font-medium">Tavsif
                                Uz<span class="text-red-500">*</span></label>
                            <textarea name="description_uz" type="text" id="customername-field"
                                      class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </textarea>
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <label for="customername-field" class="inline-block mb-2 text-base font-medium">Tavsif
                                Ru<span class="text-red-500">*</span></label>
                            <textarea name="description_ru" type="text" id="customername-field"
                                      class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </textarea>
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <label for="customername-field" class="inline-block mb-2 text-base font-medium">Tavsif
                                En<span class="text-red-500">*</span></label>
                            <textarea name="description_en" type="text" id="customername-field"
                                      class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </textarea>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2">
                        <button type="button" data-modal-close="showModal"
                                class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/10"
                                data-modal-close="showModal">Orqaga
                        </button>
                        <button type="submit" data-modal-close="showModal"
                                class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10"
                                id="add-btn">Saqlash
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
