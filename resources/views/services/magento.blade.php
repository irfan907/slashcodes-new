@extends('layouts.master')

@section('meta_title', 'Custom Magento Website Design and Development Services')
@section('meta_description', 'Top Magento Development Agency cynosure provides Magento web design and web development services')




@section('canonical', "https://cynosuredesigns.co.uk/services/web-development/magento")

@section('bodyClass', 'homepg')

@php
$faqs=[
    [
        'question' => "What is Magento web development?",
        'answer' => " Magento is a Content Management system. It's an ecommerce platform for building flexible E-stores. It's an open-source platform that first came in 2008, and then later, Magento 2.0 was released in 2015. Along with a  shopping cart system, it provides online sellers control over the look, feel, and functioning of their online store"
    ],
    [
        'question' => "What are the main features of Magento ?",
        'answer' => "<p>Some of the main features of the Magento are as follow:</p>
        <ol>
            <li>Open Source (Community, Enterprise, Professional).</li>
            <li>Versatile (Build And Customize).</li>
            <li>SEO Optimization  </li>
            <li>Third-Party Integration (Connect with all Shopping Cart Sites).</li>
            <li>Powerful and Spacious ( Hold up to 5,00,000 products and 80,000 orders per hour).</li>
            <li>Time and Money saver ( Plugins & Extension).</li>
            <li>Security Permissions.</li>
        </ol>
        "
    ],
    [
        'question' => "What is difference between Magento and WordPress?",
        'answer' => "
        <table>
            <thead>
                <th>Magento</th>
                <th>Wordpress</th>
            </thead>
            <tbody>
                <tr>
                    <td>Open Source</td>
                    <td>Open Source</td>
                </tr>
                <tr>
                    <td>E-Commerce platform</td>
                    <td>Multi Purpose CMS</td>
                </tr>
                <tr>
                    <td>Build in Functionality</td>
                    <td>Plugins and Extensions</td>
                </tr>
                <tr>
                    <td>Free to use</td>
                    <td>Free to use</td>
                </tr>
                <tr>
                    <td>Complex For Development purpose</td>
                    <td>Less Complex For Development Purposes</td>
                </tr>
                <tr>
                    <td>Less SEO Friendly</td>
                    <td>SEO Friendly</td>
                </tr>
                <tr>
                    <td>No Blogging Functionality</td>
                    <td>Blogging Functionality</td>
                </tr>
            </tbody>
        </table>
        "
    ],
];
@endphp


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
        }, {
            "@type": "ListItem",
            "position": 3,
            "name": "Magento"
        }]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Custom Magento Website Design and Development Services",
        "description": "Top Magento Development Agency cynosure provides Magento web design and web development services",
        "publisher": {
            "@type": "ProfilePage",
            "name": "Cynosure Designs"
        }
    }
</script>

@include('common.faqs_schema',['faqs'=>$faqs])


@append

@section('content')
<h2 class="theme_fixed_text">Magento</h2>

<section class="inner_page_header  full_h_sec services_main_banner">
    <img src="{{ asset('/img/magento/header.jpg')}}" class="desktop_banner_img" alt="Top-notch magento ecommerce  Solutions">
    <img src="{{ asset('/img/magento/header-mbl.jpg')}}" class="mobile_banner_img" alt="Cynosure Designs">
    <div class="full_h_inner">
        <div class="container">
            <div class="row">

                <div class="col-md-6 align-self-end">
                    <h1 class="color_dark mt-0"><span class="theme_color">Magento</span> - Ecommerce Development Services</h1>
                    <p>In today’s era the e-commerce landscape continues to change as companies look for personalized online stores that offer the best customer experiences. Magento is the industry standard for e-commerce websites for its innovative web and responsive design. Magento is extremely fast, mobile compatible and can host multiple websites.</p>
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
                        <a href="javascript:;" class="breadcrumbs__element active">Magento</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/img/magento/magento-1.jpg')}}" class="w-100 py-3" alt="professional PPC services">
            </div>
            <div class="col-md-6 align-self-center">
                <h2>
                    Boost up your business with customized Magento virtual store
                </h2>
                <p>The services are completely tailored to every aspect of small to large businesses. Our certified Magento experts will work dedicatedly by focussing on your business goals and objectives and stand out from the competition. Our expertise in the Magento 1 & Magento 2 platforms with proven design and development strategies ensure industry-leading solutions for your company.</p>

            </div>
        </div>
    </div>
</section>



<section class="bg_uiux_cta" style="background:url({{ asset('/img/magento/magento-2.jpg')}});background-attachment: fixed; background-repeat: no-repeat;
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
                <h2>Empower your business by Magento</h2>
                <p class="w_d_75">
                    Providing end-to-end commerce solutions that grows with you. Create multi-channel business experiences for B2B and B2C on a single platform. Our cutting-edge technology offers you a flexible, scalable and infinitely scalable trading platform.
                </p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 align-self-center ">
                <h2>Discovering your Business</h2>
                <p>The first step in developing a Magento website is knowing your business requirements. Our experts review your business workflows and processes to propose you a scalable solution for the Magento website that can help you take your business to the next level in the highly competitive market. We collaborate on a research journey, where we analyze the competition in the arena and the importance of the Magento website for your business. </p>
            </div>
            <div class="col-md-6 text-center ">
                <img src="{{ asset('/img/magento/magento-3.png')}}" class="w_d_75" alt="Discovering your Business">
            </div>
        </div>


        <div class="row">

            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Mockups & User Interface design</h2>
                <p>After carefully discovering your business requirements, our team brainstorm to strategize and execute the strategy in the form of drafting a blueprint for your website by clearly identifying milestones and define time estimations. Our experts will design the customized e-commerce website user interface according to your brand guidelines to enhance the user experience and incorporate UI design elements to ensure simplicity for optimal user engagement.</p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/magento/magento-4.png')}}" class="w_d_75" alt="Mockups & User Interface design">
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <h2>Magento Development & Integration</h2>
                <p>
                    After finalizing the design, ​​the need for custom-made development is an essential part of every Magento project. With our responsible team, you can get clear code and out-of-the-box features including multilingual, sales reports, analytics and many more customized options for your website without a single bug and interruptions. To maximize your business potential, we integrate your online store with multiple third-party platforms for additional functionality such as CRM, Payment Gateways, Amazon, eBay & Facebook marketplaces.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/magento/magento-5.png')}}" class="w_d_75" alt="Magento Development & Integration">
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Website Optimization and Maintenance </h2>
                <p>Our team of experts consistently work on the process of checking web performance, security, version upgrades, backups, online store management, store optimization, content updates to boost your sales. We deliberately work on an ongoing and routine process of maintaining and increasing website rankings in search results by persistently improving the website's SEO.</p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/magento/magento-6.png')}}" class="w_d_75" alt="Website Optimization and Maintenance">
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 align-self-center">
                <h2>Magento Migration</h2>

                <p>When deciding to migrate your store to Magento 2, it is important to create a migration plan detailing how and when certain actions should be taken as part of the process. Our Magento experts have the competencies to consider the crucial factors in the migration procedure to run everything smoothly, enhance performance and increase sales globally.</p>

            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/magento/magento-7.png')}}" class="w_d_75" alt="Magento Migration">
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