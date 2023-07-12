@extends('layouts.master')

@section('meta_title', 'Website Cost Calculator | Web Design, Development & Digital Marketing Agency In UK')
@section('meta_description', 'The calculator is designed to give you an outline cost of your website. Now you can Calculate cost instantly or Call us at +44 (0)207 476 6464')



@section('canonical', "https://cynosuredesigns.co.uk/cost-calculator")

@section('bodyClass', 'contact_pg')


@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
{!! NoCaptcha::renderJs() !!}

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
            "name": "Cost Calculator",
            "item": "https://cynosuredesigns.co.uk/cost-calculator"
        }]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Website Cost Calculator | Web Design, Development & Digital Marketing Agency In UK",
        "description": "The calculator is designed to give you an outline cost of your website. Now you can Calculate cost instantly or Call us at +44 (0)207 476 6464",
        "publisher": {
            "@type": "ProfilePage",
            "name": "Cynosure Designs"
        }
    }
</script>
<style>

</style>


{!! NoCaptcha::renderJs() !!}
@append

@section('content')


<section class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 my-5 text-center">
                <h1 class="theme_color">Website Cost Calculator</h1>

            </div>
            <div class="col-md-11 text-center">
                <p>Welcome to the Cynosure Designs Website Calculator. The calculator is designed to give you an outline cost of your website. <span class="theme_color">Select your features below and we’ll give you an instant quote.</span> </p>
            </div>
        </div>
    </div>
</section>
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs__list mb-2 py-3">
                    <li class="breadcrumbs__item">
                        <a href="{{ route('home') }}" class="breadcrumbs__element">Home</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="javascript:;" class="breadcrumbs__element active">Website Calculator Cost</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="pt-0" id="cost_calculator_sec">

    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">

                <div class="cost_calculator_inner_box">
                    <form method="POST" action="{{ route('save-cost-calculator') }}" enctype="multipart/form-data">
                        @csrf
                        @honeypot

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="mt-3 mb-5">Get a <span class="theme_color">free instant quote</span> for your website.</h2>
                            </div>
                            <div class="col-md-8 py-3">

                                <div class="row">
                                    <div class="col-md-12 border-bottom mb-4">

                                        <p><strong>Included for free:</strong></p>
                                        <ul class="calculator_free_list">
                                            <li>
                                                <p>Responsive Design</p>
                                            </li>
                                            <li>
                                                <p>SSL Certificate</p>
                                            </li>
                                            <li>
                                                <p>Google Analytics</p>
                                            </li>
                                            <li>
                                                <p>Basic Onsite SEO</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="type_of_website">Type of Website</label>
                                        <select class="form-control form-select" name="type_of_website" id="type_of_website" required>
                                            <option price="0" value="">Please Choose</option>
                                            <option price="1000" value="personal">Personal</option>
                                            <option price="2000" value="business">Business/Corporate</option>
                                            <option price="1000" value="blogging">Blogging</option>
                                            <option price="7000" value="ecommerce">Ecommerce</option>
                                        </select>
                                    </div>






                                    <div class="form-group col-md-6">
                                        <label for="no_of_pages">No Of Pages</label>
                                        <select class="form-control form-select" name="no_of_pages" id="no_of_pages" required>
                                            
                                            <option price="0" value="10">1 - 10</option>
                                            <option price="300" value="20">10 - 20</option>
                                            <option price="700" value="50">20 - 50</option>
                                            <option price="1500" value="50">50 - 100</option>
                                            
                                        </select>
                                        <input type="hidden" name="per_page_cost" value="100" id="per_page_cost">
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <p class="theme_color"><strong>Basic Features</strong></p>
                                        <div class="form-check">
                                            <input class="form-check-input" name="live_chat" type="checkbox" value="50" id="live_chat">
                                            <label class="form-check-label" for="live_chat">
                                                Live Chat <span class="theme_tooltip" data-toggle="tooltip" data-placement="top" title="Instant communication with potential customers">ⓘ</span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" name="blog" type="checkbox" value="100" id="blog">
                                            <label class="form-check-label" for="blog">
                                                Blog <span class="theme_tooltip" data-toggle="tooltip" data-placement="top" title="An extra page of your site dedicated to latest news">ⓘ</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="gallery" type="checkbox" value="100" id="gallery">
                                            <label class="form-check-label" for="gallery">
                                                Gallery <span class="theme_tooltip" data-toggle="tooltip" data-placement="top" title="A page full of images">ⓘ</span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" name="portfolio" type="checkbox" value="200" id="portfolio">
                                            <label class="form-check-label" for="portfolio">
                                                Portfolio <span class="theme_tooltip" data-toggle="tooltip" data-placement="top" title="A showcase of your work">ⓘ</span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" name="want_us_to_provide_images" type="checkbox" value="200" id="want_us_to_provide_images">
                                            <label class="form-check-label" for="want_us_to_provide_images">
                                                Want Us To Provide Images?
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <p class="theme_color"><strong>Optional Extras</strong></p>
                                        <div class="form-check">
                                            <input class="form-check-input" name="domain_name" type="checkbox" value="20" id="domain_name">
                                            <label class="form-check-label" for="domain_name">
                                                Domain Name <span class="theme_tooltip" data-toggle="tooltip" data-placement="top" title="Price may vary">ⓘ</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="yearly_hosting" type="checkbox" value="150" id="yearly_hosting">
                                            <label class="form-check-label" for="yearly_hosting">
                                                Yearly Hosting <span class="theme_tooltip" data-toggle="tooltip" data-placement="top" title="We can host your site in house">ⓘ</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="speed_optimization" type="checkbox" value="200" id="speed_optimization">
                                            <label class="form-check-label" for="speed_optimization">
                                                Speed Optimization <span class="theme_tooltip" data-toggle="tooltip" data-placement="top" title="Making sure your site is optimised for the best possible user experience">ⓘ</span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" name="advanced_seo" type="checkbox" value="250" id="advanced_seo">
                                            <label class="form-check-label" for="advanced_seo">
                                                Advanced SEO <span class="theme_tooltip" data-toggle="tooltip" data-placement="top" title="In depth Search Engine Optimisation">ⓘ</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="want_us_to_provide_content" type="checkbox" value="70" id="want_us_to_provide_content">
                                            <label class="form-check-label" for="want_us_to_provide_content">
                                                Want Us To Provide Content?
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 py-3 form_submit_box">


                                <div class="row">
                                    <div class="form-group col-md-12 ">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control @error('email') border border-danger @enderror" name="email" id="email" required>
                                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <label for="start_date">When do you want to start?</label>
                                        <input type="date" class="form-control" name="start_date" id="start_date">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="extra_details">Do you have any other details you would like to add?</label>
                                        <textarea class="form-control" name="extra_details" id="extra_details" cols="3" rows="3"></textarea>
                                    </div>

                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <h2>Total <span id="total-placeholder" class="theme_color">0</span></h2>

                                        <input type="hidden" name="total" id="total">
                                        <div class="">
                                            {!! app('captcha')->display() !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <button type="submit" class="theme_btn dark_btn">Submit Calculated Quote</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>

@include('common.services-section')

@endsection

@section('footer_scripts')
<script>
    function calculateCost() {
        console.clear();
        let total = 0;

        // type_of_website
        var type_of_website = parseInt($("#type_of_website option:selected").attr("price"));
        console.log('type_of_website: ' + type_of_website);
        total += type_of_website;

        var no_of_pages = parseInt($("#no_of_pages option:selected").attr("price"));
        console.log('no_of_pages: ' + no_of_pages);
        $('#per_page_cost').val(no_of_pages);
        total += no_of_pages;

        //no_of_pages
        // var no_of_pages = parseInt($('#no_of_pages').val());
        // console.log('no_of_pages: ' + no_of_pages);
        // $('#pages_count').text(no_of_pages);
        // var per_page_cost = parseInt($('#per_page_cost').val());
        // total += no_of_pages * per_page_cost;

        // want_us_to_provide_content
        var want_us_to_provide_content = $('#want_us_to_provide_content').is(':checked') ? parseInt($('#want_us_to_provide_content').val()) : 0;
        console.log('want_us_to_provide_content: ' + want_us_to_provide_content);
        total += want_us_to_provide_content;

        // want_us_to_provide_images
        var want_us_to_provide_images = $('#want_us_to_provide_images').is(':checked') ? parseInt($('#want_us_to_provide_images').val()) : 0;
        console.log('want_us_to_provide_images: ' + want_us_to_provide_images);
        total += want_us_to_provide_images;

        //----------------Basic Features--------------------

        // livechat
        var live_chat = $('#live_chat').is(':checked') ? parseInt($('#live_chat').val()) : 0;
        console.log('live_chat: ' + live_chat);
        total += live_chat;

        // blog
        var blog = $('#blog').is(':checked') ? parseInt($('#blog').val()) : 0;
        console.log('blog: ' + blog);
        total += blog;

        // gallery
        var gallery = $('#gallery').is(':checked') ? parseInt($('#gallery').val()) : 0;
        console.log('gallery: ' + gallery);
        total += gallery;

        // social_media
        var social_media = $('#social_media').is(':checked') ? parseInt($('#social_media').val()) : 0;
        console.log('social_media: ' + social_media);
        total += social_media;


        // portfolio
        var portfolio = $('#portfolio').is(':checked') ? parseInt($('#portfolio').val()) : 0;
        console.log('portfolio: ' + portfolio);
        total += portfolio;

        //----------------Optional Extras--------------------

        // domain_name
        var domain_name = $('#domain_name').is(':checked') ? parseInt($('#domain_name').val()) : 0;
        console.log('domain_name: ' + domain_name);
        total += domain_name;


        // yearly_hosting
        var yearly_hosting = $('#yearly_hosting').is(':checked') ? parseInt($('#yearly_hosting').val()) : 0;
        console.log('yearly_hosting: ' + yearly_hosting);
        total += yearly_hosting;


        // speed_optimization
        var speed_optimization = $('#speed_optimization').is(':checked') ? parseInt($('#speed_optimization').val()) : 0;
        console.log('speed_optimization: ' + speed_optimization);
        total += speed_optimization;


        // advanced_seo
        var advanced_seo = $('#advanced_seo').is(':checked') ? parseInt($('#advanced_seo').val()) : 0;
        console.log('advanced_seo: ' + advanced_seo);
        total += advanced_seo;

        console.log('--------------');
        console.log('total: ' + total);
        $('#total-placeholder').text('£' + total);

        //save to hidden input
        $('#total').val(total);
    }

    $(document).on('change', 'input', function(e) {
        e.preventDefault();
        calculateCost();
    });



    $(document).ready(function(e) {
        calculateCost();
        $("#type_of_website,#no_of_pages").change(function() {
            calculateCost();
        });
    });
</script>
@endsection