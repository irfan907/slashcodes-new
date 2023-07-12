@extends('layouts.master')

@section('meta_title', 'Creative Design, Development & Digital Marketing Agency In UK')

@section('meta_description', 'We are ROI-focused digital marketing agency in the UK. Grow your business with Social media marketing, PPC, SEO, UX/UI Designs & Web Development.')

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
        "name": "Creative Design, Development & Digital Marketing Agency In UK",
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
        "description": "We are ROI-focused digital marketing agency in the UK. Grow your business with Social media marketing, PPC, SEO, UX/UI Designs & Web Development.",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.99",
            "reviewCount": "179"

        },
  "sameAs": [
    "https://www.facebook.com/lifeatcynosuredesigns/",
    "https://twitter.com/DesignsCynosure",
    "https://www.instagram.com/cynosuredesignsuk/",
    "https://www.linkedin.com/company/cynosure-designs",
    "https://www.pinterest.co.uk/cynosuredesignsuk/"
  ]
    }
</script>


<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Creative Design, Development & Digital Marketing Agency In UK",
        "description": "We are ROI-focused digital marketing agency in the UK. Grow your business with Social media marketing, PPC, SEO, UX/UI Designs & Web Development.",
        "publisher": {
            "@type": "ProfilePage",
            "name": "Cynosure Designs"
        }
    }

</script>

@append

@section('content')
<section class="home_header">
    <div class="container">
        <div class="row overflow-hidden">
            <div class="side-text-wrap slow-load">
                <a href="#google_partners" class="goto_sec" >A Google Partner Company</a>
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

@endsection