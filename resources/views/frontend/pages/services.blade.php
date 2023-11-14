@extends('frontend.master')

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

    <style>
        .service-item {
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            align-items: center;

        }

        .service-item .image {
            width: 100%;
            height: 100px;
        }

        .service_div {
            
            transition: 1s ease;
            
            padding: 10px;
            
        }

        .service_div:hover {
            /* Hover styles */
            background: rgba(128, 128, 128, 0.251);
            border-radius: 10px 10px;
        }
    </style>



@section('service-section')
    <!-- service Section - Home Page -->
    <section id="services" class="services">

        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($service as $services)
                    <div class="col-lg-6 service_div" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item">
                            <div class=""><img class="image" src="{{ asset('storage/images/' . $services->image) }}"
                                    alt=""></div>
                            <div>
                                <h4 class="title mt-4"><a href="{{ route('service-single',$services->id) }}"
                                        class="stretched-link">{{ $services->name }}</a></h4>
                                <p class="description">{{ $services->description }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->
                @endforeach


            </div>

        </div>

    </section><!-- End Services Section -->

@endsection
