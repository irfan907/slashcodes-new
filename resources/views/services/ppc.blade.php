@extends('layouts.master')

@section('meta_title', 'Best PPC and SEM company to provide Ads Management')
@section('meta_description', 'Drive Quality Traffic with PPC Ads and Paid Search Marketing. We offer optimized pay per click campaign strategy and Lead generation')




@section('canonical', "https://cynosuredesigns.co.uk/services/digital-marketing/ppc")

@section('bodyClass', 'homepg')

@php
$faqs=[
    [
        'question' => "What is Pay-Per-Click (PPC) advertising?",
        'answer' => "PPC is a digital marketing strategy where you can only place ads online and pay a fee when a visitor clicks the ad. It's a way to buy visitors to your site rather than attract them organically. PPC is fast and gives you more control over how you appear in the search result."
    ],
    [
        'question' => "What are the major types of PPC?",
        'answer' => "<p>Following are some of the major types of ppc:</p>
        <ol>
            <li><b>Search ads:</b> Based On keyword shows at the top of SERP.</li>
            <li><b>Display Ads:</b> Show products while you are browsing.</li>
            <li><b>Remarketing Ads:</b> Show ads to those who visited the site previously.</li>
            <li><b>Video Ads:</b> Show related videos while you are watching. </li>
            <li><b>Shopping Ads:</b> Just like Search ads but with product pictures.</li>
        </ol>
        "
    ],
    [
        'question' => " What is CPC and CPM?",
        'answer' => "CPC (Cost-Per-Click) is the cost that an advertiser has to pay every time a visitor clicks on the ad in an ad campaign. This may vary on several factors like targeting criteria, keywords, and the text adds to the ad. Whereas CPM is Cost Per Thousand Impressions, advertisers have to pay a specific amount after every thousand impressions."
    ],
];
@endphp


@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />

@include('common.faqs_schema',['faqs'=>$faqs])


<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Best PPC and SEM company to provide Ads Management",
        "description": "Drive Quality Traffic with PPC Ads and Paid Search Marketing. We offer optimized pay per click campaign strategy and Lead generation",
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
                    "name": "Digital Marketing"
                }
            },
            {
                "@type": "ListItem",
                "position": 4,
                "item": {
                    "@id": "https://cynosuredesigns.co.uk/services/digital-marketing/ppc",
                    "name": "Best PPC and SEM company to provide Ads Management"
                }
            }
        ]
    }
</script>

@append

@section('content')
<h2 class="theme_fixed_text">PPC</h2>

<section class="inner_page_header  full_h_sec services_main_banner">
    <img src="{{ asset('/img/ppc/header.jpg')}}" class="desktop_banner_img" alt="Top-notch Branding Agency">
    <img src="{{ asset('/img/ppc/header-mbl.jpg')}}" class="mobile_banner_img" alt="Cynosure Designs">
    <div class="full_h_inner">
        <div class="container">
            <div class="row">

                <div class="col-md-6 align-self-end">
                    <h1 class="color_dark mt-0">Reach the target audience with PPC Ads and maximize <span class="theme_color"> conversion rates</span>.</h1>
                    <p>We offer incredible PPC campaign management services from a team of certified experts at Cynosure designs.</p>
                    <a href="{{ route('contact') }}" class="theme_btn inverse_btn">Talk us about your project</a>
                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a href="{{ route('home') }}" class="breadcrumbs__element">Home</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="{{ route('services') }}" class="breadcrumbs__element">Services</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="{{ route('services_digital') }}" class="breadcrumbs__element">Digital Marketing</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="javascript:;" class="breadcrumbs__element active">PPC</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/img/ppc/ppc-1.jpg')}}" class="w-100 py-3" alt="professional PPC services">
            </div>
            <div class="col-md-6 align-self-center">
                <h2>
                Grow your business with PPC and Paid Search Marketing.  
                </h2>
                <p>Win new customers with Pay Per Click ads to successfully grow your business through long-term advertising campaigns. Our team always offers smart SEM and PPC advertising services with ads that reflect this change. Our ad management services include paid search, video ads, and personalized display ads. Let us help you get the return you deserve!</p>

            </div>
        </div>
    </div>
</section>



<section class="bg_uiux_cta" style="background:url({{ asset('/img/ppc/ppc-2.jpg')}});background-attachment: fixed; background-repeat: no-repeat;
background-size: cover; background-position: center;">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-white">
                    What are you waiting for?
                </h2>
                <p class="text-white w_d_75">Contact us today! Get in touch with our Creative and technical consultants by phone, email or social media channels. Or fill up the form and we’ll call you for a quick chat.</p>
                <!-- <a href="#" class="theme_btn">Download PDF</a> -->
                <a href="{{ route('contact') }}" class="theme_btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<section class="cross_tiles_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pb-5 text-center">
                <h2>Beat competition with our SEM and PPC services</h2>
                <p class="w_d_75">Providing paid ads management services from the well-known search engines that include Google, Bing and Yahoo.
                </p>
            </div>
        </div>
      
        <div class="row">

            <div class="col-md-6 align-self-center ">
                <h2>Creative landing pages</h2>
                <p>Creates a simple yet interactive landing page for your business that comprehends great attention-grabbing headlines that just makes a reader to read on. Tailored landing pages to different offers are essential for driving conversions.</p>
            </div>
            <div class="col-md-6 text-center ">
                <img src="{{ asset('/img/ppc/ppc-3.png')}}" class="w_d_75" alt="Creative landing pages">
            </div>
        </div>


        <div class="row">

            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Retargeting and Remarketing </h2>
                <p>Our digital marketing agency re-engage and nurture audiences who have already shown interest in your brand. We use both techniques to optimize marketing campaigns by primarily exploiting paid ads and e-mails to capture the previous visitors and past customers.</p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/ppc/ppc-4.png')}}" class="w_d_75" alt="Retargeting and Remarketing">
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <h2>Exclusive video ads </h2>
                <p>
                Power up your marketing campaigns with high-quality video ads on numerous platforms that cannot be ignored. Along with PPC management services we also have in-house video ads creation team that is expert in many ad genres, including in-stream & out-stream ads, bumper ads and discovery ads for youtube, facebook, instagram and various channels.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/ppc/ppc-5.png')}}" class="w_d_75" alt="Exclusive video ads">
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Optimizing search ads</h2>
                <p>Optimize your search ads with catchy keywords index for your business brand. Clicks on paid searches are increasing day by day, which means you lose paid search traffic if you can not get the most out of it. Our ad management team helps you refine your keywords so that your search ads get the most relevant clicks.</p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/ppc/ppc-6.png')}}" class="w_d_75" alt="Optimizing search ads">
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 align-self-center">
                <h2>Google Shopping Campaigns</h2>
                
                <p>Our PPC advertising management team simplifies your product sales campaign with just a few clicks away. We create shopping campaign that helps promote your product  by giving users product information by showing images, title, prices, store name and more, before they click on your ad.</p>
                
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/ppc/ppc-7.png')}}" class="w_d_75" alt="Google Shopping Campaigns">
            </div>

        </div>
        <div class="row">

            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>System Analytics and KPI’s</h2>
                <p>We must make sure that you do not spend money without knowing what you get out of it. This is why we have set up accurate tracking to measure key performance measures and evaluate analytics that are very important to your business. We guarantee that you can determine everything that is valuable to your business.</p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/ppc/ppc-8.png')}}" class="w_d_75" alt="System Analytics and KPI’s">
            </div>

        </div>
    </div>
</section>



<section class="cross_tiles_sec bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pb-5 text-center">
                <h2>World-renowned Brand Benefits</h2>
                <p class="w_d_75">Well-known brands in the marketplace enhance the credibility and ease of purchase. Beyond just a memorable logo, good branding gains the competitive edge, increases the value of the company and acquires new customers easier.
                </p>
            </div>
        </div>
       
        <div class="row">

            <div class="col-md-6 align-self-center">
                <h2>Why using PPC ?</h2>
                <p>
                Having trouble with conversion rates ? We offer high-value brand exposure by deploying PPC campaigns are a great way to focus on active users, that significantly drive Internet traffic and generate leads that levels up your business revenues as compared to other marketing tactics.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/ppc/ppc-9.png')}}" class="w_d_75" alt="Why using PPC">
            </div>
        </div>
   

        <div class="row">
            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Maximize ROI</h2>
                <p>Our digital agency uses the online strategies like email marketing, SEO, PPC and SEM advertising to empower your business presence in this digital era. We analyze your online content, sales data and pay attention to your social media presence to attain maximum return on investment. </p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/ppc/ppc-10.png')}}" class="w_d_75" alt="Maximize ROI">
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 align-self-center">
                <h2>Why Cynosure Designs?</h2>
                <p>
                We offer a comprehensive network of certified digital marketers giving you an access to specialized training events, industry research, products and services updates and study materials. Hence, Our error-free reports represents the amazing things we do and not only focus on PPC but also on the automation approach with award-winning customer services that meet the needs and functions of your company.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/ppc/ppc-11.png')}}" class="w_d_75" alt="Why Cynosure Designs">
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

@endsection