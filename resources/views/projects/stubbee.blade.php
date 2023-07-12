@extends('layouts.master')

@section('meta_title', 'Stubbee | Digital Marketing Agency In UK | Cynosure Designs')
@section('meta_description', 'Discover how Stubbee made the most of our Web Development Solutions to establish a platform for UK and EU region.')

@section('canonical', "https://cynosuredesigns.co.uk/our-work/stubbee")

@section('bodyClass', 'homepg')


@section('script_css')

@append

@section('content')
<section  class="work_detail_banner_sec">
  <div class="container">
    <div class="row">
      <div class="col-md-3 align-self-center">
        <img src="{{ asset('/img/projects/stubbee/logo.png')}}" class="w-100" alt="Stubbee">                                        
      </div>
      <div class="col-md-9">
          <!-- <h1>Design & Website Development</h1> -->
          <img src="{{ asset('/img/projects/stubbee/stubbee.png')}}"  class="pl-3 w-100" alt="">
      </div>
    </div>
  </div>
</section>

<section class="work_detail_content_sec">
  <div class="container">
    <div class="row justify-content-center">   
    <div class="col-md-12">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a href="{{ route('home') }}" class="breadcrumbs__element">Home</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="{{ route('projects') }}" class="breadcrumbs__element">Our Work</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="javascript:;" class="breadcrumbs__element active">Stubbee</a>
                    </li>
                </ul>
            </div>   
      <div class="col-md-12">
          <h1>Website Design &  Development</h1>
          <p>Cynosure re-designed a responsive website of Stubbee. The objective was to create a modern outlook of the website with animations, strong visuals, cinemagraphs and new content. Moreover, the website’s layout was designed for a user-friendly experience, keeping in mind the global brand guidelines & consumer journey of the target audience.</p>
          <p>Our digital media agency also devised & implemented a viable SEO strategy for Stubbee considering the multiregional nature of the website. Paying keen attention to technical SEO, Cynosure enhanced their brand visibility, monthly traffic sessions & keyword rankings.</p>          
          <ul class="project_categories_list pt-2">
              <li>
                  <a href="/services/web-development">Web Development</a>
              </li>
              <li>
                  <a href="/services/branding">Branding</a>
              </li>
          </ul>
      </div>
      <div class="col-md-12 text-center">
      <a href="{{route('contact')}}" class="theme_btn inverse_btn">Lets plan your project</a>
      </div>
    </div>
  </div>
</section>


<section class="work_detail_gallery_sec pt-0">
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
          <img src="{{ asset('/img/projects/stubbee/p1.jpg')}}"  alt="">
          <img src="{{ asset('/img/projects/stubbee/p2.jpg')}}"  alt="">
          <img src="{{ asset('/img/projects/stubbee/p3.jpg')}}"  alt="">
          <img src="{{ asset('/img/projects/stubbee/preview.jpg')}}"  alt="">
      </div>
      <div class="col-md-12 text-center pt-5">
      <a href="{{ route('projects') }}" class="theme_arrow_link_left"><i class="fas fa-arrow-left color_red">&nbsp;</i> OUR WORK</a>
      </div>
      </div>
    </div>
</section>




@endsection