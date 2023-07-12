@extends('layouts.master')

@section('meta_title', 'Page Not Found | Cynosure Designs')
@section('meta_description', 'Page Not Found | Cynosure Designs')

@section('canonical', "https://cynosuredesigns.co.uk/page-not-found")

@section('bodyClass', 'homepg')


@section('script_css')
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
                       <img src="{{asset('/img/404.svg')}}" class="position-relative w-75 mx-auto" alt="">
                       <br>
                       <h1>Oops, Are your sure it existed!</h1>
                        <p>Sorry, Can’t find the page you were looking for.<br>
                        Please visit menu for accessible Links!</p>
                       <a href="{{ route('home') }}" class="theme_btn dark_btn">Home</a>
                       <a href="{{ route('sitemap') }}" class="theme_btn dark_btn">Sitemap</a>
                       </div>

                    </div>
                </div>
            </div>
        </section>
     

       


@endsection