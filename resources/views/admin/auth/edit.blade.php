@extends('layout.main')
@section('content')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Profil</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{route('dashboard')}}" class="text-slate-400 dark:text-zink-200">Bosh menyu</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Profil
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="block tab-pane" id="personalTabs">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-1 text-15">Profil Ma'lumotlari</h6>
                            <form action="{{ route('users.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                    <div class="xl:col-span-6">
                                        <label for="name" class="inline-block mb-2 text-base font-medium">Ismi</label>
                                        <input type="text" id="name" name="name" value="{{ $user->name }}"
                                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                               placeholder="Enter your name">
                                    </div><!--end col-->
                                    <div class="xl:col-span-6">
                                        <label for="email" class="inline-block mb-2 text-base font-medium">Email Manzili</label>
                                        <input type="email" id="email" name="email" value="{{ $user->email }}"
                                               class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                               placeholder="Enter your email address">
                                    </div><!--end col-->
                                    <div class="xl:col-span-4">
                                        <label for="old_password" class="inline-block mb-2 text-base font-medium">Old Password*</label>
                                        <div class="relative">
                                            <input type="password" id="old_password" name="old_password"
                                                   class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                   placeholder="Enter current password">
                                            <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i
                                                    class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="xl:col-span-4">
                                        <label for="new_password" class="inline-block mb-2 text-base font-medium">New Password*</label>
                                        <div class="relative">
                                            <input type="password" id="new_password" name="new_password"
                                                   class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                   placeholder="Enter new password">
                                            <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i
                                                    class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="xl:col-span-4">
                                        <label for="new_password_confirmation" class="inline-block mb-2 text-base font-medium">Confirm Password*</label>
                                        <div class="relative">
                                            <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                                                   class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                   placeholder="Confirm password">
                                            <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i
                                                    class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end grid-->
                                <div class="flex justify-end mt-6 gap-x-4">
                                    <button type="submit"
                                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                        Saqlash
                                    </button>
                                    <button type="button" onclick="window.location='{{ url("/") }}'"
                                            class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">
                                        Orqaga
                                    </button>
                                </div>
                            </form><!--end form-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <script>
        document.querySelectorAll('.ri-eye-fill').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.previousElementSibling;
                if (input.type === 'password') {
                    input.type = 'text';
                    this.classList.replace('ri-eye-fill', 'ri-eye-off-fill');
                } else {
                    input.type = 'password';
                    this.classList.replace('ri-eye-off-fill', 'ri-eye-fill');
                }
            });
        });
    </script>
@endsection
