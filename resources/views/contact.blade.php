@extends('layouts.master')

@section('meta_title', 'Contact Cynosure | Web Design, Development & Digital Marketing Agency In UK')
@section('meta_description', 'Call us at +44 (0)207 476 6464 or visit our office: Suite F25, Expressway Studios 1 Dock Road London, E16 1AH.')



@section('canonical', "https://cynosuredesigns.co.uk/contact-us")

@section('bodyClass', 'contact_pg')


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
        "name": "Contact Us",
        "item": "https://cynosuredesigns.co.uk/contact-us"
      }]
    }
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Contact Cynosure | Web Design, Development & Digital Marketing Agency In UK",
            "description": "Call us at +44 (0)207 476 6464 or visit our office: Suite F25, Expressway Studios 1 Dock Road London, E16 1AH.",
            "publisher": {
                "@type": "ProfilePage",
                "name": "Cynosure Designs"
            }
        }

    </script>

{!! NoCaptcha::renderJs() !!}
@append

@section('content')

<section class="inner_page_header  full_h_sec services_main_banner fit_content">
            <img src="{{asset('/img/header-bg.jpg')}}" class="desktop_banner_img" alt="Contact Cynosure Designs">
            <img src="{{asset('/img/header-bg-mbl.jpg')}}" class="mobile_banner_img object_left" alt="Web Design, Development & Digital Marketing Agency In UK">
            <div class="full_h_inner">
                <div class="container">
                    <div class="row">

                        <div class="col-md-5 contact_info_details order-2 order-md-1">
                            <h1>Say Hello</h1>

                            <h3>Email</h3>
                            <p><a href="mailto:hello@cynosuredesigns.co.uk" class="mouse_go">hello@cynosuredesigns.co.uk</a></p>

                            <h3>Phone</h3>
                            <p><a href="tel:+442074766464">+44 (0)207 476 6464</a></p> 
                            <p><a href="tel:+971522494274">+971 52 249 4274</a></p>

                            <h3>Head Office</h3>
                            <p>Suite F25, Expressway Studios <br> 1 Dock Road London, E16 1AH</p>
                            
                            <h3>Branch Office</h3>
                            <p>L14, Boulevard Plaza Tower1, <br> Sheikh Mohammad Bin Rashid Boulevard, <br> Down Town Dubai, PO Box 334036</p>

                            <h3>Branch Office</h3>
                            <p>Suite 401, 4th Floor Al Hafeez Heights <br> 65 D-1 Gulberg III Lahore</p>

                            
                        </div>
                        <div class="col-md-7 align-self-center order-1 order-md-2">

                            <div class="contact_form">
                                <form method="POST" action="{{ route('contact-form') }}" enctype="multipart/form-data" id="contactForm">            
                                    @csrf
                                    @honeypot
                                    <h2 class="pb-3">Lets Grow Together</h2>
                                    <label for="name">Name</label>
                                    <input id="name" name="name" type="text" class="form-control" placeholder="Name" value="{{ old('name') != '' ? old('name'): '' }}" required="">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email address" value="{{ old('email') != '' ? old('email'): '' }}" required="">
                                    <label for="phone">Contact No.</label>
                                    <input id="phone" name="phone" type="tel" class="form-control" placeholder="Contact No." value="{{ old('phone') != '' ? old('phone'): '' }}" required="">
                                    <label for="message">Message</label>
                                    <textarea is="message" name="message" class="form-control" rows="4" placeholder="Message" >{{ old('message') != '' ? old('message'): '' }}</textarea>
                                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12 p-0">
                                {!! app('captcha')->display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                    <button type="submit" class="theme_btn dark_btn">Submit now</button>
                                </form>

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
                </div>
            </div>
        </section>


@include('common.services-section')

@endsection