@extends('layouts.master')

@section('meta_title', 'Web Design, Development & Digital Marketing Agency In UK')

@section('meta_description', 'Cynosure is a creative, branding and digital design agency based in London. We create brands for the most innovative and exciting companies in the world.')

@section('canonical', "https://cynosuredesigns.co.uk/")

@section('bodyClass', 'homepg')

@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "https://cynosuredesigns.co.uk",
        "name": "Cynosure Designs",
        "email": "hello@cynosuredesigns.co.uk",
        "telephone": "+44 (0)207 476 6464",
        "logo": "https://cynosuredesigns.co.uk/img/logo.png",
        "image": "https://cynosuredesigns.co.uk/img/cynosuredesigns.jpg",
        "areaServed": {
            "@type": "GeoCircle",
            "geoMidpoint": {
                "@type": "GeoCoordinates",
                "latitude": 51.50630222,
                "longitude": 0.01629266
            },
            "geoRadius": 1000
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer support",
            "telephone": "+44 (0)207 476 6464",
            "email": "hello@cynosuredesigns.co.uk"
        },
        "foundingDate": "2005",
        "founders": [{
            "@type": "Person",
            "name": "Sharjeel Mahmood"
        }],
        "foundingLocation": "London England",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "London",
            "addressRegion": "London",
            "streetAddress": "Suite F25, Expressway Studios, 1 Dock Road London, E16 1AH",
            "addressCountry": "England"
        },
        "description": "Cynosure is a creative, branding and digital design agency based in London. We create brands for the most innovative and exciting companies in the world.",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.99",
            "reviewCount": "179"

        }
    }
</script>

<style>
    section#home__capabilities .container {

        margin-right: auto;
        margin-left: auto;
        box-sizing: border-box;
        position: relative;
        z-index: 20;
    }

    section#home__capabilities {
        background-color: #333;
        overflow: hidden;
        position: relative;
        padding: 120px 0 ;
    }

    section#home__capabilities .background__images img {
        height: 100%;
        max-width: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        opacity: 0;
        position: absolute;
        top: 50%;
        transform: translateY(-50%) translateZ(0) scale(1.01);
        transform-origin: left center;
        transition: opacity .2s ease-in-out, transform .4s ease;
        width: 100%;
    }

    section#home__capabilities .background__images img.active {
        opacity: 1;
        transform: translateY(-50%) translateZ(0) scale(1);
    }

    img.fill-background,
    video.fill-background {
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
    }

    section#home__capabilities .capabilities__list a {
        font-size: 35px;
        line-height: 1.29;
        padding: 28px 0;
    }

    section#home__capabilities .capabilities__list a {
        color: #ffffff;
        display: block;
        font-size: 24px;
        font-weight: 600;
        letter-spacing: -.5px;
        line-height: 1.25;
        padding: 15px 10px;
        text-decoration: none;
        transition: opacity .2s ease-in-out;
        transition: opacity .45s cubic-bezier(.165, .84, .44, 1), transform 1s cubic-bezier(.23, 1, .32, 1);
    }

    section#home__capabilities .capabilities__list a:hover {
        transform: translate3d(25px, 0, 0);
    }

    section#home__capabilities .capabilities__list a:hover span {
        opacity: 1;
    }

    section#home__capabilities .capabilities__list a span {
        display: inline-block;
        height: 8px;
        opacity: 0;
        padding-left: 25px;
        position: relative;
        transition: opacity .3s ease;
        width: 67px;
    }

    section#home__capabilities .capabilities__list a span::before {
        background: #fff;
        content: "";
        height: 2px;
        margin-top: -3px;
        position: absolute;
        top: 50%;
        transition: all .3s ease;
        width: 42px;
    }

    section#home__capabilities .capabilities__list a span::after {
        border-color: transparent transparent transparent #fff;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        content: "";
        height: 0;
        margin-top: -7px;
        position: absolute;
        right: 0;
        top: 50%;
        transition: all .3s ease;
        width: 0;
    }

    .home__capabilities img.hidden{
        opacity: 0;
    }

    .home__capabilities img{
        opacity: 1;
        transition: opacity .2s ease-in;
    }
</style>
@append

@section('content')
<section class="home_header">
    <div class="container">
        <div class="row overflow-hidden">
            <div class="side-text-wrap slow-load">
                <p>Cynosure Designs — EST. 2005</p>
            </div>
            <div class=" home-circle slow-load ">
                <svg height="912 " viewBox="0 0 904 912 " width="904 " xmlns="http://www.w3.org/2000/svg ">
                    <g fill="none " fill-rule="evenodd " transform="translate(0 1) ">
                        <circle cx="451 " cy="450 " r="450 " stroke="#555
                        " stroke-dasharray="20px " stroke-width="1 "></circle>
                    </g>
                </svg>
            </div>
            <div class="home-video-wrapper">
                <div class="home-video-before ">
                    <div class="home-video-video ">
                        <video src="{{ asset('/video/cynosure.mp4')}}" autoplay=" " loop=" " muted=" " playsinline=" " uk-cover=" " class="uk-cover "></video>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center ">
                <!-- <h1 class="main_heading ">We dream Creative<span class="theme_color ">.</span></h1> -->
                <h1 class="main_banner_heading ">
                    <span class="letters letters-1 ">WE</span>
                    <span class="letters letters-2 ">CREATE</span>
                    <span class="letters letters-3 ">BRANDS</span>
                </h1>

            </div>
        </div>
    </div>
</section>

<section class="main_portfolio_sec ">
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-12 ">
                <h2 class="theme_h2 ScrollSvg_wrapperArrow__2wBs6 pt-2">
                    <svg class="" style="margin-top: -6px; " width="40 " height="40 " viewBox="0 0 60 60 " fill="none ">
                        <circle cx="30 " cy="30 " r="29 " fill="#ccc " fill-opacity="0.1 " stroke="#818181" stroke-width="2 "></circle>
                        <path class="ScrollSvg_arrow__D8tuQ " d="M25 35L30 39.5M30 39.5L34.5 35M30 39.5V20 " stroke="#a00000 " stroke-width="2 "></path>
                    </svg> Case Studies
                </h2>

            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row ">
            <div class="col-md-12 ">
                <ul class="web_portfolio ">
                    <li class="lightblue_hover_bg mouse_view ">
                        <a href="{{ route('casestudies_vieu') }}">
                            <img src="{{ asset('/img/casestudies/vieu.jpg')}}" class="w-100 " alt="Vieu Casestudy">
                            <div class="portfolio_detail ">
                                <div class="portfolio_detail_inner ">
                                    <h2>Vieu</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="orange_hover_bg mouse_view ">
                        <a href="{{ route('casestudies_ratchet') }}">
                            <img src="{{ asset('/img/casestudies/ratchetshop.jpg')}}" class="w-100 " alt="The Ratchet Shop Casestudy">
                            <div class="portfolio_detail ">
                                <div class="portfolio_detail_inner ">
                                    <h2>The Ratchet Shop</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="red_hover_bg mouse_view ">
                        <a href="{{ route('casestudies_scholars') }}">
                            <img src="{{ asset('/img/casestudies/scholars/thumbnail.png')}}" class="w-100 " alt="Scholars Casestudy">
                            <div class="portfolio_detail ">
                                <div class="portfolio_detail_inner ">
                                    <h2>Scholars School System</h2>
                                </div>
                            </div>
                        </a>
                    </li>


                    <li class="lightblue_hover_bg mouse_view ">
                        <a href="{{ route('casestudies_ozone') }}">
                            <img src="{{ asset('/img/casestudies/ozone.jpg')}}" class="w-100 " alt="Ozone Education Casestudy">
                            <div class="portfolio_detail ">
                                <div class="portfolio_detail_inner ">
                                    <h2>Ozone Education</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="orange_hover_bg mouse_view ">
                        <a href="https://cynosuredesigns.co.uk/our-work/global-kidney-foundation">
                            <img src="{{ asset('/img/casestudies/gkf.jpg')}}" class="w-100 " alt="Global Kidney Foundation Casestudy">
                            <div class="portfolio_detail ">
                                <div class="portfolio_detail_inner ">
                                    <h2>Global Kidney Foundation</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navyblue_hover_bg mouse_view ">
                        <a href="{{ route('casestudies_synopsis_crm') }}">
                            <img src="{{ asset('/img/casestudies/crm.jpg')}}" class="w-100 " alt="Synopsis CRM Casestudy">
                            <div class="portfolio_detail ">
                                <div class="portfolio_detail_inner ">
                                    <h2>Synopsis CRM</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- We collaborate with brands and agencies to create impactful results. -->

<section id="home__capabilities">
    <img class="fill-background" alt="A surfer figure in the haze" src="{{ asset('/img/services/capabilities-default.png')}}" srcset="{{ asset('/img/services/capabilities-default-2x.png')}} 2x">

    <div class="container">
        <h4 class="bg-white theme_color px-2 d-inline-block fw_600 mb-5">We specialize in</h4>

        <div class="capabilities__list">
            <a href="{{ route('services_digital') }}" data-capability="1">Digital Marketing<span></span></a>
            <a href="{{ route('services_strategy') }}" data-capability="2">Marketing Strategy<span></span></a>
            <a href="{{ route('services_branding') }}" data-capability="3">Branding<span></span></a>
            <a href="{{ route('services_uiux') }}" data-capability="4">UI/UX Designs<span></span></a>
            <a href="{{ route('services_printing') }}" data-capability="5">Printing & Packaging<span></span></a>
            <a href="{{ route('services_web') }}" data-capability="6">Web & CMS Development<span></span></a>
            <a href="{{ route('services_magento') }}" data-capability="7">Magento Development<span></span></a>
            <a href="{{ route('services_software') }}" data-capability="8">Software Development<span></span></a>
            <a href="{{ route('services_seo') }}" data-capability="9">Search Engine Optimization - SEO<span></span></a>
            <a href="{{ route('services_smm') }}" data-capability="10">Social Media Marketing - SMM<span></span></a>
            <a href="{{ route('services_ppc') }}" data-capability="11">Pay Per Click - PPC<span></span></a>
        </div>
    </div>
    <div class="background__images">
        <img alt="Digital Marketing" data-capability="1" class="lazyload" src="{{ asset('/img/services/capabilities-default.png')}}"  data-src="{{ asset('/img/services/digital.png')}}" data-srcset="{{ asset('/img/services/digital.png')}}">
        <img alt="Marketing Strategy" data-capability="2" class="lazyload" src="{{ asset('/img/services/capabilities-default.png')}}" data-src="{{ asset('/img/services/strategy.png')}}" data-srcset="{{ asset('/img/services/strategy.png')}}">
        <img alt="Branding" data-capability="3" class="lazyload" src="{{ asset('/img/services/capabilities-default.png')}}" data-src="{{ asset('/img/services/branding.png')}}" data-srcset="{{ asset('/img/services/branding.png')}}">
        <img alt="UI/UX Designs" data-capability="4" class="lazyload" src="{{ asset('/img/services/capabilities-default.png')}}" data-src="{{ asset('/img/services/uiux.png')}}" data-srcset="{{ asset('/img/services/uiux.png')}}">
        <img alt="Printing & Packaging" data-capability="5" class="lazyload" src="{{ asset('/img/services/capabilities-default.png')}}" data-src="{{ asset('/img/services/print.png')}}" data-srcset="{{ asset('/img/services/print.png')}}">
        <img alt="Web & CMS Development" data-capability="6" class="lazyload" src="{{ asset('/img/services/capabilities-default.png')}}" data-src="{{ asset('/img/services/web.png')}}" data-srcset="{{ asset('/img/services/web.png')}}">
        <img alt="Magento Development" data-capability="7" class="lazyload" src="{{ asset('/img/services/capabilities-default.png')}}" data-src="{{ asset('/img/services/magento.png')}}" data-srcset="{{ asset('/img/services/magento.png')}}">
        <img alt="Software Development" data-capability="8" class="lazyload" src="{{ asset('/img/services/capabilities-default.png')}}" data-src="{{ asset('/img/services/software.png')}}" data-srcset="{{ asset('/img/services/software.png')}}">
        <img alt="Search Engine Optimization - SEO" data-capability="9" class="lazyload" src="{{ asset('/img/services/capabilities-default.png')}}" data-src="{{ asset('/img/services/seo.png')}}" data-srcset="{{ asset('/img/services/seo.png')}}">
        <img alt="Social Media Marketing - SMM" data-capability="10" class="lazyload" src="{{ asset('/img/services/capabilities-default.png')}}" data-src="{{ asset('/img/services/smm.png')}}" data-srcset="{{ asset('/img/services/smm.png')}}">
        <img alt="Pay Per Click - PPC" data-capability="11" class="lazyload" src="{{ asset('/img/services/capabilities-default.png')}}" data-src="{{ asset('/img/services/ppc.png')}}" data-srcset="{{ asset('/img/services/ppc.png')}}">
        
    </div>
</section>
@include('common.services-section')

@include('common.dmservices')

@include('common.industries')
@include('common.calculator_cta')



<section class="projects_sec">
    <div class="container mx-container-1600">
        <div class="row pb-5 ">
            <div class="col-md-12 ">
                <h2 class="theme_h2 separator_bar ">Our Work</h2>
            </div>
        </div>

        @include('common.our-work')

        <div class="row">
            <div class="col-md-12 pt-5 text-center order-3">
                <a href="{{ route('projects') }}" class="theme_arrow_link">VIEW All &nbsp;<i class="fas fa-arrow-right color_red"></i></a>
            </div>
        </div>
    </div>
</section>


<section class="bg-light ">
    <div class="container-fluid mx-container-1600">
        <div class="row ">
            <div class="col-12 pb-5 ">
                <h2 class="theme_h2 separator_bar ">Our Creative Logos</h2>
            </div>
        </div>

        <div class="row row-eq-height ">
            <div class="col-md-12 ">

                <ul class="client_logos ">
                    <li><img src="{{ asset('/img/logos/logo1.png')}}" alt="Bizpad Logo"></li>
                    <li><img src="{{ asset('/img/logos/logo2.png')}}" alt="Legion Logo"></li>
                    <li><img src="{{ asset('/img/logos/logo4.png')}}" alt="Sterling European University"></li>
                    <li><img src="{{ asset('/img/logos/logo3.png')}}" alt="Secret Pleasure"></li>
                    <li><img src="{{ asset('/img/logos/logo5.png')}}" alt="City Wide Food"></li>
                </ul>
            </div>
        </div>
</section>
@include('common.latest_blog')


<script>
    $(document).ready(function() {
        $('.capabilities__list a').hover(function() {

            var imgid = $(this).data("capability");

            $('.fill-background').addClass('hidden');
            $('.background__images img').removeClass('active');
            $('.background__images img[data-capability = ' + imgid + ']').addClass('active');

        }, function() {
            $('.fill-background').removeClass('hidden');
            $('.background__images img').removeClass('active');
        });



    });


</script>
@endsection