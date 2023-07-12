<div class="blogpg">
<section id="latest-blogs">
    <div class="container">
        
        <div class="row pb-5 ">
            <div class="col-md-12 ">
                <h2 class="theme_h2 separator_bar ">Our Latest Blogs</h2>
            </div>
        </div>
        <div class="row article-list mt-50">

            @forelse($global_latest_blogs as $index => $post)

            <article>
                <div class="blog-box">
                    <a href="/blog/{{$post->slug }}" class="mouse_go">
                        <img src="{{ asset('storage/'.$post->{'image'} ) }}" class="blog_thumb" alt="{{ $post->{'title'} }}">
                    </a>
                    <div class="blog-footer">
                        <div class="blog-text">


                            <a href="/blog/{{$post->slug }}" class="mouse_go">
                                <h2>{{ $post->{'title'} }}</h2>
                                <p>{{ $post->{'excerpt'} }}</p>
                            </a>
                            <ul class="list-inline social-icon-list">
                                    <li class="list-inline-item d-block w-100 mb-2">
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
                            <img src="{{ asset('storage/'.$post->author['avatar'] ) }}"  height="60px" width="60px" alt="{{ $post->author['name'] }}">
                            <p>{{ $post->author['name'] }}</p>
                            <p>{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y.')}}</p>

                        </div>
                    </div>
                </div>
            </article>
            
                   
                

            @empty
            <div class="col-md-12 text-center">
                <h1 class="not-found">Not found any post</h1>
            </div>
            @endforelse
            <div class="col-md-12 pt-5 text-center order-3">
                <a href="{{ route('blog') }}" class="theme_arrow_link">VIEW All &nbsp;<i class="fas fa-arrow-right color_red"></i></a>
            </div>
        </div>
    </div>
</section>
</div>