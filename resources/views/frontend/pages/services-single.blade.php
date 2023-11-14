@extends('frontend.master')

<style>
    .service-details .services-img {
        width: 90%;
        height: 300px;
        margin-bottom: 20px;
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


    <!-- Services Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Services Details</h1>
                        <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                            voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi
                            ratione sint. Sit quaerat ipsum dolorem.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Services Details</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Service-details Section - Services Details Page -->
    <section id="service-details" class="service-details">

        <div class="container">

            <div class="row align-items-center gy-5">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="service-box">
                        <h4>Serices List</h4>
                        <div class="services-list">
                            @foreach ($service as $services)
                                <a
                                    href="{{ route('service-single', $services->id) }}"></i><span>{{ $services->name }}</span></a>
                            @endforeach

                        </div>
                    </div><!-- End Services List -->


                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('storage/images/' . $posts->image) }}" alt="" class="img-fluid services-img">
                    <h3>{{ $posts->name }}</h3>
                    <p>
                        {{ $posts->description }}
                    </p>
                </div>

            </div>

        </div>

    </section><!-- End Service-details Section -->
