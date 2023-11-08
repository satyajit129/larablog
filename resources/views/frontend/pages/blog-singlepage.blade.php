@extends('frontend.master')
<style>
  img.img-style {
    height: 450px !important;
    width: 100% !important;
    }
    .blog-details .sidebar .recent-posts img {
    width: 80px !important;
    height: 61px !important;
    margin-right: 15px !important;
}
</style>


@section('hero-section')
    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

        <img src="{{ asset('Frontend/assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Our Website</h2>
                    <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites
                        with Bootstrap</p>
                </div>
            </div>
        </div>

    </section><!-- End Hero Section -->

@section('blog-single')

    <!-- Blog Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
        <div class="heading">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>Blog Details</h1>
                <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
              </div>
            </div>
          </div>
        </div>
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Blog Details</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->
    <!-- Blog-details Section - Blog Details Page -->
    <section id="blog-details" class="blog-details">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row g-5">
  
            <div class="col-lg-8">
  
              <article class="article">
  
                <div class="post-img">
                  <img src="{{ asset('storage/images/' . $posts->banner_image) }}" alt="" class="img-fluid img-style">
                </div>
  
                <h2 class="title">{{ $posts->title }}</h2>
  
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{ $posts->created_at }}</time></a></li>
                   
                  </ul>
                </div><!-- End meta top -->
  
                <div class="content">
                  <p>
                    {{ $posts->description }}
                  </p>
  
                  <p>
                    {{ $posts->description }}
                  </p>
  
                  <blockquote>
                    <p>
                      {{ $posts->description }}
                    </p>
                  </blockquote>
  
                  <p>
                    {{ $posts->description }}
                  </p>
  
                  <h3>Et quae iure vel ut odit alias.</h3>
                  <p>
                    {{ $posts->description }}
                  </p>
                  <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">
  
                  <h3>
                    {{ $posts->description }}
                  </h3>
                  <p>
                    {{ $posts->description }}
                  </p>
                  <p>
                    Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                  </p>
  
                </div><!-- End post content -->
  
                <div class="meta-bottom">
                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li><a href="#">{{ $posts->category->name }}</a></li>
                  </ul>
  
                  
                  @foreach ($tags as $tag)
                  <ul class="tags">
                    <li><i class="bi bi-tags"></i><a href="#">  {{ $tag->name }}</a></li>
                  </ul>
                  @endforeach
                  
                </div><!-- End meta bottom -->
  
              </article><!-- End post article --> 
            </div>
  
            <div class="col-lg-4">
  
              <div class="sidebar">
  
                <div class="sidebar-item search-form">
                  <h3 class="sidebar-title">Search</h3>
                  <form action="" class="mt-3">
                    <input type="text">
                    <button type="submit"><i class="bi bi-search"></i></button>
                  </form>
                </div><!-- End sidebar search formn-->
  
                <div class="sidebar-item categories">
                  <h3 class="sidebar-title">Categories</h3>

                  @foreach ($categories as $category)
                  <ul class="mt-3">
                    <li><a href="#">{{ $category->name }} <span>25</span></a></li>

                  </ul>
                  @endforeach
                </div><!-- End sidebar categories-->
  
                <div class="sidebar-item recent-posts">
                  <h3 class="sidebar-title">Recent Posts</h3>
                  @foreach ($recentPosts as $recentPost)
                  <a href="{{ route('blog-single',$recentPost->id) }}">
                  <div class="post-item">
                    
                    <img src="{{ asset('storage/images/' . $recentPost->thumb_image) }}" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-details.html">{{ $recentPost->title }}</a></h4>
                      <time datetime="2020-01-01">{{ $recentPost->created_at }}</time>
                    </div>
                  </div><!-- End recent post item-->
                  </a>
                  @endforeach
                  
  
                  {{-- <div class="post-item">
                    <img src="{{ asset('Frontend/assets/img/blog/blog-recent-2.jpg') }}" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->
  
                  <div class="post-item">
                    <img src="{{ asset('Frontend/assets/img/blog/blog-recent-3.jpg') }}" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->
  
                  <div class="post-item">
                    <img src="{{ asset('Frontend/assets/img/blog/blog-recent-4.jpg') }}" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->
  
                  <div class="post-item">
                    <img src="{{ asset('Frontend/assets/img/blog/blog-recent-5.jpg') }}" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item--> --}}
  
                </div><!-- End sidebar recent posts-->
  
                <div class="sidebar-item tags">
                  <h3 class="sidebar-title">Tags</h3>
                  @foreach ($alltags as $taglist)                 
                  <ul class="mt-3">
                    <li><a href="#">{{ $taglist->name }}</a></li>
                    
                  </ul>
                  @endforeach
                </div><!-- End sidebar tags-->
  
              </div><!-- End Sidebar -->
  
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End Blog-details Section -->