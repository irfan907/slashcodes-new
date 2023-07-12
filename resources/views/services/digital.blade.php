@extends('layouts.master')

@section('meta_title', 'Digital Marketing Agency | Qualified Leads | Cynosure Designs')
@section('meta_description', 'We are a data-driven, AI-powered marketing firm in the United Kingdom & Dubai that focuses on your companys needs to create a unique digital marketing plan')

@section('canonical', "https://cynosuredesigns.co.uk/services/digital-marketing")

@section('bodyClass', 'homepg')

@php
$faqs=[
    [
        'question' => "What is digital marketing?",
        'answer' => "Digital marketing is a form of online marketing on different digital Channels. These channels are of different types like Social media, Emails, and other online platforms. Digital Marketing lets you communicate your business value or increase brand awareness to the public."
    ],
    [
        'question' => "What are the types of digital marketing?",
        'answer' => "<p>Following are some of the major types of Digital Marketing</p>
        <ol>
            <li>Search Engine optimization (SEO)</li>
            <li>Email Marketing</li>
            <li>Affiliate Marketing</li>
            <li>Pay Per Click (PPC)</li>
            <li>Content Marketing</li>
            <li>Social Media Marketing</li>
            <li>Mobile Marketing</li>
        </ol>"
    ],
    [
        'question' => "What Is the Difference Between Marketing and Advertising?",
        'answer' => "<p> Marketing is finding out what people want and giving it to them. It is a process that focuses on customer satisfaction by producing a product that the customer needs. Different Actions used to sell your products or services are also known as marketing.</p><p>Advertising means any paid form of nonpersonal awareness and presentations of ideas or goods by an identified sponsor. In Advertising, you let people see what you have to offer.</p>"
    ],
    [
        'question' => "What are the 4 P's of digital marketing?",
        'answer' => "<p>The market has undergone a complete transformation thanks to the 4 Ps of digital marketing. The four P’s of digital marketing are as follows:</p>
        <ol>
            <li>Product (how does your Product provide help or relief to the consumer)</li>
            <li>Price ( Create an impact on the consumer to purchase the Product)</li>
            <li>Place ( Where will consumer find your Product)</li>
            <li>Promotion ( How many know your Product)</li>
        </ol>"
    ]
];
@endphp

@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />

<style>
    .logo_bg .logo_inv {
        display: block !important;
    }
</style>

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Digital Marketing Agency | Qualified Leads | Cynosure Designs",
        "description": "We are a data-driven, AI-powered marketing firm in the United Kingdom & Dubai that focuses on your company's needs to create a unique digital marketing plan",
        "publisher": {
            "@type": "ProfilePage",
            "name": "Cynosure Designs"
        }
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@id": "https://cynosuredesigns.co.uk",
                    "name": "Home"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "@id": "https://cynosuredesigns.co.uk/services",
                    "name": "Services"
                }
            },
            {
                "@type": "ListItem",
                "position": 3,
                "item": {
                    "@id": "https://cynosuredesigns.co.uk/services/digital-marketing",
                    "name": "Digital Marketing Services Agency London"
                }
            }
        ]
    }
</script>

@include('common.faqs_schema',['faqs'=>$faqs])
 

@append

@section('content')
<h2 class="theme_fixed_text">Digital Marketing</h2>

<section class="inner_page_header full_h_sec services_main_banner video_header">
    <video id="main-video" class="background-video" autoplay="" loop="" muted="" playsinline="" poster="{{ asset('/img/digital/header_poster.webp') }}">
        <source src="{{ asset('/img/digital/header.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="full_h_inner">
        <div class="container">
            <div class="row">

                <div class="col-md-7 align-self-end">
                    <h4 class="text-white">Boost Your Business with</h4>
                    <h1 class="text-white mt-0"><span class="bg-white theme_color"> DIGITAL MARKETING</span> & ADVERTISING SERVICES</h1>
                    <p class="text-white">We are a data-driven, AI-powered marketing firm in the United Kingdom & Dubai that focuses on your company's needs to create a unique digital marketing plan that generates a significant return on investment by raising brand recognition, resulting in more visitors and prospective customers for your website. </p>
                    <a href="{{ route('contact') }}" class="theme_btn red_btn">Want to Boost Sales?</a>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs__list mb-0">
                    <li class="breadcrumbs__item">
                        <a href="{{ route('home') }}" class="breadcrumbs__element">Home</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="{{ route('services') }}" class="breadcrumbs__element">Services</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="javascript:;" class="breadcrumbs__element active">Digital Marketing</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>
@include('common.dmservices')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="pb-3">ANALYTICS <span class="theme_color">DASHBOARDS</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="dashboard_slider">

                    <div class="dashboard_item">
                        <a href="{{ asset('/img/digital/1.webp') }}">
                            <img class="w-100" src="{{ asset('/img/digital/1.webp') }}" alt="SEO dashboard">
                        </a>
                    </div>
                    <div class="dashboard_item">
                        <a href="{{ asset('/img/digital/2.webp') }}">
                            <img class="w-100" src="{{ asset('/img/digital/2.webp') }}" alt="Social Media Marketing Dashboard">
                        </a>
                    </div>
                    <div class="dashboard_item">
                        <a href="{{ asset('/img/digital/3.webp') }}">
                            <img class="w-100" src="{{ asset('/img/digital/3.webp') }}" alt="Digital Advertising Dashboard">
                        </a>
                    </div>
                    <div class="dashboard_item">
                        <a href="{{ asset('/img/digital/4.webp') }}">
                            <img class="w-100" src="{{ asset('/img/digital/4.webp') }}" alt="Sales Dashboard">

                        </a>
                    </div>
                    <div class="dashboard_item">
                        <a href="{{ asset('/img/digital/5.webp') }}">
                            <img class="w-100" src="{{ asset('/img/digital/5.webp') }}" alt="ROI Dashboard">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="mb-0">The Cynosure Designs Experience</p>
                <h2 class="theme_color mb-1">Completely Customer Centric</h2>
                <p>The Growth Cycle of Your Incredible Journey with Us</p>
                <img src="{{ asset('/img/digital/customer-centric.webp') }}" class="w-100" alt="">

            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <h2 class="theme_color">Discover the Maximum Potential Your Company</h2>
                <p>Since we have a track record of not only assisting businesses in lifting off but also building their popularity among their competitors, we are a go-to digital agency in London & UAE for many well-known brands. We create the best possible custom marketing strategy for you because we believe that our growth is influenced by yours, whether you're a startup seeking to mark your impression in a market full of obstacles or a well-known brand looking to expand beyond its current customer base and discover new markets.</p>


            </div>

        </div>
        <div class="row text-center services_icons_row pt-4">
            <div class="col-md-2">
                <img src="{{ asset('/img/icons/brand-activation.svg')}}" width="70" alt="Brand Activation & Promotion">
                <p>Brand Activation</p>
            </div>
            <div class="col-md-2">
                <img src="{{ asset('/img/icons/copy-writing.svg')}}" width="70" alt="Copy Writing">
                <p>Copy Writing</p>
            </div>
            <div class="col-md-2">
                <img src="{{ asset('/img/icons/lead-generation.svg')}}" width="70" alt="Lead generation">
                <p>Lead Generation</p>
            </div>
            <div class="col-md-2">
                <img src="{{ asset('/img/icons/crm.svg')}}" width="70" alt="Software Development">
                <p>Software Development</p>
            </div>
            <div class="col-md-2">
                <img src="{{ asset('/img/icons/seo.svg')}}" width="70" alt="Software Development">
                <p>Pay Per Click</p>
            </div>
            <div class="col-md-2">
                <img src="{{ asset('/img/icons/custom-design.svg')}}" width="70" alt="Software Development">
                <p>Social Media Marketing</p>
            </div>
        </div>

    </div>
</section>
<section class="bg_free_quote">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4  offset-md-1">
                <img src="{{ asset('/img/get-free-quote.webp')}}" class="w-100" alt="">
            </div>
            <div class="col-md-6 offset-md-1">@include('common.get-quote-form')</div>
        </div>
    </div>
</section>

@include('common.casestudies')

<section class="">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 pb-5 text-center">
                <h2>F.A.Q</h2>
                <p class="w_d_75">Helping our partners move forward through.</p>
                </a>
            </div>
            <div class="col-md-12 pb-5">
                @include('common.faqs',['faqs'=>$faqs])
            </div>
        </div>
    </div>
</section>

<section class="bg_wave_white">
    <div class="container">

        <div class="row">
            <div class="col-md-12 pb-5 text-center">
                <h2>Our customers love what we do</h2>
                <p>Our clients sends us bunch of smiles for our service</p>
            </div>
            <div class="col-md-12 pb-5 text-center">
                <img src="{{ asset('/img/icons/testimonials.jpg')}}" class="pb-4" width="80" alt="client Review">

                <br>
                <h4 class="w_d_75">It's a pleasure working with your designer team. They are passionate, responsive and results-oriented. Highly recommended!
                </h4>
                <br>
                <h3>Scott Romy</h3>
                <p>London, England</p>
            </div>
        </div>



    </div>
</section>
<script>
    $(function() {
        $('#dashboard_slider').magnificPopup({
            delegate: 'a',
            type: 'image',
            image: {
                cursor: null,
                titleSrc: 'title'
            },
            gallery: {
                enabled: true,
                preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
                navigateByImgClick: true
            }
        });

        $('#dashboard_slider').slick({
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

    });
</script>

@endsection