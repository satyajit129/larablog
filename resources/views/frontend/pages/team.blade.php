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
@section('team-section')
    <!-- Team Section - Home Page -->
    <section id="team" class="team">

        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga placeat tenetur vero doloribus accusantium blanditiis voluptate sint a cumque autem quo quia, dicta qui. Voluptate laudantium optio expedita ad quos?</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                @foreach ($teams as $team)
                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="{{ asset('storage/images/' . $team->picture) }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>{{ $team->name }}</h4>
                        <span>{{ $team->Position }}</span>
                        <p>{{ $team->about_member }}</p>
                    </div>
                </div><!-- End Team Member -->
                @endforeach
            </div>

        </div>

    </section><!-- End Team Section -->
@endsection
