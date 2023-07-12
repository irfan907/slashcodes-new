@extends('layouts.master')

@section('meta_title', $project['meta_title'])
@section('meta_description', $project['meta_description'])

@section('canonical', "https://cynosuredesigns.co.uk/our-work/".$project['slug'])

@section('bodyClass', 'homepg')


@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
@append

@section('content')

<section  class="work_detail_banner_sec inner_page_header">
  <div class="container">
    <div class="row">
      <div class="col-md-3 align-self-center">        
        <img src="{{ asset('storage/'.$project->logo) }}" class="w-100" alt="{{$project->title}}">                                        
      </div>
      <div class="col-md-9">          
          <img src="{{ asset('storage/'.$project->banner) }}"  class="pl-3 w-100" alt="{{$project->title}} by Cynosure Designs">
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
                        <a href="javascript:;" class="breadcrumbs__element active">{{$project->title}}</a>
                    </li>
                </ul>
            </div>   
      <div class="col-md-12">
      {!! $project->description !!}
          
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
        @foreach($work_image as $img)      
          <img src="{{ asset('storage/projects/'.$project->slug.'/'.$img) }}"  alt="">     
        @endforeach   
      </div>
      </div>

      <div class="row mt-5 work_footer_btns">
          <div class="col-md-4 ">
          @if($previous)
          <div class="project_actions prev_btn">
          <a href="{{ route('projects_detail',$previous->slug) }}" class="theme_action_btn  mouse_go"><i class="fas fa-arrow-left color_red"></i>{{$previous->title}}</a>
          
          
          </div>
          
          @endif
          </div>
          
          <div class="col-md-4 text-center">
          <a href="{{ route('projects') }}" class="theme_btn red_btn">View All</a>
          </div>

          <div class="col-md-4 text-right">

          @if($next)
          <div class="project_actions next_btn">
          <a href="{{ route('projects_detail',$next->slug) }}" class="theme_action_btn  mouse_go">{{$next->title}}<i class="fas fa-arrow-right color_red"></i> </a>
          
                                                                                    
          </div>
          @endif
          </div>

      </div>
    </div>
</section>

@include('common.services-section')
@include('common.dmservices')
@include('common.industries')

@endsection