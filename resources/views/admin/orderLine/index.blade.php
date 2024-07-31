@extends('layout.main')
@section('content')
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">List View</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Users</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        List View
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
                <div class="xl:col-span-12">
                    <div class="card" id="usersTable">
                        <div class="card-body">
                            <div class="flex items-center">
                                <h6 class="text-15 grow">Users List</h6>
                                <div class="shrink-0">
                                    <button data-modal-target="addUserModal" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg> <span class="align-middle">Add User</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500">
                            <form action="#!">
                                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                    <div class="relative xl:col-span-2">
                                        <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for name, email, phone number etc..." autocomplete="off">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                                    </div><!--end col-->
                                    <div class="xl:col-span-2">
                                        <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 choices__input" data-choices="" id="choices-single-default" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Select Status</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Select Status</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="search" name="search_terms" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="Select Status" placeholder=""><div class="choices__list" role="listbox"><div id="choices--choices-single-default-item-choice-3" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="3" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Select Status</div><div id="choices--choices-single-default-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Hidden" data-select-text="Press to select" data-choice-selectable="">Hidden</div><div id="choices--choices-single-default-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Rejected" data-select-text="Press to select" data-choice-selectable="">Rejected</div><div id="choices--choices-single-default-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Verified" data-select-text="Press to select" data-choice-selectable="">Verified</div><div id="choices--choices-single-default-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Waiting" data-select-text="Press to select" data-choice-selectable="">Waiting</div></div></div></div>
                                    </div><!--end col-->
                                    <div class="xl:col-span-3 xl:col-start-10">
                                        <div class="flex gap-2 xl:justify-end">
                                            <div>
                                                <button type="button" class="bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="download" class="lucide lucide-download inline-block size-4"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg> <span class="align-middle">Import</span></button>
                                            </div>
                                            <button class="flex items-center justify-center size-[37.5px] p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="sliders-horizontal" class="lucide lucide-sliders-horizontal size-4"><line x1="21" x2="14" y1="4" y2="4"></line><line x1="10" x2="3" y1="4" y2="4"></line><line x1="21" x2="12" y1="12" y2="12"></line><line x1="8" x2="3" y1="12" y2="12"></line><line x1="21" x2="16" y1="20" y2="20"></line><line x1="12" x2="3" y1="20" y2="20"></line><line x1="14" x2="14" y1="2" y2="6"></line><line x1="8" x2="8" y1="10" y2="14"></line><line x1="16" x2="16" y1="18" y2="22"></line></svg></button>
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
                                                <input id="CheckboxAll" class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800 cursor-pointer" type="checkbox">
                                            </div>
                                        </th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="user-id">User ID</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="name">Name</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="location">Location</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="email">Email</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="phone-number">Phone Number</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="joining-date">Joining Date</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="status">Status</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list">
                                    <tr class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&amp;.active]:after:border-custom-500 [&amp;.active]:bg-slate-100 dark:[&amp;.active]:bg-zink-600">
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                            <div class="flex items-center h-full">
                                                <input id="Checkbox1" class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800 cursor-pointer" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">#ST1500001</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                            <div class="flex items-center gap-2">
                                                <div class="flex items-center justify-center font-medium rounded-full size-10 shrink-0 bg-slate-200 text-slate-800 dark:text-zink-50 dark:bg-zink-600">
                                                    <img src="assets/images/avatar-2.png" alt="" class="h-10 rounded-full">
                                                </div>
                                                <div class="grow">
                                                    <h6 class="mb-1"><a href="#!" class="name">Marie Prohaska</a></h6>
                                                    <p class="text-slate-500 dark:text-zink-200">Graphic Designer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">United Kingdom</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">prohaska@starcode.com</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">853 565 9802</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">04 Jan, 2023</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span class="px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent inline-flex items-center status"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check-circle" class="lucide lucide-check-circle size-3 mr-1.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><path d="m9 11 3 3L22 4"></path></svg> Verified</span></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                            <div class="relative dropdown">
                                                <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="usersAction1" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-horizontal" class="lucide lucide-more-horizontal size-3"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>
                                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="usersAction1">
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="pages-account.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye inline-block size-3 ltr:mr-1 rtl:ml-1"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="align-middle">Overview</span></a>
                                                    </li>
                                                    <li>
                                                        <a data-modal-target="addUserModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="file-edit" class="lucide lucide-file-edit inline-block size-3 ltr:mr-1 rtl:ml-1"><path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path><polyline points="14 2 14 8 20 8"></polyline><path d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z"></path></svg> <span class="align-middle">Edit</span></a>
                                                    </li>
                                                    <li>
                                                        <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 inline-block size-3 ltr:mr-1 rtl:ml-1"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg> <span class="align-middle">Delete</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="py-6 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search w-6 h-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 199+ users We did not find any users for you search.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center mt-8 md:flex-row">
                                <div class="mb-4 grow md:mb-0">
                                    <p class="text-slate-500 dark:text-zink-200">Showing <b>10</b> of <b>57</b> Results</p>
                                </div>
                                <ul class="flex flex-wrap items-center gap-2">
                                    <li>
                                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-50 dark:[&amp;.active]:text-custom-50 [&amp;.active]:bg-custom-500 dark:[&amp;.active]:bg-custom-500 [&amp;.active]:border-custom-500 dark:[&amp;.active]:border-custom-500 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevrons-left" class="lucide lucide-chevrons-left size-4 rtl:rotate-180"><path d="m11 17-5-5 5-5"></path><path d="m18 17-5-5 5-5"></path></svg></a>
                                    </li>
                                    <li>
                                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-50 dark:[&amp;.active]:text-custom-50 [&amp;.active]:bg-custom-500 dark:[&amp;.active]:bg-custom-500 [&amp;.active]:border-custom-500 dark:[&amp;.active]:border-custom-500 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-left" class="lucide lucide-chevron-left size-4 rtl:rotate-180"><path d="m15 18-6-6 6-6"></path></svg></a>
                                    </li>
                                    <li>
                                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-50 dark:[&amp;.active]:text-custom-50 [&amp;.active]:bg-custom-500 dark:[&amp;.active]:bg-custom-500 [&amp;.active]:border-custom-500 dark:[&amp;.active]:border-custom-500 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto">1</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-50 dark:[&amp;.active]:text-custom-50 [&amp;.active]:bg-custom-500 dark:[&amp;.active]:bg-custom-500 [&amp;.active]:border-custom-500 dark:[&amp;.active]:border-custom-500 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto">2</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-50 dark:[&amp;.active]:text-custom-50 [&amp;.active]:bg-custom-500 dark:[&amp;.active]:bg-custom-500 [&amp;.active]:border-custom-500 dark:[&amp;.active]:border-custom-500 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto active">3</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-50 dark:[&amp;.active]:text-custom-50 [&amp;.active]:bg-custom-500 dark:[&amp;.active]:bg-custom-500 [&amp;.active]:border-custom-500 dark:[&amp;.active]:border-custom-500 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto">4</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-50 dark:[&amp;.active]:text-custom-50 [&amp;.active]:bg-custom-500 dark:[&amp;.active]:bg-custom-500 [&amp;.active]:border-custom-500 dark:[&amp;.active]:border-custom-500 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto">5</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-50 dark:[&amp;.active]:text-custom-50 [&amp;.active]:bg-custom-500 dark:[&amp;.active]:bg-custom-500 [&amp;.active]:border-custom-500 dark:[&amp;.active]:border-custom-500 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto">6</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-50 dark:[&amp;.active]:text-custom-50 [&amp;.active]:bg-custom-500 dark:[&amp;.active]:bg-custom-500 [&amp;.active]:border-custom-500 dark:[&amp;.active]:border-custom-500 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-right" class="lucide lucide-chevron-right size-4 rtl:rotate-180"><path d="m9 18 6-6-6-6"></path></svg></a>
                                    </li>
                                    <li>
                                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-50 dark:[&amp;.active]:text-custom-50 [&amp;.active]:bg-custom-500 dark:[&amp;.active]:bg-custom-500 [&amp;.active]:border-custom-500 dark:[&amp;.active]:border-custom-500 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevrons-right" class="lucide lucide-chevrons-right size-4 rtl:rotate-180"><path d="m6 17 5-5-5-5"></path><path d="m13 17 5-5-5-5"></path></svg></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end grid-->

        </div>
        <!-- container-fluid -->
    </div>
    <div id="addUserModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-300/20">
                <h5 class="text-16">Add User</h5>
                <button data-modal-close="addUserModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{route('orders_list.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="userId" class="inline-block mb-2 text-base font-medium">order ID</label>
                        <input type="text"  name="order_id" id="userId" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="1" >
                    </div>
                    <div class="mb-3">
                        <label for="userId" class="inline-block mb-2 text-base font-medium">Product  ID</label>
                        <input type="text"  name="product_id" id="userId" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="1" >
                    </div>
                    <div class="mb-3">
                        <label for="userId" class="inline-block mb-2 text-base font-medium">Quantity</label>
                        <input type="number"  name="quantity" id="userId" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="1" >
                    </div>
                    <div class="mb-3">
                        <label for="userId" class="inline-block mb-2 text-base font-medium">Price</label>
                        <input type="number"  name="price" id="userId" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="1" >
                    </div>
                    <div class="mb-3">
                        <label for="userId" class="inline-block mb-2 text-base font-medium">Price</label>
                        <input type="number"  name="price" id="userId" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="1" >
                    </div>
                    <div class="mb-3">
                        <label for="joiningDateInput" class="inline-block mb-2 text-base font-medium">Joining Date</label>
                        <input type="date" name="order_date" id="joiningDateInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" >
                    </div>
                    <div class="mb-3">
                        <label for="statusSelect" class="inline-block mb-2 text-base font-medium">Status</label>
                        <select name="order_status" class="form-input border-slate-300 focus:outline-none focus:border-custom-500" data-choices="" data-choices-search-false="" name="statusSelect" id="statusSelect">
                            <option value="">Select Status</option>
                            <option value="Verified">Verified</option>
                            <option value="Waiting">Waiting</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="order_amount" class="inline-block mb-2 text-base font-medium"> Number</label>
                        <input type="text" name="order_amount" id="order_amount" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="" required="">
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addDocuments" class="text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500">Cancel</button>
                        <button type="submit" class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--end add user-->

@endsection
