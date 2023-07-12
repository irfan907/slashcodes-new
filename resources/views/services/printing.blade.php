@extends('layouts.master')

@section('meta_title', 'Cynosure Designs offer Digital Printing & Packaging Services in UK')
@section('meta_description', 'Find the best Quality digital printing & packaging services in UK, We offer custom made printing & packaging solutions for small business and corporate organizations.')




@section('canonical', "https://cynosuredesigns.co.uk/services/printing-packaging-solution")

@section('bodyClass', 'homepg')

@php
$faqs=[
    [
        'question' => " Why printing and packaging is important?",
        'answer' => "Packages usually use printed graphics to communicate a product’s value and to advance the equity of a brand. A pack is a silent salesperson helping the consumer understand your value, pre-purchase, and delivering on that value throughout each step of unboxing. Printing allows you to communicate important information across the supply chain like indicating fragility, which side is up, and essential labeling.",
    ],
    [
        'question' => "What is digital print packaging? ",
        'answer' => "Digital print packaging is done using an electrophotographic printer through which different digital-based images are printed on the package. Your project is fed to the machine directly from the computer. The biggest advantage of this technology is how quickly it can deliver the final product as opposed to the offset printing. This technology is used where package quantity isn't high. ",
    ],
    [
        'question' => "How many types of printing are there?",
        'answer' => "<p>Following are some of the  main types of printing:</p>
        <ol>
            <li>Digital printing.</li>
            <li>Screen printing.</li>
            <li>Offset litho printing.</li>
            <li>Flexography.</li>
            <li>Gravure.</li>
            </ol>
        ",
    ],
    [
        'question' => "What are the major functions of packaging?",
        'answer' => "<p>Some of the major functions are as follows:</p>
        <ol>
            <li><b>Protection:</b> The package protects the product from damage.</li>
            <li><b>Identification:</b> The product can be easily identified with packing.</li>
            <li><b>Convenience:</b> Appropriate packing made the product easy to store & shift.</li>
            <li><b>Promotion:</b> Colorful & innovative packaging attracts customers.</li>
            </ol>
        ",
    ],
];
@endphp


@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />

@include('common.faqs_schema',['faqs'=>$faqs])

@append

@section('content')
<h2 class="theme_fixed_text">PRINTING</h2>

<section class="inner_page_header  full_h_sec services_main_banner">
    <img src="{{ asset('/img/printing-packaging/header-printing.jpg')}}" class="desktop_banner_img" alt="GLOBAL PRINTING & PACKAGING SOLUTIONS">
    <img src="{{ asset('/img/printing-packaging/header-printing-mbl.jpg')}}" class="mobile_banner_img" alt="Cynosure Designs">
    <div class="full_h_inner">
        <div class="container">
            <div class="row">

                <div class="col-md-6 align-self-end">

                    <h1 class="color_dark mt-0">GLOBAL <span class="theme_color">PRINTING & PACKAGING</span> SOLUTIONS</h1>
                    <p>Our company revolutionized offset as well as digital printing and the future delightful packaging, opening doors to exciting and creative opportunities.</p>
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
                        <a href="javascript:;" class="breadcrumbs__element active">Printing & Packaging</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/img/printing-packaging/packaging-1.jpg')}}" class=" w-100" alt="EXCLUSIVE DIGITAL PRINTING AND PACKAGING UK">
            </div>
            <div class="col-md-6 align-self-center">
                <h2>EXCLUSIVE DIGITAL PRINTING AND PACKAGING FOR LUXURY PRODUCTS
                </h2>
                <p>
                Our professional team is well qualified in taking up the challenges and providing the desired outcomes. Delivering the best image and high-quality services by putting on a bunch of efforts according to specifications and international standards. 
We pride ourselves in offering creative and innovative designs in product packaging and 
Commercial printing by saving time and money. Our competent crew members give Adaptable solutions to wholesalers and retailers, maintaining the best value to endless possibilities in affordable pricing.
</p>
            </div>
        </div>
    </div>
</section>


<section class="bg_uiux_cta" style="background:url({{ asset('/img/printing-packaging/PP-2.jpg')}});background-attachment: fixed; background-repeat: no-repeat;
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
                <h2>BENEFITS OF CAPTIVATED PRINTING DESIGNS AND PACKAGING.</h2>
                <p class="w_d_75">When you choose our services, you get everything to realise your product idea properly, from experience of working with Fortune 500 clients to design standards that will help us deliver your product quicker and without loss in
                    quality.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <h2>CLASSIFIED PRINTING</h2>
                <p>
                Choosing our services to navigate our experts in building your reputation, status and more influential with media, marketing, industry and internal stakeholders, driving the commercial success. The creation of finished work comprises several printmaking techniques that revolve around 3D printing, offset printing, digital printing, screen printing and so on and so forth. Digital solutions empower your business with key benefits by maximizing opportunities, reducing risk, exceptional quality production, quick delivery and cost-effectiveness. When it comes to professional printing methods, we bring together innovative digital communication and creative content to develop impactful campaigns, reaching the target audiences worldwide.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/printing-packaging/pp-3.png')}}" class="w-75" alt="CLASSIFIED PRINTING">
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 align-self-center order-1 order-md-2">
                <h2>PRODUCT PACKAGING</h2>
                <p>Our award-winning organization formulates every possible option for our trusted clients In the matter of incredible packaging materials and finishes that stand out on the rack. 
</p>
<p>Enhancing the product and customer experiences by offering various options in durable packaging that accommodates paperboard boxes, corrugated boxes, rigid boxes and many more. The ideal packaging incorporated the benefits of protection, convenience, reliability and sustainability. In comparison to other choices and options available in today's market, our company plays a vital role in perceiving the significance of a product as a whole and coming up with appropriate and righteous packaging solutions that serve to protect the product inside.</p>
            </div>
            <div class="col-md-6 text-center order-2 order-md-1">
                <img src="{{ asset('/img/printing-packaging/pp-4.png')}}" class="w-75" alt="PRODUCT PACKAGING">
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 align-self-center">
                <h2>
CUSTOM-MADE SOLUTIONS 
</h2>
                <p>Owing to our many years of experience in designing, we are determined towards the specific goals, objectives and requirements of any project assigned. Now you do not need to work with multiple dealers to get the most out of designing, printing, engineering and distribution, as we do it all for you. Our world-class professionals are right here in serving customized Printing and Packaging solutions to our clients that fit in their budget. Our team of experts focuses on the desires and requirements of clients, then works with flexibility and devotion by utilizing their artistic skills in providing them with tailor-made outcomes at competitive pricing. There is a lot of inspiration to be found for the specific preferences and custom product printing and packaging.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/printing-packaging/pp-5.png')}}" class="w-75" alt="CUSTOM-MADE SOLUTIONS ">
            </div>

        </div>

    </div>
</section>


<section class="casestudy_panels py-5 unset_min_height" data-color="default">
    <div class="container">

        <div class="row">
            <div class="col-md-12 pb-5 text-center">
                <h2>Our Product Range Includes</h2>
            </div>
        </div>
        <div class="row text-center services_icons_row">
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/stationery.svg')}}" width="70" alt="Stationery Products">
                <p>Stationery Products</p>
            </div>
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/business-cards.svg')}}" width="70" alt="Business Cards">
                <p>Business Cards</p>
            </div>
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/letterhead.svg')}}" width="70" alt="Letterheads">
                <p>Letterheads</p>
            </div>
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/env-folders.svg')}}" width="70" alt="Envelopes & Folders">
                <p>Envelopes & Folders</p>
            </div>
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/invoice.svg')}}" width="70" alt="Invoices">
                <p>Invoices</p>
            </div>
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/packaging.svg')}}" width="70" alt="Packaging Materials">
                <p>Packaging Materials</p>
            </div>
        </div>

        <div class="row text-center services_icons_row">
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/brochure.svg')}}" width="70" alt="Brochures, Flyers, Posters">

                <p>Brochures, Flyers, Posters </p>
            </div>
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/restaurant-menu.svg')}}" width="70" alt="Restaurant Menus">

                <p>Restaurant Menus</p>
            </div>
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/tickets.svg')}}" width="70" alt="Tickets, Coupons">
                <p>Tickets, Coupons</p>
            </div>
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/sticker.svg')}}" width="70" alt="stickers">
                <p>Stickers</p>
            </div>
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/billboard.svg')}}" width="70" alt="Billboards">
                <p>Billboards</p>
            </div>
            <div class="col-md-2">
            <img src="{{ asset('/img/icons/rollup.svg')}}" width="70" alt="Roll-Up Banners">
                <p>Roll-Up Banners</p>
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
                <img src="{{ asset('/img/icons/testimonials.jpg')}}" class="pb-4" width="80" alt="Client Review">

                <br>
                <h4 class="mx-auto w-75">
                Extremely creative, knowledgeable and mindful team. Having a "can't do" attitude and being strict to the timeline are highly appreciated. The entire company exceeded my expectations with their intelligence. Thank you!
                </h4>
                <br>
                <h3>Raymond</h3>
                <p>London, England</p>
            </div>
        </div>



    </div>
</section>

@endsection