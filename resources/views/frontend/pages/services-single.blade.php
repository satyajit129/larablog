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

    <!-- Services Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
        <div class="heading">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>Services Details</h1>
                <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
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
  
          <div class="row gy-5">
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
  
              <div class="service-box">
                <h4>Serices List</h4>
                <div class="services-list">
                  <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Web Design</span></a>
                  <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Web Design</span></a>
                  <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Product Management</span></a>
                  <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Graphic Design</span></a>
                  <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Marketing</span></a>
                </div>
              </div><!-- End Services List -->
  
              <div class="service-box">
                <h4>Download Catalog</h4>
                <div class="download-catalog">
                  <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                  <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                </div>
              </div><!-- End Services List -->
  
              <div class="help-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-headset help-icon"></i>
                <h4>Have a Question?</h4>
                <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
                <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@example.com</a></span></p>
              </div>
  
            </div>
  
            <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('Frontend/assets/img/services.jpg') }}" alt="" class="img-fluid services-img">
              <h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas</h3>
              <p>
                Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
              </ul>
              <p>
                Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
              </p>
              <p>
                Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
              </p>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End Service-details Section -->