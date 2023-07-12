@extends('layouts.master')

@section('meta_title', 'SEO Services Award Winning Company - Cynosure Designs')
@section('meta_description', 'Start driving sales & revenue for your brand with tailored Search Engine Optimization strategies to boost visibility.')




@section('canonical', "https://cynosuredesigns.co.uk/services/digital-marketing/seo")

@section('bodyClass', 'homepg')

@php
$faqs=[
    [
        'question' => "What Is Search Engine Optimization (SEO)?",
        'answer' => "Search Engine optimization is a Digital Marketing Strategy. It is a process of making your website/web pages better for search ranking by improving the quality and quantity of the website. Simply put, this refers to enhancing your site's visibility when people search for services or products related to your company's offerings on Google, Bing, and other search engines."
    ],
    [
        'question' => "What are the methods of SEO?",
        'answer' => "<p>There are four major methods of SEO</p>
        <ol>
            <li>On-Page SEO (Page specific element like Tags,Heading,Linking)</li>
            <li>Of-Page SEO (Actions outside of your website like External linking)</li>
            <li>Technical SEO ( Anything to make site easier for search engine crawler to rank and index)</li>
            <li>Local SEO ( Optimizing a website to be found in Local Search Result)</li>
        </ol>
        "
    ],
    [
        'question' => "Difference between SEO and SEM ?",
        'answer' => "<p> Following are the Major difference in SEO and SEM.</p>
        <table class='table table-responsive'>
            <thead>
                <th>SEO</th>
                <th>SEM</th>
            </thead>
            <tbody>
                <tr>
                    <td>Organic Strategies to appear in SERP</td>
                    <td>Paid Strategies to appear in SERP</td>
                </tr>
                <tr>
                    <td>FREE</td>
                    <td>Pay each time user click</td>
                </tr>
                <tr>
                    <td>For anyone</td>
                    <td>For targeted Audience</td>
                </tr>
                <tr>
                    <td>Result take time</td>
                    <td>Results are immediate</td>
                </tr>
                <tr>
                    <td>Long term benefits</td>
                    <td>Short term benefits</td>
                </tr>
            </tbody>
        </table>
        "
    ],
    [
        'question' => "What Are the three techniques of SEO?",
        'answer' => "
        <ol>
            <li><b>White Hat SEO:</b> These are tactics that are approved to increase the website position, e.g. offering quality content and services.</li>
            <li><b>Black Hat SEO:</b> These tactics increase the website's position but violate the Search Engine's 'Terms Of Service.' E.g. Invisible text and Doorway pages.</li>
            <li><b>Grey Hat SEO:</b> A technique that is much riskier than white hat seo but it may or may not ban your website. E.g.:Cloaking, Link Buying.</li>
        </ol>
        "
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
<h2 class="theme_fixed_text">SEO</h2>

<section class="inner_page_header  full_h_sec services_main_banner">
    <img src="{{ asset('/img/seo/header.jpg')}}" class="desktop_banner_img" alt="Top-notch Branding Agency">
    <img src="{{ asset('/img/seo/header-mbl.jpg')}}" class="mobile_banner_img" alt="Cynosure Designs">
    <div class="full_h_inner">
        <div class="container">
            <div class="row">

                <div class="col-md-6 align-self-end">
                    <h1 class="color_dark mt-0">Increase website traffic with best in class <span class="theme_color">SEO service </span>provider.</h1>
                    <p>Coming up with a strong strategy ranks your website in the first place on Google.</p>
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
                        <a href="javascript:;" class="breadcrumbs__element active">SEO</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/img/seo/seo-1.jpg')}}" class="w-100 py-3" alt="professional SEO services">
            </div>
            <div class="col-md-6 align-self-center">
                <h2>
                Boost your rankings and sales with our professional SEO services.
                </h2>
                <p>Cynosure Designs is a digital company with proven experience in SEO strategies to increase Search Engine Results Page (SERP) rankings. With effective SEO performance, the best way to practice inbound marketing to grow your application or website is to stay ahead of the competition. Attract search traffic with all your prestigious services!</p>

            </div>
        </div>
    </div>
</section>



<section class="bg_uiux_cta" style="background:url({{ asset('/img/seo/seo-2.jpg')}});background-attachment: fixed; background-repeat: no-repeat;
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
                <h2>Optimize your website to boost your organic results</h2>
                <p class="w_d_75">As a leading and competitive agency, we are committed to delivering results and fostering long-term financial relationships. This is why we are here to provide SEO services with our dedicated team of SEO and PPC experts for your valuable projects.
                </p>
            </div>
        </div>
      
        <div class="row">

            <div class="col-md-6 align-self-center ">
                <h2>Risk-free SEO Audit</h2>
                <p>We work on making you rank high with the most profitable keywords. Optimizing your website to increase its visibility when searching for products or services related to your business on Google, Bing, and other search engines. The better your pages appear in search results, the more likely they will attract attention and customers interest to your company.</p>
            </div>
            <div class="col-md-6 text-center ">
                <img src="{{ asset('/img/seo/seo-3.png')}}" class="w_d_75" alt="Risk-free SEO Audit">
            </div>
        </div>


        <div class="row">

            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Eminent Content Creation for landing page</h2>
                <p>Our specialists help in creating appealing content for your website, which is the best practice for internal marketing. By creating content on the pages, we provide useful information to the audience that attracts potential customers to the website, and retain current customers through quality communication.</p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/seo/seo-4.png')}}" class="w_d_75" alt="Eminent Content">
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <h2>On-Page Optimization</h2>
                <p>
                Without on-page optimization, most of your SEO efforts will be wasted because On-page SEO helps to improve your website Organic ranking in search engines and analyze your site with related content for best results.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/seo/seo-5.png')}}" class="w_d_75" alt="On-Page Optimization">
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Off-Page Optimization</h2>
                <p>Backlinks and off-site content are important for search engine rankings, as each site has to compete with millions of top sites. Off-page SEO tells the search engine that your site is relevant to others. This allows external sources to act as separate pages for websites with the same SEO standards and ranks the websites in search results pages (SERPs). </p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/seo/seo-6.png')}}" class="w_d_75" alt="Off-Page Optimization">
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 align-self-center">
                <h2>Keywords Research</h2>
                <p>
                Our experts work on substantial keywords research that provide you with important information, such as where you rank for keywords, which keywords are easy to rank and which keywords your competitors rank. Such analysis can tell you what people are looking for, not what you think they are looking for.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/seo/seo-7.png')}}" class="w_d_75" alt="Keywords Research">
            </div>

        </div>
        <div class="row">

            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Striking away the competition</h2>
                <p>Cynosure Designs’ Search Engine Optimization designers develop specific strategic plans that will propel your company’s business goals and objectives in an intuitive facets while overwhelming the enormous barriers thereof. </p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/seo/seo-8.png')}}" class="w_d_75" alt="Striking away the competition">
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
                <h2>Inbound Leads strategy</h2>
                <p>
                With the most effective SEO services our team brings a targeted group of customers to your brand that boost up your inbound leads and help in prospering business.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/seo/seo-9.png')}}" class="w_d_75" alt="Inbound Leads strategy">
            </div>
        </div>
   

        <div class="row">
            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Incredible ROI Results</h2>
                <p>A website will have a positive return on investments if the organic revenue generated by your SEO campaign is higher than its value. When you look at return on investment, you see how much you invest and how much you get back.</p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/seo/seo-10.png')}}" class="w_d_75" alt="Incredible ROI Results">
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 align-self-center">
                <h2> Strengthening Reputation</h2>
                <p>
                SEO helps in creating  long-term recognition for your brand name. Good ratings and good rankings help improve your brand profile. People are looking for relevant information regarding products and with a good SEO and PR strategy, your brand will attract attention.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/seo/seo-11.png')}}" class="w_d_75" alt="Strengthening Reputation">
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