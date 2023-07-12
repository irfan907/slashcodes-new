@extends('layouts.master')

@section('meta_title', 'Sitemap | Cynosure Designs')
@section('meta_description', 'Sitemap | Cynosure Designs')

@section('canonical', "https://cynosuredesigns.co.uk/sitemap")

@section('bodyClass', 'homepg')


@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
@append

@section('content')


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Sitemap</h1>
            </div>
        </div>    
    </div>    
</section>

<section class="sitemap_sec pt-0">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <a class="mouse_go" href="{{ route('home') }}">Home</a>
            </div>

            <div class="col-md-4">
                <a class="mouse_go" href="{{ route('about') }}">About Us</a>
            </div>
       
            <div class="col-md-4">
                <a class="mouse_go" href="{{ route('careers') }}">Careers</a>
            </div>
            <div class="col-md-4">
                <a class="mouse_go" href="{{ route('industries') }}">Industries</a>
            </div>
       

            <div class="col-md-12">
                <a class="mouse_go" href="{{ route('services') }}">Services</a>
                    <ul class="sitemap_level2">                        
                        <li><a class="mouse_go" href="{{ route('services_digital') }}">Digital Marketing</a></li>
                        <li><a class="mouse_go" href="{{ route('services_strategy') }}">Marketing Strategy</a></li>
                        <li><a class="mouse_go" href="{{ route('services_branding') }}">Branding</a></li>
                        <li><a class="mouse_go" href="{{ route('services_uiux') }}">UI/UX Designs</a></li>
                        <li><a class="mouse_go" href="{{ route('services_printing') }}">Printing & Packaging</a></li>
                        <li><a class="mouse_go" href="{{ route('services_web') }}">Web & CMS Development</a></li>
                        <li><a class="mouse_go" href="{{ route('services_magento') }}">Magento Development</a></li>
                        <li><a class="mouse_go" href="{{ route('services_software') }}">Software Development</a></li>
                        <li><a class="mouse_go" href="{{ route('services_seo') }}">Search Engine Optimization - SEO</a></li>
                        <li><a class="mouse_go" href="{{ route('services_smm') }}">Social Media Marketing - SMM</a></li>
                        <li><a class="mouse_go" href="{{ route('services_ppc') }}">Pay Per Click - PPC</a></li>
                    </ul>
            </div>
        
            <div class="col-md-12">
                <a class="mouse_go" href="{{ route('stories') }}">Web Stories</a>
                <ul class="sitemap_level2">
                    <li>
                        <a class="mouse_go" href="{{ route('stories.website-redesign-2022') }}">Website Redesign 2022</a>                                                                
                    </li>
                    <li>
                        <a class="mouse_go" href="{{ route('stories.what-metaverse-is') }}">What Metaverse Is?</a>                                                                
                    </li>
                    <li>
                        <a class="mouse_go" href="{{ route('stories.7-types-of-dm') }}">What Are The 7 Types Of Digital Marketing?</a>
                    </li>
                   
                </ul>
            </div>
            <div class="col-md-12">
                <a class="mouse_go" href="{{ route('casestudies') }}">Case Studies</a>
                <ul class="sitemap_level2">
                    <li>
                        <a class="mouse_go" href="{{ route('casestudies_vieu') }}">Vieu</a>                                                                
                    </li>
                    <li>
                        <a class="mouse_go" href="{{ route('casestudies_ratchet') }}">The Ratchet Shop</a>
                    </li>
                    <li>
                        <a class="mouse_go" href="{{ route('casestudies_scholars') }}">Scholars School System</a>
                    </li>
                    <li>
                        <a class="mouse_go" href="{{ route('casestudies_ozone') }}">Ozone Education</a>
                    </li>
                    <li>
                        <a class="mouse_go" href="{{ route('casestudies_synopsis_crm') }}">Synopsis CRM</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <a class="mouse_go" href="{{ route('projects') }}">Our Work</a>     
                <ul class="sitemap_level2">                                
                    @foreach ($projects as $project)
                    <li>
                        <a class="mouse_go" href="{{ route('projects_detail',$project->slug) }}">{{$project->title}}</a>                                                                
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12">
                <a class="mouse_go" href="{{ route('blog') }}">Blog</a>     
                <ul class="sitemap_level2 sitemap_two_column">                                
                    @foreach ($blogs as $blog)
                    <li>
                        <a class="mouse_go" href="{{ route('post-detail',$blog->slug) }}">{{$blog->title}}</a>                                                                
                    </li>
                    @endforeach
                </ul>
            </div>


            <div class="col-md-12">
                <a class="mouse_go" href="{{ route('contact') }}">Let's Talk</a>
                <p>Stay Connected with Cynosure Designs</p>
                <ul class="list-inline footer_links ">
                    <li class="list-inline-item "><a target="_blank " href="javascript:;"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item "><a target="_blank " href="https://www.facebook.com/cynosuredesignsuk/"><i class="fab fa-facebook-f " aria-hidden="true"></i></a></li>
                    <li class="list-inline-item "><a target="_blank " href="https://www.linkedin.com/company/cynosure-designs"><i class="fab fa-linkedin-in " aria-hidden="true"></i></a></li>
                    <li class="list-inline-item "><a target="_blank " href="https://www.instagram.com/cynosuredesignsuk/"><i class="fab fa-instagram " aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <a class="mouse_go" href="{{ route('privacy') }}">Privacy Policy</a>                        
            </div>
            <div class="col-md-4">
                <a class="mouse_go" href="{{ route('terms') }}">Terms & Conditions</a>                        
            </div>

        </div>
    </div>
</section>

@endsection