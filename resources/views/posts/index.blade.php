@extends('layouts.master')


@section('script_css')

<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />


@append
@section('content')

@php
if ($actioncategory == 'news'){
    $mainURL= "/news";
    $tagURL= "/news/";
}elseif ($actioncategory == 'press-release'){
    $mainURL= "/press-release";
    $tagURL= "/press-release/";
}else{
    $mainURL= "/blog";
    $tagURL= "/blog/";
}

@endphp

@if($action=='tag')

@section('bodyClass', 'blogpg blog-tagpg')
@section('meta_title', $blog->{'meta_title'})
@section('meta_description', $blog->{'meta_description'} )
@section('canonical', "https://cynosuredesigns.co.uk/blog/tag/".$blog->{'slug'} )



@php
$blog_news = $blog['posts'];

if ($actioncategory == 'tag' || $actioncategory == '' ){
    $tagURL= "/blog/tag/";    
}
@endphp

<section class="blog-header border-0">
    <div class="blog-header-text">
        <h3>Cynosure Designs</h3>
        <h1>
            @if(isset($blog))
            {{ $blog->name }}
            @else
            Blog
            @endif
        </h1>

    </div>
</section>
<section class="category-listing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

              

                @if($mainURL== "/blog")
                <ul class="nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $mainURL }}">ALL ARTICLES</a>
                    </li>
                    @forelse($categories as $index => $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $tagURL }}{{ $category->slug }}">{{ $category->name }}</a>
                    </li>
                    @empty
                    @endforelse
                </ul>
                @endif
            </div>
        </div>
    </div>
</section>

@else


@section('bodyClass', 'blogpg blog-detailpg')
@section('meta_title', 'Cynosure Blog | Marketing, Branding, Technology & Design')
@section('meta_description', 'Stay on top of trends in media, technology, strategy, digital marketing, advertising, branding,
mobile, creative – everything you need to grow your business.')

@section('canonical', "https://cynosuredesigns.co.uk/blog" )



<section class="border-0">
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-sm-8 l-featured-box article-list">
                <article>
                    <div class="blog-box">
                        <a href="/blog/{{$featured->slug }}">
                            <img src="{{ asset('storage/'.$featured->{'image'} ) }}" class="blog_thumb" alt="{{ $featured->{'title'} }}">
                        </a>
                        <div class="blog-footer">
                            <div class="blog-text">


                                <a href="/blog/{{$featured->slug }}">
                                    <h2>{{ $featured->{'title'} }}</h2>
                                    <p>{{ $featured->{'excerpt'} }}</p>

                                    
                                </a>
                                
                                <ul class="list-inline social-icon-list">
                                    <li class="list-inline-item">
                                    <span class="blog_read">{{$featured->read_time}} Minute Read</span>
                                    </li>
                                    <li class="list-inline-item">
                                    <i class="fas fa-share-alt"></i>
                                    </li>
                                    
                                    <li class="list-inline-item i-fb">
                                        <a class="social-icon text-xs-center" target="_blank" rel="noopener"
                                            href="https://www.facebook.com/share.php?u=https://cynosuredesigns.co.uk/blog/{{ $featured->{'slug'} }}&amp;utm_medium=social&amp;utm_source=facebook">
                                            <i class="fab fa-facebook-f" style="line-height: 1.5;" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                    <li class="list-inline-item i-twitter">
                                        <a class="social-icon text-xs-center" target="_blank" rel="noopener"
                                            href="https://twitter.com/intent/tweet?original_referer=https://cynosuredesigns.co.uk/blog/{{ $featured->{'slug'} }}&utm_medium=social&utm_source=twitter&url=https://cynosuredesigns.co.uk/blog/{{ $featured->{'slug'} }}&utm_medium=social&utm_source=twitter&source=tweetbutton&text=">
                                            <i class="fa fa-twitter" style="line-height: 1.5;" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                    <li class="list-inline-item i-linkedin">
                                        <a class="social-icon text-xs-center" target="_blank" rel="noopener"
                                            href="http://www.linkedin.com/shareArticle?mini=true&url=https://cynosuredesigns.co.uk/blog/{{ $featured->{'slug'} }}&utm_medium=social&utm_source=linkedin">
                                            <i class="fab fa-linkedin-in" style="line-height: 1.5;" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item i-gplus">
                                        <a class="social-icon text-xs-center" style="background: none;" target="_blank"
                                            rel="noopener"
                                            href="mailto:?subject=Check%20out%20https://cynosuredesigns.co.uk/blog/{{ $featured->{'slug'} }}&utm_medium=social&utm_source=email%20&body=Check%20out%20https://cynosuredesigns.co.uk/blog/{{ $featured->{'slug'} }}&utm_medium=social&utm_source=email">
                                            <i class="fa fa-envelope" style="line-height: 1.5;" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-author">
                                <img src="{{ asset('storage/'.$featured->author['avatar'] ) }}" height="60px" width="60px" alt="{{ $featured->author['name'] }}">
                                <p>{{ $featured->author['name'] }}</p>
                                <p>{{ \Carbon\Carbon::parse($featured->created_at)->format('M j, Y.')}}</p>

                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-4 r-editor-box">
                <h1>Editor's Picks</h1>
                @forelse($editor as $edit)

                <article>
                    <a href="/blog/{{$edit->slug }}">
                        {{ $edit->title }}
                    </a>
                    <p><span class="blog_read">{{$edit->read_time}} Minute Read</span> <span class="text-dark">|</span> {{ $edit->author['name'] }}</p>
                </article>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</section>

@endif

<section id="blog_section_home">
    <div class="container">

        <div class="row article-list">

            @forelse($blog_news as $index => $post)

            <article>
                <div class="blog-box">
                    
                    <a href="{{ $mainURL }}/{{$post->slug }}">
                        <img src="{{ asset('storage/'.$post->{'image'} ) }}" class="blog_thumb" alt="{{ $post->{'title'} }}">
                    </a>
                    <div class="blog-footer">
                        <div class="blog-text">


                        <a href="/blog/{{$post->slug }}">
                                    <h2>{{ $post->{'title'} }}</h2>
                                    <p>{{ $post->{'excerpt'} }}</p>

                                    
                                </a>
                                
                                <ul class="list-inline social-icon-list">
                                    <li class="list-inline-item">
                                    <span class="blog_read">{{$post->read_time}} Minute Read</span>
                                    </li>
                                    <li class="list-inline-item">
                                    <i class="fas fa-share-alt"></i>
                                    </li>
                                    
                                    <li class="list-inline-item i-fb">
                                        <a class="social-icon text-xs-center" target="_blank" rel="noopener"
                                            href="https://www.facebook.com/share.php?u=https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&amp;utm_medium=social&amp;utm_source=facebook">
                                            <i class="fab fa-facebook-f" style="line-height: 1.5;" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                    <li class="list-inline-item i-twitter">
                                        <a class="social-icon text-xs-center" target="_blank" rel="noopener"
                                            href="https://twitter.com/intent/tweet?original_referer=https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&utm_medium=social&utm_source=twitter&url=https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&utm_medium=social&utm_source=twitter&source=tweetbutton&text=">
                                            <i class="fa fa-twitter" style="line-height: 1.5;" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                    <li class="list-inline-item i-linkedin">
                                        <a class="social-icon text-xs-center" target="_blank" rel="noopener"
                                            href="http://www.linkedin.com/shareArticle?mini=true&url=https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&utm_medium=social&utm_source=linkedin">
                                            <i class="fab fa-linkedin-in" style="line-height: 1.5;" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item i-gplus">
                                        <a class="social-icon text-xs-center" style="background: none;" target="_blank"
                                            rel="noopener"
                                            href="mailto:?subject=Check%20out%20https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&utm_medium=social&utm_source=email%20&body=Check%20out%20https://cynosuredesigns.co.uk/blog/{{ $post->{'slug'} }}&utm_medium=social&utm_source=email">
                                            <i class="fa fa-envelope" style="line-height: 1.5;" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                        </div>
                        <div class="blog-author">
                            <img src="{{ asset('storage/'.$post->author['avatar'] ) }}" height="60px" width="60px" alt="{{ $post->author['name'] }}">
                            <p>{{ $post->author['name'] }}</p>
                            <p>{{ \Carbon\Carbon::parse($post->created_at)->format('M j, Y.')}}</p>

                        </div>
                    </div>
                </div>
            </article>
            @empty
            <div class="col-md-12 text-center">
                <h1 class="not-found">Not found any post</h1>
            </div>
            @endforelse
        </div>
        @if($action == 'home')

        <div class="theme-paginations">{{ $blog_news->links() }}</div>



        @endif
      


    </div>
</section>

@endsection
