<!doctype html>
<?php
$lang = \Illuminate\Support\Facades\App::getLocale();
$categories = \App\Models\Category::all();
$cart = session()->get('cart', []);
$productCount = count($cart);
$settings = json_decode(Illuminate\Support\Facades\File::get(storage_path('app/settings.json')), true);
?>

<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BIO IMMUN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/front/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/front/css/animate.min.css">
    <link rel="stylesheet" href="/assets/front/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/front/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/front/css/dripicons.css">
    <link rel="stylesheet" href="/assets/front/css/slick.css">
    <link rel="stylesheet" href="/assets/front/css/meanmenu.css">
    <link rel="stylesheet" href="/assets/front/css/default.css">
    <link rel="stylesheet" href="/assets/front/css/style.css">
    <link rel="stylesheet" href="/assets/front/css/responsive.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cart1 {
            position: relative;
            display: inline-block;
        }

        .count {
            position: absolute;
            top: -10px;
            right: -10px;
            background: red;
            color: white;
            border-radius: 50%;
            padding: 5px 10px;
            font-size: 12px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cart-icon {
            font-size: 24px;
        }

        .language-selection {
            position: relative;
            display: inline-block;
        }

        .language-selection .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 4px;
            top: 100%; /* Position below the button */
            left: -50px;
        }

        .language-selection .dropdown-content a {
            color: black;
            padding: 7px 16px;
            text-decoration: none;
            display: flex;
            align-content: flex-start;
        }

        .language-selection .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .language-selection .show {
            display: block;
        }

        .language-selection .dropbtn {
            background-color: #006e2f;
            color: white;
            padding: 4px 15px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .language-selection .dropbtn.active {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<!-- Cursor -->
{{-- <div class="cursor js-cursor"></div> --}}
<!-- header -->
<header class="header-area header-three">

    <div class="header-mid d-none d-xl-block pt-25 pb-25">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-12 d-none d-md-block">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="/assets/front/img/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 text-right d-none d-lg-block">
                    <div class="header-cta">
                        <ul>
                            <li>
                                <div class="call-box">
                                    <div class="icon">
                                        <img src="/assets/front/img/icon/phone-call.png" alt="img">
                                    </div>
                                    <div class="text">
                                        <span>{{__('main.call')}}</span>
                                        <strong>{{ $settings['phone_number'] }}</strong>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="call-box">
                                    <div class="icon">
                                        <img src="/assets/front/img/icon/mailing.png" alt="img">
                                    </div>
                                    <div class="text">
                                        <span>{{__('main.email')}}</span>
                                        <strong>{{ $settings['email_address'] }}</strong>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="header-social">
                                 <span>
                                 <a href="{{ $settings['facebook'] }}" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                 <a href="{{ $settings['instagram'] }}" title="LinkedIn"><i class="fab fa-instagram"></i></a>
                                 <a href="{{$settings['telegram'] }}" title="Telegram"><i class="fab fa-telegram"></i></a>
                                 </span>
                                    <!--  /social media icon redux -->
                                </div>
                            </li>
                            <li class="language-selection">
                                <button class="dropbtn" id="dropdownButton">{{ strtoupper($lang) }}</button>
                                <div class="dropdown-content" id="dropdownContent" style="z-index: 999;">
                                    <a href="/en" data-lang="en">Eng</a>
                                    <a href="/ru" data-lang="ru">Рус</a>
                                    <a href="/uz" data-lang="uz">Uz</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="menu-area">
        <div class="second-menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-12 d-xl-none d-lg-none d-sm-block">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="img/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 d-sm-none d-xl-none d-md-block">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="img/logo/f_logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-11 col-lg-10">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-sub">
                                        <a href="{{route('home')}}">{{__('main.home')}}</a>
                                    </li>
                                    <li class="has-sub">
                                        <a href="{{route('about')}}">{{__('main.about')}}</a>
                                    </li>
                                    <li class="has-sub">
                                        <a href="">{{__('main.categories')}}</a>
                                        <ul>
                                            @foreach($categories as $category)
                                                <li>
                                                    <a href="{{route('category.showPage', $category->id)}}">{{($category['name_' . $lang])}}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li><a href="{{route('product.page')}}">{{__('main.products')}}</a></li>
                                    <li class="has-sub">
                                        <a href="/blog">{{__('main.blog')}}</a>
                                    </li>
                                    <li class="has-sub">
                                        <a href="{{route('advice.page')}}">{{__('main.advices')}}</a>
                                    </li>
                                    <li><a href="{{route('contact')}}">{{__('main.contact')}}</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 text-right d-none d-xl-block">
                        <div class="header-cta3">
                            <ul style="display: flex; gap: 10px;">
                                <li style="position: relative;">
                                    <a href="/cart" class="top-btn">
                                        <div class="cart1">
                                            <span class="count" id="countProduct">{{ $productCount }}</span>
                                            <i class="cart-icon fa fa-shopping-cart"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->

@yield('content')

<!-- footer -->
<footer class="footer-bg footer-p pt-150"
        style="background-color: #fff; background-image: url(/assets/front/img/bg/footer-bg.png); background-position: 0 0;">
    <div class="footer-top pb-70">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title mb-30">
                            <a href="{{route('home')}}"><img src="/assets/front/img/logo/f_logo.png" alt="img"></a>
                        </div>
                        <div class="footer-social mt-10">
                            <a href="{{$settings['facebook']}}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$settings['instagram']}}"><i class="fab fa-instagram"></i></a>
                            <a href="{{$settings['instagram']}}"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>{{__('main.menu')}}</h2>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <li><a href="{{route('home')}}">{{__('main.home')}}</a></li>
                                <li><a href="{{route('about')}}"> {{__('main.about')}}</a></li>
                                <li><a href="{{route('product.page')}}"> {{__('main.products')}} </a></li>
                                <li><a href="/blog/page"> {{__('main.blog')}}</a></li>
                                <li><a href="{{route('advice.page')}}">{{__('main.advices')}} </a></li>
                                <li><a href="">{{__('main.contact')}} </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>{{__('main.contact')}}</h2>
                        </div>
                        <div class="f-contact">
                            <ul>
                                <li>
                                    <i class="icon fal fa-phone"></i>
                                    <span><a href="tel:+14440008888">{{ $settings['phone_number'] }}</a><br><a
                                                href="tel:+917052101786">{{ $settings['phone_number2'] }}</a></span>
                                </li>
                                <li><i class="icon fal fa-envelope"></i>
                                    <span>
                                            <a href="{{ $settings['email_address'] }}">{{ $settings['email_address'] }}</a>
                                       <br>
                                        <a href="{{ $settings['email_address2'] }}">{{ $settings['email_address2'] }}</a>
                                       </span>
                                </li>
                                <li>
                                    <i class="icon fal fa-map-marker-check"></i>
                                    <span>{{ $settings['address'] }}<br>{{ $settings['address2'] }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    {{__('main.footer_item4')}}
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-end -->

<!-- JS here -->
<script src="/assets/front/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="/assets/front/js/vendor/jquery-3.6.4.min.js"></script>
<script src="/assets/front/js/popper.min.js"></script>
<script src="/assets/front/js/bootstrap.min.js"></script>
<script src="/assets/front/js/slick.min.js"></script>
<script src="/assets/front/js/ajax-form.js"></script>
<script src="/assets/front/js/paroller.js"></script>
<script src="/assets/front/js/wow.min.js"></script>
<script src="/assets/front/js/js_isotope.pkgd.min.js"></script>
<script src="/assets/front/js/imagesloaded.min.js"></script>
<script src="/assets/front/js/parallax.min.js"></script>
<script src="/assets/front/js/jquery.waypoints.min.js"></script>
<script src="/assets/front/js/jquery.counterup.min.js"></script>
<script src="/assets/front/js/jquery.scrollUp.min.js"></script>
<script src="/assets/front/js/jquery.meanmenu.min.js"></script>
<script src="/assets/front/js/parallax-scroll.js"></script>
<script src="/assets/front/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/front/js/element-in-view.js"></script>
<script src="/assets/front/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById('dropdownButton').addEventListener('click', function() {
        document.getElementById('dropdownContent').classList.toggle('show');
    });

    document.querySelectorAll('.dropdown-content a').forEach(function(link) {
        link.addEventListener('click', function() {
            document.getElementById('dropdownButton').innerText = this.innerText;
            document.getElementById('dropdownContent').classList.remove('show');
        });
    });
</script>
</body>
</html>
