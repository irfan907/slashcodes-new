@extends('layouts.master')

@section('meta_title', 'Digital Innovation Client Case Studies & Featured Projects')
@section('meta_description', 'View case studies and client stories from Cynosure Designs. Discover how our team strategically partners and collaborates with leading brands to continuously innovate digital experiences.')


@section('canonical', "https://cynosuredesigns.co.uk/casestudies")

@section('bodyClass', 'pg_casestudy_list')


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
        "name": "Case Studies",
        "item": "https://cynosuredesigns.co.uk/casestudies"
      }]
    }
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Digital Innovation Client Case Studies & Featured Projects",
            "description": "View case studies and client stories from Cynosure Designs. Discover how our team strategically partners and collaborates with leading brands to continuously innovate digital experiences.",
            "publisher": {
                "@type": "ProfilePage",
                "name": "Cynosure Designs"
            }
        }

    </script>
@append

@section('content')
<h1 class="theme_fixed_text">CASE STUDIES</h1>
        <section class="inner_page_header casestudy_panels" data-color="default">

            <div class="container ">
                <div class="row ">
                    <div class="col-12 pb-5 ">
                        <h2 class="theme_h2 separator_bar ">Featured Clients</h2>
                    </div>
                </div>

                <div class="row row-eq-height  ">
                    <div class="col-md-12">

                        <ul class="casestudies_logos overflow-hidden">
                            <li>
                                <a href="#cs_vieu" class="goto_sec mouse_go"><img src="{{ asset('/img/projects/vieu/casestudy-logo.jpg')}} " alt="Vieu"></a>
                            </li>
                            <li>
                                <a href="#cs_ratchet" class="goto_sec mouse_go"><img src="{{ asset('/img/logos/ratchet_logo.png')}} " alt="The Ratchet Shop"></a>
                            </li>
                            <li>
                                <a href="#cs_scholars" class="goto_sec mouse_go"><img src="{{ asset('/img/casestudies/scholars/casestudy-logo.jpg')}} " alt="Scholars"></a>
                            </li>


                            <li>
                                <a href="#cs_ozone" class="goto_sec"><img src="{{ asset('/img/logos/ozone.jpg')}} " alt="Ozone Education"></a>
                            </li>

                            <li>
                                <a href="#cs_crm" class="goto_sec"><img src="{{ asset('/img/logos/crm.jpg')}} " alt="Synopsis CRM"></a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
        </section>
        <section id="cs_vieu" class="casestudy_panels" data-color="light_blue">

            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="2s " data-wow-delay="1s">
                    <div class="col-md-4 align-self-center">
                        <h2 class="color_darkblue">Vieu</h2>
                        <p>VIEU is the face detection software along with synchronization service that is sustainable in digital transformation in current era, empowering every person of every organization with encrypted and secured data.</p>
                        <a href="{{ route('casestudies_vieu') }}" class="theme_arrow_link">OPEN CASE STUDY &nbsp;<i class="fas fa-arrow-right color_darkblue"></i>
                       </a>
                    </div>
                    <div class="col-md-8">
                    <a href="{{ route('casestudies_vieu') }}" class="mouse_view"><img src="{{ asset('/img/casestudies/vieu.jpg')}}" class="desktop_img w-100" alt="Vieu Casestudy"></a>
                    </div>
                </div>

            </div>
        </section>
        <section id="cs_ratchet" class="casestudy_panels" data-color="light_peach">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="2s " data-wow-delay="1s">
                    <div class="col-md-4 align-self-center order-md-2 order-1 ">
                        <h2 class="ratchet_color">The Ratchet Shop</h2>
                        <p>Fostered the E-commerce site business with upgraded and effective techniques that raised up the sales leads.</p>
                        <a href="{{ route('casestudies_ratchet') }}" class="theme_arrow_link">OPEN CASE STUDY &nbsp;<i class="fas fa-arrow-right ratchet_color"></i>
                    </a>
                    </div>
                    <div class="col-md-8 order-md-1 order-2">
                    <a href="{{ route('casestudies_ratchet') }}"  class="mouse_view"><img src="{{ asset('/img/casestudies/ratchetshop.jpg')}}" class="desktop_img w-100" alt="The Ratchet Shop Casestudy"></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="cs_scholars" class="casestudy_panels" data-color="light_red">

            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="2s " data-wow-delay="1s">
                    <div class="col-md-4 align-self-center">
                        <h2 class="color_red">Scholars School System</h2>
                        <p>How Cynosure Designs used resourceful hi-tech methods to make Scholars a leading institute in all aspects internationally. </p>
                        <a href="{{ route('casestudies_scholars') }}" class="theme_arrow_link">OPEN CASE STUDY &nbsp;<i class="fas fa-arrow-right color_red"></i>
                       </a>
                    </div>
                    <div class="col-md-8">
                    <a href="{{ route('casestudies_scholars') }}"  class="mouse_view"><img src="{{ asset('/img/casestudies/scholars/thumbnail.png')}}" class="desktop_img w-100" alt="Stubbee CaseStudy"></a>
                    </div>
                </div>

            </div>
        </section>

        <section id="cs_ozone" class="casestudy_panels" data-color="light_blue">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="2s " data-wow-delay="1s">
                    <div class="col-md-4 align-self-center order-md-2 order-1 ">
                        <h2 class="color_darkblue">Ozone Education</h2>
                        <p>Empowered the functional systems and procedures for Ozone Educational institute with new and unique transformational digital strategies.</p>
                        <a href="{{ route('casestudies_ozone') }}" class="theme_arrow_link">OPEN CASE STUDY &nbsp;<i class="fas fa-arrow-right color_darkblue"></i>
                    </a>
                    </div>
                    <div class="col-md-8 order-md-1 order-2">
                    <a href="{{ route('casestudies_ozone') }}"  class="mouse_view"><img src="{{ asset('/img/casestudies/ozone.jpg')}}" class="desktop_img w-100" alt="The Ratchet Shop Casestudy"></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="cs_crm" class="casestudy_panels" data-color="theme">

            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="2s " data-wow-delay="1s">
                    <div class="col-md-4 align-self-center">
                        <h2 class="color_dark">Synopsis CRM</h2>
                        <p>How Cynosure Designs develop CRM for a leading institute to access an online VLE for students and teachers.</p>
                        <a href="{{ route('casestudies_synopsis_crm') }}" class="theme_arrow_link">OPEN CASE STUDY &nbsp;<i class="fas fa-arrow-right color_dark"></i>
                       </a>
                    </div>
                    <div class="col-md-8">
                    <a href="{{ route('casestudies_synopsis_crm') }}"  class="mouse_view"><img src="{{ asset('/img/casestudies/crm.jpg')}}" class="desktop_img w-100" alt="Stubbee CaseStudy"></a>
                    </div>
                </div>

            </div>
        </section>
  



@section('footer_scripts')
<script>

$(function() {
$('.casestudies_logos').slick({
                mobileFirst: !0,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToScroll: 1,
                slidesToShow: 2,
                dots: false,
                arrows: false,
                centerMode: false,

                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5,
                    }

                }, {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                    }
                }]
            });
        });
            </script>
@append
@endsection