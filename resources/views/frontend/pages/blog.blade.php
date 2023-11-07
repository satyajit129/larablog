@extends('frontend.master')

<style>
    /* .blog .pagination li.active{
    background: none !important;
  } */
    .blog .pagination li.active,
    .blog .pagination li:hover {
        background: none !important;
        color: black !important;
    }

    .page-link:hover {
        color: black !important;
    }
    img.img-style {
    height: 250px !important;
    width: 100% !important;
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

@section('blog-section')
    <!-- Blog Section - Blog Page -->
    <section id="blog" class="blog">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 posts-list">
                @foreach ($posts as $post)
                    <div class="col-xl-4 col-lg-6">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('storage/images/' . $post->thumb_image) }}" alt=""
                                    class="img-fluid img-style">
                            </div>

                            <p class="post-category">{{ $post->category->name }}</p>

                            <h2 class="title">
                                <a href="{{ route('blog-single',$post->id) }}">{{ $post->title }}</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <div class="post-meta">
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jan 1, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->
                @endforeach
            </div><!-- End blog posts list -->


            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>


        </div>

    </section><!-- End Blog Section -->

@endsection
