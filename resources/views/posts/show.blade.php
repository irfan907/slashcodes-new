@extends('layouts.master')

@section('meta_title', $post->{'meta_title'})
@section('meta_description', $post->{'meta_description'})
@section('canonical', "https://cynosuredesigns.co.uk/blog/".$post->{'slug'} )


@section('bodyClass', 'blogpg blog-detailpg')

@section('script_css')

<meta itemprop="image" content="{{ asset('storage/'.$post->{'image'} ) }}">
<meta property="og:image" content="{{ asset('storage/'.$post->{'image'} ) }}" />
<meta name="twitter:image" content="{{ asset('storage/'.$post->{'image'} ) }}" />

<style>
.blog_content_area a:hover{
    text-decoration: underline;
}

.blog_content_area strong{
    color: #222;
}
.blog_content_area a{
    
    color: #a00000;
}
.blog_content_area h3{
    color: #222;
    font-size: 20px;
}
.blog_content_area .table_of_contents_box{
    background: #ededed;
    padding: 20px;
    margin-top: 30px;
    margin-bottom: 30px;
}
.blog_content_area h3.theme_color{
    color: #a00000 !important;
}

</style>
@append

@section('content')
<section class="blog-detail-sec">
    <div class="container">
        <div class="row row-eq-height mb-20">
            <div class="col-sm-5 align-self-center mb-30">
                <h1 class="post-title">{{ $post->{'title'} }}</h1>
                <div class="socialshare">
                    <ul class="social-share-icon-list">
                        <li class=" i-fb">
                            <a class="" target="_blank" rel="noopener" href="https://www.facebook.com/share.php?u=https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&amp;utm_medium=social&amp;utm_source=facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>

                        <li class="i-twitter">
                            <a class="" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?original_referer=https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&utm_medium=social&utm_source=twitter&url=https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&utm_medium=social&utm_source=twitter&source=tweetbutton&text=">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="i-linkedin">
                            <a class="" target="_blank" rel="noopener" href="http://www.linkedin.com/shareArticle?mini=true&url=https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&utm_medium=social&utm_source=linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="i-gplus">
                            <a class="" target="_blank" rel="noopener" href="mailto:?subject=Check%20out%20https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&utm_medium=social&utm_source=email%20&body=Check%20out%20https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&utm_medium=social&utm_source=email">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="media">
                    <span class="pull-left mr-3">
                        <img src="{{ asset('storage/'.$post->author['avatar'] ) }}" width="60px" alt="{{ $post->author['name'] }}">
                    </span>
                    <div class="media-body align-self-center">
                        <p class="m-0">Written by <span class="theme-color">{{ $post->author['name'] }}</span></p>
                        <p class="m-0"><span class="blog_read">{{$post->read_time}} Minute Read</span></p>
                    </div>
                </div>

            </div>
            <div class="col-sm-7 align-self-center mb-30">
                <img src="{{ asset('storage/'.$post->{'image'} ) }}" width="100%" alt="{{ $post->{'title'} }}">
            </div>

        </div>
        <div class="row justify-content-center position-relative">
            <div class="col-md-12 my-4">
                <ul class="breadcrumbs__list my-3">
                    <li class="breadcrumbs__item">
                        <a href="{{ route('home') }}" class="breadcrumbs__element">Home</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="{{ route('blog') }}" class="breadcrumbs__element">Blog</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="javascript:;" class="breadcrumbs__element active">{{ $post->{'title'} }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 blog_content_area">
                {!! $post->{'body'} !!}
                <div class="published_date">
                    <br>
                    <br>
                    <p> Originally Published {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y h:i A')}},
                        Updated
                        {{ \Carbon\Carbon::parse($post->updated_at)->format('F j, Y.')}}</p>
                    <br>
                    <br>
                </div>

           
            </div>
        </div>
    </div>
    </div>
</section>
@include('common.latest_blog')
@endsection
