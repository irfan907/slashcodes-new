@extends('layouts.master')

@section('meta_title', 'Our Brand Design Work | Cynosure Designs')
@section('meta_description', 'Our brand design work includes solutions for brand transformation, customer experience, and more. See what we have done for our amazing clients!')

@section('canonical', "https://cynosuredesigns.co.uk/our-work")

@section('bodyClass', 'homepg')


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
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Our Work",
        "item": "https://cynosuredesigns.co.uk/our-work"
      }]
    }
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Our Brand Design Work | Cynosure Designs",
            "description": "Our brand design work includes solutions for brand transformation, customer experience, and more. See what we have done for our amazing clients!",
            "publisher": {
                "@type": "ProfilePage",
                "name": "Cynosure Designs"
            }
        }

    </script>

@append

@section('content')

        <section class="work__list">
            <div class="container mx-container-1600">
                <div class="row pb-5 ">
                    <div class="col-md-12 ">
                        <h1 class="theme_h2 separator_bar ">OUR Work</h1>
                    </div>
                </div>

              
                    @include('common.our-work')               
            
            </div>
        </section>


@include('common.services-section')
@include('common.dmservices')
@include('common.industries')

@endsection