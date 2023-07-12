<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')" />
    <link rel="canonical" href="@yield('canonical')">

    <meta name="google-site-verification" content="vtyXexPbeIxJzD_D26KCvsIO9WBgbpMkYWUFrw_OAQs" />
    <meta name="p:domain_verify" content="ebfcaa19efa1ce555441b2001f028089" />
    <meta name="author" content="Cynosure Designs" />
    <link rel="shortcut icon" href="{{ asset('/img/fav/favicon.ico') }}">
    <!-- Chrome for Android theme color -->
    <link rel="shortcut icon" href="{{ asset('/img/fav/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{ asset('/img/fav/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/fav/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/fav/apple-touch-icon-114x114.png')}}">
    @laravelPWA

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="preload" href="{{ asset('/css/animate.css?v=1.1') }}" as="style">
    <link rel="stylesheet" href="{{ asset('/css/animate.css?v=1.1') }}">


    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/bbcc34f546.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />



    <meta itemprop="name" content="@yield('meta_title')">
    <meta itemprop="description" content="@yield('meta_description')">


    <meta property="og:type" content="website">

    <meta property="og:title" content="@yield('meta_title')" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Cynosure Designs" />
    <meta name="twitter:title" content="@yield('meta_title')" />

    <meta property="og:description" content="@yield('meta_description')" />
    <meta name="twitter:description" content="@yield('meta_description')" />

    <meta property="og:url" content="@yield('canonical')" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />




    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
    <link rel="preload" href="{{ asset('css/magic-mouse.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('css/magic-mouse.css') }}">
    <link rel="preload" href="{{ asset('css/style.css?v=1.1') }}" as="style">
    <link rel="stylesheet" href="{{ asset('css/style.css?v=1.1') }}">
    <link rel="preload" href="{{ asset('css/magnific-popup.css?v=1.1') }}" as="style">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css?v=1.1') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-59534149-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-59534149-1');
    </script>

    @section('script_css')

    @show
    <!-- Hotjar Tracking Code for https://cynosuredesigns.co.uk/ -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3065027,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <style>
        /* .partner_sec h2{color:#777; } */
        /* .partner_sec h2{ } */
        .partner_sec {
            background: #f1f3f4;

        }

        .partner_text_bg {
            position: relative;
            background: white;
            border-radius: 0 500px 500px 0;
            padding: 80px 100px 80px 80px;
        }

        .partner_text_bg::before {
            background-color: #fff;
            content: "";
            display: block;
            height: 100%;
            position: absolute;
            right: 99%;
            top: 0;
            width: 50vw;
        }
    </style>
</head>

<body class="@yield('bodyClass')">
    <main>



        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')


    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous ">
    </script>
    <script type="text/javascript " src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js "></script>
    <script src="{{asset('/js/magic_mouse.js') }}"></script>
    <script src="{{asset('/js/magnific-popup.js') }}"></script>
    <script src="{{asset('/js/easings.js') }}"></script>
    <script src="{{asset('/js/wow.min.js') }}"></script>
    <script src="{{asset('/js/main.js?v=1.1') }}"></script>

    <script>
        $(function() {

            options = {
                "cursorOuter ": "circle-basic",
                "hoverEffect ": "pointer-overlay",
                "hoverItemMove ": false,
                "defaultCursor ": false,
                "outerWidth ": 41,
                "outerHeight ": 41
            }
            var screenSize = $(window).width();
            if (screenSize > 991) {
                magicMouse(options);
            }
            $('.web_portfolio').slick({
                mobileFirst: !0,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000,
                slidesToScroll: 1,
                slidesToShow: 1,
                dots: false,
                arrows: false,
                centerMode: false,

                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        infinite: false,
                        centerMode: false,
                        arrows: true,
                    }
                }]
            });
            $('.web_client').slick({
                mobileFirst: !0,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToScroll: 1,
                slidesToShow: 2,
                dots: false,
                arrows: false,
                centerMode: false,

                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 6,
                    }

                }, {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                    }
                }]
            });


            $('.gallery-new').each(function() { // the containers for all your galleries
                $(this).magnificPopup({
                    delegate: 'a', // the selector for gallery item
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            });

        });
    </script>

    @yield('footer_scripts')

</body>

</html>