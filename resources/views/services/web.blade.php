@extends('layouts.master')

@section('meta_title', 'Website Design & Development Services in london')
@section('meta_description', 'UK Leading Website Design & Development Company. We deliver websites that are aligned with your brand and generate revenue.')


@section('canonical', "https://cynosuredesigns.co.uk/services/web-development")

@section('bodyClass', 'homepg')

@php
$faqs=[
    [
        'question' => "What is web development?",
        'answer' => "<p>Web development is creating, building and maintaining a website on the internet. Web development is done by using a variety of coding languages (PHP, Java, python JavaScript and SQL). It includes Web Publishing, Web Programming and Database management.</p>
        <p>Web development has two phases:</p>
        <ol>
            <li>Front End ( Focus on the visual elements of the website)</li>
            <li>Back End ( Logics that power the front-end interaction)</li>
        </ol>
        "
    ],
    [
        'question' => "What are the main types of websites?",
        'answer' => "<p> Following are the main types of website:</p>
        <ol>
            <li>Ecommerce Websites.</li>
            <li>Portfolio Websites.</li>
            <li>Small Business Websites</li>
            <li>Blog Websites</li>
            <li>Personal Websites</li>
        </ol>
        "
    ],
    [
        'question' => "What is a CMS?",
        'answer' => "A CMS is a content management system that helps to create, modify and manage the content of a website in a system. It forms the backbone of the website infrastructure and helps manage little things with little or no coding skills. Content Management System software functions efficiently and effectively in publishing, reporting, access control, revision control, format management, storing, and indexing with a core set of features and functions."
    ],
    [
        'question' => "How many types of CMS are there?",
        'answer' => "<p>Following are the major types of CMS:</p>
        <ol>
            <li>Component Content Management System (CCMS).</li>
            <li>Document Management System (DCM).</li>
            <li>Enterprise Content Management System (ECMS).</li>
            <li>Digital Asset Management System (DAM).</li>
            <li>Web Content Management System (WCMS).</li>
        </ol>
        "
    ],
];
@endphp

@section('script_css')


<meta itemprop="image" content="{{ asset('/img/web-dev/header-web-cms.jpg')}}">
<meta property="og:image" content="{{ asset('/img/web-dev/header-web-cms.jpg')}}" />
<meta name="twitter:image" content="{{ asset('/img/web-dev/header-web-cms.jpg')}}" />


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
        }, {
            "@type": "ListItem",
            "position": 3,
            "name": "Web Development",
            "item": "https://cynosuredesigns.co.uk/services/web-development"
        }]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Website Design & Development Services in london",
        "description": "UK Leading Website Design & Development Company. We deliver websites that are aligned with your brand and generate revenue.",
        "publisher": {
            "@type": "ProfilePage",
            "name": "Cynosure Designs"
        }
    }
</script>

@include('common.faqs_schema',['faqs'=>$faqs])

@append

@section('content')
<h2 class="theme_fixed_text">WEB DEVELOPMENT</h2>
        <section class="inner_page_header  full_h_sec services_main_banner">
            <img src="{{ asset('/img/web-dev/header-web-cms.jpg')}}" class="desktop_banner_img" alt="Website Design & Development Agency">
            <img src="{{ asset('/img/web-dev/header-web-cms-mbl.jpg')}}" class="mobile_banner_img" alt="cynosure designs">

            <div class="full_h_inner">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 align-self-end">


                        <h1 class="color_dark mt-0">Website <span class="theme_color">Design & Development</span> Agency</h1>
                            <p>Cynosure ensures the digital transformation of professionally designed and imaginative Website and Software development services, that gives an enthusiastic approach to global businesses.</p>
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
                                <a href="javascript:;" class="breadcrumbs__element active">Web Development</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('/img/web-dev/web-cms-1.jpg')}}" class="py-3 w-100" alt="Modern Web Design to Stay Ahead of Competition">
                    </div>
                    <div class="col-md-6 align-self-center">
                    <h2>Modern Web Design to Stay Ahead of Competition
                        </h2>
                        <!-- USER-FRIENDLY AND RESPONSIVE WEB DESIGNS -->
                        <p>
                        Your website needs unique and stylish designs and digital inspiration. We have creative designers team to design the latest trending Web designs that freshen up your site and result in better ROI. Since it's more important to incorporate modern web design into your marketing strategy and build up your company's identification around the globe.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg_uiux_cta" style="background:url({{ asset('/img/web-dev/web-2.jpg')}});background-attachment: fixed; background-repeat: no-repeat;
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
                    <h2>GROW YOUR BUSINESS WITH VISUALLY APPEALING WEBSITES</h2>
                        <p class="w_d_75">Our U.K based firm hires technical designers who cater for the technicalities and requirements of business projects. With many years of expertise, we create additional features and provide diversified mechanisms including WordPress,
                            Shopify, Magento, Web Hosting, Custom Web Development and many more solutions, what you want.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                    <h2>Responsive Web Design</h2>
                        <p>
                        Our team specializes in developing a responsive websites which includes convenient user experience design elements across mobile, tablets and desktop devices such as readable text without zooming, no horizontal scrolling and sufficient space for tapping targets,
                        so your communication with your audience isn't limited to the device they're using. Responsive pages generate higher conversions that are human-centric and future-oriented.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('/img/web-dev/web-3.png')}}" class="w-75" alt="Responsive Web Design">
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 align-self-center order-1 order-md-2">
                    <h2>Ecommerce Website Development</h2>
                        <p>
                            Build a creative online store and start selling your products with the leading e-commerce platform in this modern era. Grow your market-defining online experiences across the boundaries without any fear, keeping in account the real-time customer insights.
                            Making money on e-commerce websites is easier through numerous revenue streams including dropshipping, affiliate marketing, private labelling and many more. Based on collaboration between the team and client, we design the
                            visualizations needed for the products to bring the maximum impact on your website. While achieving the targets our passionate designers portray your website in a manner that truly describes your business objectives.
                        </p>
                    </div>
                    <div class="col-md-6 text-center order-2 order-md-1">
                        <img src="{{ asset('/img/web-dev/web-4.png')}}" class="w-75" alt="Ecommerce Website Development">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                    <h2>Content Management System</h2>
                        <p>Our digital agency assists in creating, managing and modifying web content by utilizing multiple procedures, tools and technologies. Content Management System software functions efficiently and effectively in publishing, reporting,
                            access control, revision control, format management, storing and indexing with a core set of features and functions. Where websites need to be created faster and more easily with creative and fascinating content, CMS application
                            get that job done without the loss in quality. We provide you with plenty of methods of functionalities and customization options just to strengthen and scale your online and offline businesses.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('/img/web-dev/web-5.png')}}" class="w-75" alt="Content Management System">
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 align-self-center order-1 order-md-2">
                    <h2>Custom Web Solution</h2>
                        <p>At Cynosure Designs, we sought out the most customized solutions and mechanisms for the websites and create your approved designs into the enterprise-class. Understanding the best-end results, our designers consistently focus on
                            the updates and ongoing maintenance procedures for long-term customer loyalty. Created websites are always fully responsive for all devices and their screen sizes. Our elite class design team, by taking into account your organization's
                            mission, vision and brand, begin to work with the dedication that brings the conceptual content to life in the mock-up process. We fall in deep to learn about the project's objectives and carry on this passion in every project
                            that leads our dominant agency in the U.K.</p>
                    </div>
                    <div class="col-md-6 text-center order-2 order-md-1">
                        <img src="{{ asset('/img/web-dev/web-6.png')}}" class="w-75" alt="Custom Web Solution">
                    </div>
                </div>

            </div>
        </section>


        <section class="casestudy_panels py-5 unset_min_height" data-color="default">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 pb-5 text-center">
                        <h2>Benefits of Web Design & Development with</h2>
                    </div>
                </div>
                <div class="row text-center services_icons_row">
                    <div class="col-md-2">
                    <img src="{{ asset('/img/icons/custom-design.svg')}}" width="70" alt="Custom Design Solution">

                        <p>Custom Design Solution</p>
                    </div>
                    <div class="col-md-2">
                    <img src="{{ asset('/img/icons/ai-powered.svg')}}" width="70" alt="AI-POWERED PERSONALIZED EXPERIENCE">
                        <p>AI-Powered Personalized Experience</p>
                    </div>
                    <div class="col-md-2">
                    <img src="{{ asset('/img/icons/multi-lingual.svg')}}" width="70" alt="Multi Lingual">
                        <p>Multi Lingual</p>
                    </div>
                    <div class="col-md-2">
                    <img src="{{ asset('/img/icons/seo.svg')}}" width="70" alt="SEO friendly">
                        <p>SEO friendly</p>
                    </div>
                    <div class="col-md-2">
                    <img src="{{ asset('/img/icons/lead-generation.svg')}}" width="70" alt="Lead generation">
                        <p>Lead Generation</p>
                    </div>
                    <div class="col-md-2">
                    <img src="{{ asset('/img/icons/crm.svg')}}" width="70" alt="Smart CRM & Analytics Integrations">
                        <p>Smart CRM</p>
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
                        <img src="{{ asset('/img/icons/testimonials.jpg')}}" class="pb-4" width="80" alt="client review">

                        <br>
                        <h4 class="w_d_75">Great support by the Cynosure Designs team in designing and building a specific and fascinating Website. They were very professional, responsive and engaging throughout the journey. Superb job!</h4>
                        <br>
                        <h3>Raymond</h3>
                        <p>London, England</p>
                    </div>
                </div>



            </div>
        </section>
@endsection