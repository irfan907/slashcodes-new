@extends('layouts.master')

@section('meta_title', 'Apply now for '. $job->title.' | Cynosure Designs')
@section('meta_description', 'Join Cynosure Designs Team as a '.$job->title.'. Our success starts with hiring the right people, in the right roles, at the right time to strategize, analyze, design, engineer, and market for world’s biggest brands.')



@section('canonical', "https://cynosuredesigns.co.uk/careers/".$job->slug)

@section('bodyClass', 'homepg')


@section('script_css')
<meta itemprop="image" content="{{ asset('storage/'.$job->image) }}">
<meta property="og:image" content="{{ asset('storage/'.$job->image) }}" />
<meta name="twitter:image" content="{{ asset('storage/'.$job->image) }}" />

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
        "name": "Careers",
        "item": "https://cynosuredesigns.co.uk/careers"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "{{$job->title}}"
      }]
    }
    </script>




{!! NoCaptcha::renderJs() !!}
<style>
    h1 {
        font-size: 48px;
    }
</style>
@append

@section('content')

<section class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 my-3 text-center">
                <h1 class="theme_color">{{$job->title}}</h1>

            </div>
            <div class="col-md-11 text-center">
                <p>Location: {{$job->location}} - No of Positions: {{$job->no_of_positions}}</p>
            </div>
        </div>
    </div>
</section>

<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a href="{{ route('home') }}" class="breadcrumbs__element">Home</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="{{ route('careers') }}" class="breadcrumbs__element">Careers</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="javascript:;" class="breadcrumbs__element active">{{$job->title}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="pt-3">

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-4 order-1 order-md-2">
                <div class="careers_right_box">

                    <h4 class="theme_color">ABOUT CYNOSURE DESIGNS</h4>
                    <p>Cynosure Designs is committed to discovering top talent and providing them with refined programs to nurture each experience. We enable an environment where team members feel comfortable bringing their full selves to work each day. </p>
                    <a href="#careers_form" class="theme_btn goto_sec mb-5">Apply Now</a>

                    <img src="{{ asset('storage/'.$job->image) }}" alt="{{$job->title}}" class="w-100 pb-5">

                    <h4 class="theme_color">SHARE</h4>

                    <ul class="list-inline py-3">
                        <li class="list-inline-item pr-3 i-fb">
                            <a class="" target="_blank" rel="noopener" href="https://www.facebook.com/share.php?u=https://cynosuredesigns.co.uk/careers/{{ $job->{'slug'} }}&amp;utm_medium=social&amp;utm_source=facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>

                        <li class="list-inline-item pr-3 i-twitter">
                            <a class="" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?original_referer=https://cynosuredesigns.co.uk/careers/{{ $job->{'slug'} }}&utm_medium=social&utm_source=twitter&url=https://cynosuredesigns.co.uk/careers/{{ $job->{'slug'} }}&utm_medium=social&utm_source=twitter&source=tweetbutton&text=">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item pr-3 i-linkedin">
                            <a class="" target="_blank" rel="noopener" href="http://www.linkedin.com/shareArticle?mini=true&url=https://cynosuredesigns.co.uk/careers/{{ $job->{'slug'} }}&utm_medium=social&utm_source=linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item pr-3 i-gplus">
                            <a class="" target="_blank" rel="noopener" href="mailto:?subject=Check%20out%20https://cynosuredesigns.co.uk/careers/{{ $job->{'slug'} }}&utm_medium=social&utm_source=email%20&body=Check%20out%20https://cynosuredesigns.co.uk/careers/{{ $job->{'slug'} }}&utm_medium=social&utm_source=email">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>



            </div>

            <div class="col-md-8  order-2 order-md-1">
                <h4 class="theme_color">POSITION OVERVIEW:</h4>
                <div class="richtext_editor pr-3">
                    {!! $job->description !!}
                </div>
            </div>

        </div>

    </div>
    </div>
</section>
<section class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 mt-4">
                @include('careers.careers_form',['job_title'=>$job->title])

                <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                                <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "20790765",
                                    formId: "cef2c976-7742-4426-a50b-1e1202da6128"
                                });
                                </script> -->
            </div>
        </div>
    </div>
</section>

@endsection