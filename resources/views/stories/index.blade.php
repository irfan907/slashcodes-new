@extends('layouts.master')

@section('meta_title', 'Web Stories | Cynosure Designs')
@section('meta_description', 'View our latest web stories on trending topics about Technology, Digital Marketing and ui/ux Designs.')

@section('canonical', "https://cynosuredesigns.co.uk/webstories")

@section('bodyClass', '')


@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />

<style>
    .storeis_sec {
        background: #222;
    }

    .logo_bg .logo_inv {
        display: block !important;
    }

    .story_slider {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .index-module--PhoneCase--1_wzt {
        overflow: hidden;
        position: relative;
        z-index: 1;
        width: 250px;
        height: 468px;
        display: block;
        background-color: #222;
        margin: 20px;
        border-radius: 0 20px 20px 20px;
    }

    .index-module--PhoneCase__svg--h7NEQ {
        position: absolute;
        left: 0;
        width: 100%;
        z-index: 2;
    }

    .index-module--PhoneCase--1_wzt:hover .index-module--SVGBorder--T3t23 {
        stroke-dashoffset: 3752;
    }

    .index-module--SVGBorder--T3t23 {
        z-index: 2;
        transition: stroke-dashoffset .55s linear;
        fill: none;
        stroke-dashoffset: 2046;
        stroke-dasharray: 2046;
        stroke: #a00000;
        stroke-width: 7;
    }

    .index-module--SVGBorder__Gray--KSN-F {
        fill: none;
        stroke: #000;
        stroke-width: 7;
        stroke-dashoffset: 3752;
        stroke-dasharray: 2046;


    }

    .index-module--SVGBorder--T3t23,
    .index-module--SVGBorder__Gray--KSN-F {
        position: relative;
        z-index: 1;
    }

    .index-module--PhoneCase__svg--h7NEQ+.index-module--PhoneCase__svg--h7NEQ {
        z-index: 1;
    }

    .story_item {
        margin-bottom: 30px;
    }
    .story_item ,
    .story_item img{
        position: relative;
        border-radius: 20px;
    }

    .--ampS-sldsCnt {
        position: absolute;
        top: 12px;
        width: 100%;
        left: 0;
        z-index: 1;
    }

    .--ampS-sldsCntInsd {
        display: flex;
        justify-content: space-between;
        padding: 0px 4px;
    }

    .--ampS-sldsCnt span {
        background-color: #e8e8e8;
        display: block;
        height: 2px;
        width: 100%;
        margin-right: 3px;
    }
</style>
@append


@section('content')

<h2 class="theme_fixed_text">Web Stories</h2>
<section class=" storeis_sec pt_150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-5">
                <h1 class="text-white">Web Stories</h1>
            </div>

        
            <div class="col-md-3">
                <div class="story_item mouse_view">
                    <a href="{{route('stories.six-types-of-branding-services')}}" target="_blank">
                        <img src="{{ asset('stories/six-types-of-branding-services/thumbnail.webp' ) }}" class="w-100" alt="">
                        <div class="--ampS-sldsCnt">
                            <div class="--ampS-sldsCntInsd">
                            <span></span><span></span><span></span><span></span><span></span>
                                <span></span><span></span><span></span><span></span><span></span>
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="story_item mouse_view">
                    <a href="{{route('stories.ai-in-analytics')}}" target="_blank">
                        <img src="{{ asset('stories/ai-in-analytics/thumbnail.webp' ) }}" class="w-100" alt="">
                        <div class="--ampS-sldsCnt">
                            <div class="--ampS-sldsCntInsd">
                                <span></span><span></span><span></span><span></span>
                                <span></span><span></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="story_item mouse_view">
                    <a href="{{route('stories.website-redesign-2022')}}" target="_blank">
                        <img src="{{ asset('stories/website-redesign-2022/thumbnail.webp' ) }}" class="w-100" alt="">
                        <div class="--ampS-sldsCnt">
                            <div class="--ampS-sldsCntInsd">
                                <span></span><span></span><span></span><span></span>
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="story_item mouse_view">
                    <a href="{{route('stories.what-metaverse-is')}}" target="_blank">
                        <img src="{{ asset('stories/what-metaverse-is/thumbnail.webp' ) }}" class="w-100" alt="">
                        <div class="--ampS-sldsCnt">
                            <div class="--ampS-sldsCntInsd">
                                <span></span><span></span><span></span><span></span>
                                <span></span><span></span><span></span><span></span>                                
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="story_item mouse_view">
                    <a href="{{route('stories.7-types-of-dm')}}" target="_blank">
                        <img src="{{ asset('stories/7-types-of-dm/thumbnail.webp' ) }}" class="w-100" alt="">
                        <div class="--ampS-sldsCnt">
                        <div class="--ampS-sldsCntInsd">
                                <span></span><span></span><span></span><span></span>
                                <span></span><span></span><span></span><span></span>                                
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="col-md-12 d-none">
                <div class="story_slider">


                    <div class="index-module--PhoneCase--1_wzt">
                        <div class="index-module--PhoneCase__img--3zlhs">
                            <div class="index-module--PhoneCase__background--GMeJ3 gatsby-image-wrapper" style="position:relative;overflow:hidden">

                            </div>
                        </div>
                        <div class="index-module--PhoneCase__svg--h7NEQ"><svg viewBox="0 0 370 694">
                                <g transform="translate(8,8)" class="index-module--SVGBorder--T3t23">
                                    <path d="M291.26,-3.6 L-3.6,-3.6 L-3.6,645.23 C-3.6,655.27 0.47,664.36 7.04,670.95 C13.62,677.53 22.70,681.6 32.74,681.6 L321.26,681.6 C331.3,681.6 340.38,677.53 346.96,670.95 C353.53,664.36 357.6,655.27 357.6,645.23 L357.6,32.77 C357.6,22.73 353.53,13.64 346.96,7.05 C340.38,0.47 331.3,-3.6 321.26,-3.6 Z"></path>
                                </g>
                            </svg></div>
                        <div class="index-module--PhoneCase__svg--h7NEQ"><svg viewBox="0 0 370 694">
                                <g transform="translate(8,8)" class="index-module--SVGBorder__Gray--KSN-F">
                                    <path d="M291.26,-3.6 L-3.6,-3.6 L-3.6,645.23 C-3.6,655.27 0.47,664.36 7.04,670.95 C13.62,677.53 22.70,681.6 32.74,681.6 L321.26,681.6 C331.3,681.6 340.38,677.53 346.96,670.95 C353.53,664.36 357.6,655.27 357.6,645.23 L357.6,32.77 C357.6,22.73 353.53,13.64 346.96,7.05 C340.38,0.47 331.3,-3.6 321.26,-3.6 Z"></path>
                                </g>
                            </svg></div>
                        <div class="index-module--PhoneCase__wrapper--2jTQL">
                            <h3 class="title title--h3">Entreprises</h3>

                        </div>
                    </div>

                    <div class="index-module--PhoneCase--1_wzt">
                        <div class="index-module--PhoneCase__svg--h7NEQ">
                            <svg viewBox="0 0 370 694">
                                <g transform="translate(8,8)" class="index-module--SVGBorder--T3t23">
                                    <path d="M291.26,-3.6 L-3.6,-3.6 L-3.6,645.23 C-3.6,655.27 0.47,664.36 7.04,670.95 C13.62,677.53 22.70,681.6 32.74,681.6 L321.26,681.6 C331.3,681.6 340.38,677.53 346.96,670.95 C353.53,664.36 357.6,655.27 357.6,645.23 L357.6,32.77 C357.6,22.73 353.53,13.64 346.96,7.05 C340.38,0.47 331.3,-3.6 321.26,-3.6 Z"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="index-module--PhoneCase__svg--h7NEQ">
                            <svg viewBox="0 0 370 694">
                                <g transform="translate(8,8)" class="index-module--SVGBorder__Gray--KSN-F">
                                    <path d="M291.26,-3.6 L-3.6,-3.6 L-3.6,645.23 C-3.6,655.27 0.47,664.36 7.04,670.95 C13.62,677.53 22.70,681.6 32.74,681.6 L321.26,681.6 C331.3,681.6 340.38,677.53 346.96,670.95 C353.53,664.36 357.6,655.27 357.6,645.23 L357.6,32.77 C357.6,22.73 353.53,13.64 346.96,7.05 C340.38,0.47 331.3,-3.6 321.26,-3.6 Z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>

                    <div class="index-module--PhoneCase--1_wzt">
                        <div class="index-module--PhoneCase__svg--h7NEQ">
                            <svg viewBox="0 0 370 694">
                                <g transform="translate(8,8)" class="index-module--SVGBorder--T3t23">
                                    <path d="M291.26,-3.6 L-3.6,-3.6 L-3.6,645.23 C-3.6,655.27 0.47,664.36 7.04,670.95 C13.62,677.53 22.70,681.6 32.74,681.6 L321.26,681.6 C331.3,681.6 340.38,677.53 346.96,670.95 C353.53,664.36 357.6,655.27 357.6,645.23 L357.6,32.77 C357.6,22.73 353.53,13.64 346.96,7.05 C340.38,0.47 331.3,-3.6 321.26,-3.6 Z"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="index-module--PhoneCase__svg--h7NEQ">
                            <svg viewBox="0 0 370 694">
                                <g transform="translate(8,8)" class="index-module--SVGBorder__Gray--KSN-F">
                                    <path d="M291.26,-3.6 L-3.6,-3.6 L-3.6,645.23 C-3.6,655.27 0.47,664.36 7.04,670.95 C13.62,677.53 22.70,681.6 32.74,681.6 L321.26,681.6 C331.3,681.6 340.38,677.53 346.96,670.95 C353.53,664.36 357.6,655.27 357.6,645.23 L357.6,32.77 C357.6,22.73 353.53,13.64 346.96,7.05 C340.38,0.47 331.3,-3.6 321.26,-3.6 Z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>

                    <div class="index-module--PhoneCase--1_wzt">
                        <div class="index-module--PhoneCase__svg--h7NEQ">
                            <svg viewBox="0 0 370 694">
                                <g transform="translate(8,8)" class="index-module--SVGBorder--T3t23">
                                    <path d="M291.26,-3.6 L-3.6,-3.6 L-3.6,645.23 C-3.6,655.27 0.47,664.36 7.04,670.95 C13.62,677.53 22.70,681.6 32.74,681.6 L321.26,681.6 C331.3,681.6 340.38,677.53 346.96,670.95 C353.53,664.36 357.6,655.27 357.6,645.23 L357.6,32.77 C357.6,22.73 353.53,13.64 346.96,7.05 C340.38,0.47 331.3,-3.6 321.26,-3.6 Z"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="index-module--PhoneCase__svg--h7NEQ">
                            <svg viewBox="0 0 370 694">
                                <g transform="translate(8,8)" class="index-module--SVGBorder__Gray--KSN-F">
                                    <path d="M291.26,-3.6 L-3.6,-3.6 L-3.6,645.23 C-3.6,655.27 0.47,664.36 7.04,670.95 C13.62,677.53 22.70,681.6 32.74,681.6 L321.26,681.6 C331.3,681.6 340.38,677.53 346.96,670.95 C353.53,664.36 357.6,655.27 357.6,645.23 L357.6,32.77 C357.6,22.73 353.53,13.64 346.96,7.05 C340.38,0.47 331.3,-3.6 321.26,-3.6 Z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('common.services-section')

@include('common.dmservices')

@include('common.latest_blog')

@endsection