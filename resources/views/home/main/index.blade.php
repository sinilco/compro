
@section('hero')
<section id="hero" class="hero">

  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h2 data-aos="zoom-in" data-aos-delay="50">Hanjaya Perkasa Metals Indonesia</h2>
          <p data-aos="zoom-in" data-aos-delay="550">Serving Outstanding Quality Products and Excellent Services For More Than 25 Years</p>
          <a data-aos="flip-left" data-aos-delay="1500"  href="{{url('/login')}}" class="btn-get-started">Make Order</a>
        </div>
      </div>
    </div>
  </div>
  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-item active" style="background-image: url({{asset('theme/img/hero-carousel/all.png)')}}"></div>
    <div class="carousel-item" style="background-image: url({{asset('theme/img/hero-carousel/wh.jpg)')}}"></div>
    <div class="carousel-item" style="background-image: url({{asset('theme/img/hero-carousel/pc3.jpg)')}}"></div>
    <div class="carousel-item" style="background-image: url({{asset('theme/img/hero-carousel/powder.jpg)')}}"></div>
    <div class="carousel-item" style="background-image: url({{asset('theme/img/hero-carousel/hpmi.jpg)')}}"></div>
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
  </div>
</section>
@endsection
@section('main')
<section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row position-relative">
          <div class="col-lg-4 about-img" style="background-image: url(theme/img/hpmi.jpg);"></div>
          <div class="col-lg-13">
            <h2>Hanjaya Perkasa Metals Indonesia</h2>
            <div class="our-story">
              <h4>About Us</h4>
              <h3>28 Years of Quality and Trust</h3>
              <p>PT. Hanjaya Perkasa Metals Indonesia is an aluminium extrusion manufacturer which was first established in 1995, in the city of Mojokerto, East Java.</p>
              <p>For over 28 years, 
                we have offered wide-range of outstanding quality products and services, 
                and has been the global and local supplier for Architectural and Building Construction, 
                Electronics and Electrical Parts, Furniture & Automobile Industries.</p>
              <a data-aos="fade-up" data-aos-delay="100" href="{{url('/about')}}" class="btn-get-started">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Projects</h2>
          <p>HP Metals has managed to earn a reputation for exceeding expectations with our work. We make sure
            our services are customized to the parameters established by each client. Have a look at some of the
            ongoing projects & projects we’ve worked with in the past, and let us know if you have any questions.
          </p>
          <a data-aos="fade-up" data-aos-delay="100" href="{{url('/projects')}}" class="btn-get-started">Readmore</a>
        </div>
          <!-- End Projects Container -->

      </div>
    </section>


@endsection