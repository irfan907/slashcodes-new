@extends('layouts.master')

@section('meta_title', 'About Cynosure Designs | Digital Marketing & Advertising Agency in London')
@section('meta_description', 'Cynosure Designs is UK based AI technology, digital marketing, advertising, branding & design solutions agency for businesses in London.')




@section('canonical', "https://cynosuredesigns.co.uk/about-us")

@section('bodyClass', 'homepg')


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
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "About Us",
        "item": "https://cynosuredesigns.co.uk/about-us"
      }]
    }
    </script>

@append




@section('content')        <h2 class="theme_fixed_text">About Us</h2>

<section class="inner_page_header  full_h_sec services_main_banner">
    <img src="{{ asset('/img/about/header-about.jpg')}}" class="desktop_banner_img" alt="">
    <img src="{{ asset('/img/about/header-about-mbl.jpg')}}" class="mobile_banner_img" alt="">
    <div class="full_h_inner">
        <div class="container">
            <div class="row">

                <div class="col-md-6 align-self-end">
                    <h1 class="color_dark mt-0">Think corporate innovation <br> <span class="theme_color">We think the solution</span>
                    </h1>
                    <p>In our 15 years of collective industry experience, we have generated a substantial portfolio of work covering a wide range of delighted clients.
                    <!-- Some of our recent work is available to view on our website, every completed project gives us yet more knowledge which we immediately fold back into our work to ensure that we continue to deliver the excellent standards that our name has come to represent. -->

                    </p>
                    <a href="{{ route('contact') }}" class="theme_btn inverse_btn">Say Hello</a>
                </div>

            </div>
        </div>
    </div>
</section>



<section>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('/img/about/1.png')}}" class=" w-100" alt="">
            </div>
            <div class="col-md-7 align-self-center">
                <h4>Vision</h4>
                <h2>Technology inspired through creativity</h2>
                <p>Cynosure Designs have been providing innovative and affordable graphic and web solutions, enabling individuals and organisations of all sizes to achieve their design objectives. </p>
                <p>By understanding the processes that make your business unique, we are able to utilise our creative skills and technological know-how to build a tailor-made solution that will support your business now and in the future.</p>
                <p> We pride ourselves on our high levels of customer service. This has been achieved by carrying out all work in-house, where we can maintain quality control and ensure your deadlines are met. This approach has enabled us to grow
                    by reputation alone – nearly all of our new business comes as a referral from our existing clients.</p>

            </div>
        </div>
        <div class="row">

            <div class="col-md-7 align-self-center">
                <h4>Strategy</h4>
                <h2>Excellent working relationship
                </h2>
                <p>Creating website and multimedia solutions requires more than just knowledge. A comprehensive understanding of our clients business and the marketplace they operate in enables us to address and meet the clients' objectives. We understand
                    that your individual needs are highly precise, which is why we assign a specific project manager to handle your account from beginning to end. By doing this we maintain a consistent, dedicated line of communication which allows
                    us to fulfil your needs accurately and efficiently.
                </p>
            </div>
            <div class="col-md-5 ">
                <img src="{{ asset('/img/about/2.png')}}" class=" w-100" alt="">
            </div>
        </div>
    </div>
</section>

<section class="bg_uiux_cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-white">
                    Ready to realise your product vision?
                </h2>
                <p class="text-white w_d_75">Building optimal intersections between business goals and user’s needs, we create amazing customer journeys. Our AI infused UI/UX solutions cover the gap between the human brain and the digital product you offer and allow you to
                    gather market insights, analyze consumer buying behavior, consider customer preferences and learn market trends to you to close to more sales & ensure higher user adoption rates.</p>
                <!-- <a href="#" class="theme_btn">Download PDF</a> -->
                <a href="{{ route('contact') }}" class="theme_btn">Estimate your project</a>
            </div>
        </div>
    </div>
</section>


<section class="d-none">
    <div class="container">


        <div class="row">
            <div class="col-md-12 text-center pb-5">
                <h2>What’s Different About CYNOSURE?</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 align-self-center">
                <h2>Engineering with passion</h2>
                <p>viewydigital uses the latest collaborative wireframing tools to create interactive wireframes, or visual prototypes of your application. During the wireframing process, we determine the application’s functional flow, navigation,
                    and number of screens needed. During this process, we closely work with clients to help them see, understand, and be actively involved in the creation of their application. As a result, our clients never experience unpleasant
                    surprises or disappointments They stay intimately involved in the choices and decisions made on the project. At the same time, Simpalm’s expert team of professionals drive the project and provide the attention to detail, budget,
                    and timeline that ensures a project’s successful completion.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/about/3.png')}}" class="w-75" alt="">
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/about/4.png')}}" class="w-75" alt="">
            </div>
            <div class="col-md-6 align-self-center">
                <h2>Performance focus</h2>
                <p>Viewy Digital emphasizes on the design of an application for providing the supreme quality user experience. The UIs, we design, are compatible with different platforms like iOS/Android. Our professionals follow the principles of
                    the Minimal User Interface that increase the mobility of an application. Furthermore, the specific UI/UX approaches are implemented for offering an engaging experience of using an application.</p>
            </div>

        </div>
    </div>
</section>

@include('common.services-section')

@endsection