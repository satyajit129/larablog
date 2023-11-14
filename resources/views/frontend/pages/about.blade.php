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
@section('about-section')
    <!-- About Section - Home Page -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <div class="col-xl-5 content">
                    <h3>About Us</h3>
                    <h2>Ducimus rerum libero reprehenderit cumque</h2>
                    <p>Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime. Enim reiciendis
                        minus et rerum hic non. Dicta quas cum quia maiores iure. Quidem nulla qui assumenda incidunt
                        voluptatem tempora deleniti soluta.</p>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>

                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-buildings"></i>
                                <h3>Eius provident</h3>
                                <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-clipboard-pulse"></i>
                                <h3>Rerum aperiam</h3>
                                <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates quia</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-command"></i>
                                <h3>Veniam omnis</h3>
                                <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur
                                    corrupti</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h3>Delares sapiente</h3>
                                <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme
                                    lorenda</p>
                            </div>
                        </div> <!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </div>

    </section><!-- End About Section -->
@endsection
