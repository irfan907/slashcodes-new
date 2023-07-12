@extends('layouts.master')

@section('meta_title', 'Web Design, Development & Digital Marketing Services In UK')
@section('meta_description', 'We provide innovative services in UK, specializing in AI, Digital Marketing, Advertising, Web Development, SEO, Branding &amp; Design, and Business Technology Solutions.')

@section('canonical', "https://cynosuredesigns.co.uk/services")
@section('bodyClass', 'services_pg')

@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />


<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://cynosuredesigns.co.uk/"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Services",
            "item": "https://cynosuredesigns.co.uk/services"
        }]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Web Design, Development & Digital Marketing Services In UK",
        "description": "We provide innovative services in UK, specializing in AI, Digital Marketing, Advertising, Web Development, SEO, Branding &amp; Design, and Business Technology Solutions.",
        "publisher": {
            "@type": "ProfilePage",
            "name": "Cynosure Designs"
        }
    }
</script>

@append

@section('content')

<section class="inner_page_header  full_h_sec services_main_banner">
    <img src="{{ asset('/img/header-services.jpg')}}" class="desktop_banner_img" alt="">
    <img src="{{ asset('/img/header-services-mbl.jpg')}}" class="mobile_banner_img" alt="">
    <div class="full_h_inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-end">
                    <h1 class="color_dark mt-0">Website Design & Development <span class="theme_color">Services</span> in London</h1>
                    <p>We design a great experience for your users on the web and mobile platforms</p>
                    <a href="{{ route('contact') }}" class="theme_btn inverse_btn">Lets discuss your project!</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('common.services-section')

@include('common.industries')
@include('common.dmservices')
@include('common.calculator_cta')
@include('common.casestudies')
@endsection