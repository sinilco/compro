@section('breadcrumbs')
    

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('theme/img/mesin.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2 class="animatedleft">Services</h2>
    <!-- <ol>
      <li><a href="{{url('/')}}">Home</a></li>
      <li>Services</li>
    </ol> -->

  </div>
</div>
<!-- End Breadcrumbs -->
@endsection

@section('services')
<link href="{{asset('theme/vendor/aos/aos.css" rel="stylesheet')}}">

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item  position-relative">
          <div class="icon">
            <i class="fa-sharp fa-solid fa-cube"></i>
          </div>
          <h3>RAW MATERIALS</h3>
          <p>We produce our very own premium Aluminium billets in our factory. Our main products are
            Alloy 6063, 6061, 6005 and ADC 12, but we also offer sales of billet upon request, contact us for
            further information.
          </p>
          <!-- <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a> -->
        </div>
      </div>
      <!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-bore-hole"></i>
          </div>
          <h3>MOULDING</h3>
          <p>The design, drilling, turning, milling, grinding, EDM, wire cutting and maintenance of extrusion
            dies are carried out in our own die shop. Our highly skilled personnel ensures die functioning and
            quality are of the highest excellence. 
          </p>
          <!-- <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a> -->
        </div>
      </div>
      <!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-recycle"></i>
          </div>
          <h3>EXTRUSION</h3>
          <p>We provide more than 1000 various styles of sections with various diameter and thickness. With
            top-of-the-line materials, cutting-edge production technologies and a highly qualified team, we
            guarantee complete satisfaction.
          </p>
          <!-- <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a> -->
        </div>
      </div>
      <!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-water-ladder"></i>
          </div>
          <h3>ANODIZING</h3>
          <p>Anodizing increases the oxide layer to between 5 and 25 microns depending on the requirements.
            Our colors include Clear Anodizing, Brown, Black, Gold, Satin Silver, and Satin Nickel. Other colors
            are upon request.
          </p>
          <!-- <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a> -->
        </div>
      </div>
      <!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-spray-can-sparkles"></i>
          </div>
          <h3>POWDER COATING</h3>
          <p>Our powder coating gives excellent exterior durability and color retention, it is mainly applied for
            furniture, interior, exterior and high-rise buildings. We provide a wide-range of RAL shade in
            gloss, satin, and matte finishes. Any other colors are open for requests.</p>
          <!-- <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a> -->
        </div>
      </div>
      <!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-brands fa-phabricator"></i>
          </div>
          <h3>FABRICATION</h3>
          <p>We provide a wide selection of fabrication services such as drilling, punching holes, polishing,
            cutting, bending, and many more. 
          </p>
          <!-- <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a> -->
        </div>
      </div>
      <!-- End Service Item -->

    </div>

  </div>
</section>
<!-- End Services Section -->

<section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" >
            <li >We Provide Services</li>
            <!--<li data-filter=".filter-active">Remodeling</li>-->
            <!--<li data-filter=".filter-active">Construction</li>-->
            <!--<li data-filter=".filter-active">Repairs</li>-->
            <!--<li data-filter=".filter-active">Design</li>-->
          </ul><!-- End Projects Filters -->

          <div class="row gy-2 portfolio-container">

            <div class="col-lg-3 col-md-6 portfolio-item filter-active" data-aos="fade-right" data-aos-delay="300">
              <div class="portfolio-content h-50">
                <img src="theme/img/raw_2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Raw Material</h4>
                  <p>Using our self-produced Top quality aluminium billets; 6061, 6063, 6005, ADC 12</p>
                  <!--<a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>-->
                  <!--<a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>-->
                </div>
              </div>
            </div><!-- End Projects Item -->
            
        <div class="col-lg-3 col-md-6 portfolio-item filter-construction" data-aos="fade-right" data-aos-delay="400">
          <div class="portfolio-content h-100">
            <img src="theme/img/moulding_3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Moulding</h4>
              <p>We're taking die-casting precision to the next level</p>
              <!-- <a href="theme/img/projects/construction-1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-3 col-md-6 portfolio-item filter-construction" data-aos="fade-left" data-aos-delay="500">
          <div class="portfolio-content h-100">
            <img src="theme/img/extrusion_2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Extrusion</h4>
              <p>Over 1000+ design and thickness for your specific needs</p>
              <!-- <a href="theme/img/projects/construction-1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-3 col-md-6 portfolio-item filter-construction" data-aos="fade-left" data-aos-delay="600">
          <div class="portfolio-content h-100">
            <img src="theme/img/mill_finish.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Finishing</h4>
              <p>Mill Finish, Anodizing, Powder Coating</p>
              <!-- <a href="theme/img/projects/construction-1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->


      </div>
      <!-- End Projects Container -->

    </div>

  </div>
</section>
<!-- End Our Projects Section -->


<!-- End #main -->


@endsection
