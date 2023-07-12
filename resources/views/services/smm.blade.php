@extends('layouts.master')

@section('meta_title', 'Reliable Social Media Marketing For Your Business - Cynosure')
@section('meta_description', 'We can build a great social media presence by assisting and creating interaction plan for you')




@section('canonical', "https://cynosuredesigns.co.uk/services/digital-marketing/smm")

@section('bodyClass', 'homepg')

@php
$faqs=[
    [
        'question' => "What is Social media marketing?",
        'answer' => "Social Media Marketing is a Digital marketing Strategy which involves the usage of different Social Media Platform to increase the brand awareness,website traffic,generating leads and other marketing goals."
    ],
    [
        'question' => "What are the 4 Es of social media marketing?",
        'answer' => "<p>Following are the 4 Es of SMM:</p>
        <ol>
            <li>Educate.</li>
            <li>Empower.</li>
            <li>Engage.</li>
            <li>Entertain.</li>
        </ol>
        "
    ],
    [
        'question' => "Difference between SMM and SEO?",
        'answer' => "
        <table>
            <thead>
                <th>SEO</th>
                <th>SMM</th>
            </thead>
            <tbody>
                <tr>
                    <td>Enhances reach and rank of Websites.</td>
                    <td>Generate traffic from Social Media platform.</td>
                </tr>
                <tr>
                    <td>Based on Keyword Research for organic growth.</td>
                    <td>Creates a high quality community.</td>
                </tr>
                <tr>
                    <td>Use Search Engines.</td>
                    <td>Use Social Media platform.</td>
                </tr>
                <tr>
                    <td>Free</td>
                    <td>Paid</td>
                </tr>
            </tbody>
        </table>
        "
    ],
    [
        'question' => "What is a social media marketing strategy?",
        'answer' => "<p>A social media strategy is a list of all the things you're planning to accomplish and what you hope to accomplish on social media. It will guide your actions and tells you if you're making progress or not.</p>
        <p>The more precise your strategy is the more effective your plan will be. Make it clear. Do not make it too excessive and broad that it's impossible to track your progress.</p>
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
<h2 class="theme_fixed_text">SMM</h2>

<section class="inner_page_header  full_h_sec services_main_banner">
    <img src="{{ asset('/img/smm/header.jpg')}}" class="desktop_banner_img" alt="Top-notch Branding Agency">
    <img src="{{ asset('/img/smm/header-mbl.jpg')}}" class="mobile_banner_img" alt="Cynosure Designs">
    <div class="full_h_inner">
        <div class="container">
            <div class="row">

                <div class="col-md-6 align-self-end">
                    <h1 class="color_dark mt-0">Generate <span class="theme_color">qualified leads</span> with our dominant Social Media Marketing campaigns</h1>
                    <p>Our team of experts provide a full range of social media services, heavily influencing brand’s perceptions positively.</p>
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
                        <a href="javascript:;" class="breadcrumbs__element active">SMM</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/img/smm/smm-1.jpg')}}" class="w-100 py-3" alt="professional smm services">
            </div>
            <div class="col-md-6 align-self-center">
                <h2>
                Engage potential customers and increase brand’s awareness with social media marketing campaigns.
                </h2>
                <p>We are popular in engaging over millions of  people in our social communities and have proven ourselves to be the best at building long-term relationships with thousands of social influencers on multiple social media channels including Facebook, Twitter, Instagram, Linkedin and many more. Our innovative, progressive and modern social media management strategies as well as our expertise in all available social platforms have made us one of the most innovative social media advertising companies worldwide.</p>

            </div>
        </div>
    </div>
</section>



<section class="bg_uiux_cta" style="background:url({{ asset('/img/smm/smm-2.jpg')}});background-attachment: fixed; background-repeat: no-repeat;
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
                <h2>Bespoke Social Media marketing solutions for your brand</h2>
                <p class="w_d_75">Develop your brand with the best advertising and social media marketing services to connect with customers and increase awareness of your new and existing products and services.
                </p>
            </div>
        </div>
      
        <div class="row">

            <div class="col-md-6 align-self-center ">
                <h2>Optimizing Social Media Platforms</h2>
                <p>Why is it important to improve social networks? With social media optimization, we can ensure a strong presence of your company and build brand recognition online. It not only introduces people to the business, but also helps build brand, improves brand awareness and global visibility.</p>
            </div>
            <div class="col-md-6 text-center ">
                <img src="{{ asset('/img/smm/smm-3.png')}}" class="w_d_75" alt="Optimizing Social Media Platforms">
            </div>
        </div>


        <div class="row">

            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Social media campaigns</h2>
                <p>Our comprehensive social media campaign management includes strategy, daily management, content creation and creative ads. Our innovative technology generates inbound traffic and increase conversion rates. We try our level best to implement all social efforts with multiple marketing mechanisms for the best results you want.</p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/smm/smm-4.png')}}" class="w_d_75" alt="Social media campaigns">
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <h2>Influencers marketing strategy </h2>
                <p>
                We collaborate with relevant influencers to promote work towards a mutually beneficial relationship. Influencers outreach across online fan communities on different social media platforms for promoting your business products and services that scales your brand. 
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/smm/smm-5.png')}}" class="w_d_75" alt="Influencers marketing strategy">
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Monthly content planner</h2>
                <p>Facilitating the companies with social media content calendar that provides an overview of your upcoming social media posts. We create and schedule your social media posts updates in advance. You can choose a specific date, time, and channel for those scheduled updates to be shared on without any hassle.</p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/smm/smm-6.png')}}" class="w_d_75" alt="Monthly content planner">
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 align-self-center">
                <h2>Social media marketing and advertising</h2>
                <p>
                Our well-reputed digital marketing agency acknowledge that paid SMM is vital for brands that want to reach a wider audience. If you don't address your audience directly through social platforms like Facebook, Twitter, Instagram and Linkedin, you will lose!. Our excellent social media marketing services can bring significant success to your business, generate loyal brand fans, and even increase sales and leads.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/smm/smm-7.png')}}" class="w_d_75" alt="Social media marketing and advertising">
            </div>

        </div>
        <div class="row">

            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Generate lead conversions</h2>
                <p>By creating, maintaining and strategizing social media campaigns, we can help you increasing your sales by informing your target group about your brand and your offers that's ultimately becomes a tool in generating leads and elevating revenues.  </p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/smm/smm-8.png')}}" class="w_d_75" alt="Generate lead conversions">
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
                <h2>Increase brand awareness and customers engagement</h2>
                <p>
                Our SMM team create and maintain brand engagement with your customers that  enables companies to continuously communicate with customers and increase brand loyalty. As Regular interaction creates a sense of trust that helps clients choose your brand from the competition and recommend it to others, which expands your reach.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/smm/smm-9.png')}}" class="w_d_75" alt="Increase brand awareness">
            </div>
        </div>
   

        <div class="row">
            <div class="col-md-6 align-self-center order-md-2 order-1 ">
                <h2>Generate website traffic and qualified leads</h2>
                <p>Social media networks are becoming a source of website traffic generation. People are more interested in social presence and with regular post your site turns the visitors into leads, and finally turning those leads into potential customers. </p>
            </div>
            <div class="col-md-6 text-center order-md-1 order-2">
                <img src="{{ asset('/img/smm/smm-10.png')}}" class="w_d_75" alt="Generate website traffic">
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 align-self-center">
                <h2> Optimize organic ranking </h2>
                <p>
                With our remarkable SMO solutions, your business will appear and rank on the top search of related products and services, which generates greater exposure to your brand. More you gain traffic on your site from social platforms, more the search engines recommend your website over competitors.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('/img/smm/smm-11.png')}}" class="w_d_75" alt="Optimize organic ranking">
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