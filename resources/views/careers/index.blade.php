@extends('layouts.master')

@section('meta_title', "Create something new with London's top digital media agency")
@section('meta_description', "Explore a valuable career with UK’s best design and marketing agency to work with a diverse group of innovators to solve the most challenging problems.")

@section('canonical', "https://cynosuredesigns.co.uk/careers")

@section('bodyClass', 'homepg')


@section('script_css')


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
      }]
    }
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Create something new with London's top digital media agency",
            "description": "Explore a valuable career with UK’s best design and marketing agency to work with a diverse group of innovators to solve the most challenging problems.",
            "publisher": {
                "@type": "ProfilePage",
                "name": "Cynosure Designs"
            }
        }

    </script>


<meta itemprop="image" content="{{ asset('/img/careers-cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/careers-cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/careers-cynosuredesigns.jpg') }}" />
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
            <div class="col-md-12 my-5 text-center">
                <h1 class="theme_color">CAREERS</h1>

            </div>
            <div class="col-md-11 text-center">
                <p>Cynosure Designs is a group of people who believe in the power of technology to make the world a bigger, better place. We want energetic innovators who are not afraid to live their ideas, expand their knowledge, and share their expertise.</p>
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
                        <a href="javascript:;" class="breadcrumbs__element active">Careers</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="pt-3">

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center">
                <h2>Current Openings</h2>

            </div>
            <div class="col-md-11 text-center">
                <p>Interested in a career at one of the most innovative and fastest-growing customer Design agency on the planet? <br> Take a look at our job openings and apply now.</p>
            </div>

        </div>


        @forelse($jobs as $job)
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('career-detail',$job->slug)}}" class="mouse_go">
                    <div class="careers_job_box">

                        <div class="c_job_img">
                            <img src="{{ asset('storage/'.$job->image) }}" alt="{{$job->title}}" style="width:80px">
                        </div>
                        <div class="c_job_title">
                            <h2>{{$job->title}}</h2>
                            <p><span>Apply Now &nbsp; <i class="theme_color fas fa-external-link-alt"></i></span></p>
                        </div>
                        <div class="c_job_location">
                            <p>Location</p>
                            <h3>{{$job->location}}</h3>
                        </div>
                        <div class="c_job_positions">
                            <p>Positions</p>
                            <h3>{{$job->no_of_positions}}</h3>
                        </div>
                        <div class="c_job_lastdate">
                            <p>Last Date to apply</p>

                            <h3>{{ \Carbon\Carbon::parse($job->closing_date)->format('j F Y')}}</h3>
                        </div>

                    </div>
                </a>
            </div>
        </div>
        @empty
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="">Currently, There is no opening you can drop your CV by <a href="#jointeam_sec" class="goto_sec theme_color">filling form</a></p>
            </div>
        </div>
        @endforelse


    </div>

</section>
<section class="careers_info_boxes_sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="careers_info_boxes">
                    <img src="{{ asset('img/icons/life-at-cynosure-designs.png') }}" alt="">
                    <h3>Life at <br><span class="theme_color">Cynosure Designs</span></h3>
                    <p>More than perks and benefits, learn about Cynosure Designs culture and our hybrid working model.</p>
                    <!-- <a href="javascript:;" class="theme_arrow_link">Learn More &nbsp;<i class="fas fa-arrow-right color_red" aria-hidden="true"></i></a> -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="careers_info_boxes">
                    <img src="{{ asset('img/icons/client-stories.png') }}" alt="">
                    <h3>Client <br><span class="theme_color">Success Stories</span></h3>
                    <p>Explore some of the meaningful projects we've completed for exciting brands and long-time clients.</p>
                    <!-- <a href="javascript:;" class="theme_arrow_link">Learn More &nbsp;<i class="fas fa-arrow-right color_red" aria-hidden="true"></i></a> -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="careers_info_boxes">
                    <img src="{{ asset('img/icons/stay-connected.png') }}" alt="">
                    <h3>Stay <br><span class="theme_color">Connected</span></h3>
                    <p>Sign up to receive career updates like new open positions, career tips, and news directly to your inbox.</p>
                    <!-- <a href="javascript:;" class="theme_arrow_link">Learn More &nbsp;<i class="fas fa-arrow-right color_red" aria-hidden="true"></i></a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light" id="jointeam_sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h2>Join <span class="theme_color">Cynosure Designs</span> Team</h2>
            </div>
            <div class="col-md-9 mt-4">
                @include('careers.careers_form',['job_title'=>'general'])
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