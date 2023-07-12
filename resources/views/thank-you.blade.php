@extends('layouts.master')

@section('meta_title', 'Thank you | Cynosure Designs')
@section('meta_description', 'Thank you | Cynosure Designs')

@section('canonical', "https://cynosuredesigns.co.uk/thank-you")

@section('bodyClass', 'homepg')


@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<style>
.services_main_banner img{
    
    object-fit: unset;
    height: unset;
}
</style>
@append

@section('content')
<section class="inner_page_header  full_h_sec services_main_banner fit_content">
            <div class="full_h_inner">
                <div class="container">
                    <div class="row">

                       <div class="col-md-12 text-center pb-5">
                       <img src="{{asset('/img/thankyou.svg')}}" class="position-relative w-75 mx-auto" alt="">
                       <br>
                       <h1>Thank you for contacting Cynosure Designs!</h1>
                       
                       <p>We welcome your queries and will be happy to respond to your questions. <br> Our friendly and knowledgeable staff will contact you soon!</p>
                       <a href="{{ route('home') }}" class="theme_btn dark_btn">Home</a>
                       <a href="{{ route('sitemap') }}" class="theme_btn dark_btn">Sitemap</a>
                       </div>

                    </div>
                </div>
            </div>
        </section>
     

       


@endsection