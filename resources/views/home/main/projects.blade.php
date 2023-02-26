@section('breadcrumbs')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('theme/img/mf.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Projects</h2>
    <!-- <ol>
      <li><a href="{{url('/')}}">Home</a></li>
      <li>Projects</li>
    </ol> -->

  </div>
</div>
<!-- End Breadcrumbs -->
@endsection

@section('projects')
<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Remodeling</li>
            <li data-filter=".filter-construction">Construction</li>
            <li data-filter=".filter-repairs">Repairs</li>
            <li data-filter=".filter-design">Design</li>
          </ul>
          <!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">

            <div class="col-lg-4 col-md-6 portfolio-item filter-active">
              <div class="portfolio-content h-100">
                <img src="theme/img/projects/AlamSuteraOffice.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Alam Sutera Office</h4>
                  <p>Alam Sutera Office</p>
                  <!--<a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>-->
                  <!--<a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>-->
                </div>
              </div>
            </div><!-- End Projects Item -->
            
        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/BandaraKomodoLabuanBajo.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bandara Komodo Labuan Bajo</h4>
              <p>Bandara Komodo Labuan Bajo</p>
              <!-- <a href="theme/img/projects/construction-1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/BFITowerBSD.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>BFI Tower BSD</h4>
              <p>BFI Tower BSD</p>
              <!-- <a href="theme/img/projects/construction-1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/BigMallSamarinda.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Big Mall Samarinda</h4>
              <p>Big Mall Samarinda</p>
              <!-- <a href="theme/img/projects/construction-1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/CapitolParkJakarta.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Capitol Park Jakarta</h4>
              <p>Capitol Park Jakarta</p>
              <!-- <a href="theme/img/projects/repairs-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/CBDApartmentsSurabaya.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>CBD Apartments Surabaya</h4>
              <p>CBD Apartments Surabaya</p>
              <!-- <a href="theme/img/projects/design-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/CeladonApartmentsSurabaya.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Celadon Apartments Surabaya</h4>
              <p>Celadon Apartments Surabaya</p>
              <!-- <a href="theme/img/projects/remodeling-2.jpg" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/CiputraInternationalOfficeTower23.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Ciputra International Office Tower 2 & 3.jpg</h4>
              <p>Ciputra International Office Tower 2&3</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/CiputraWorldMall2Surabaya.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Ciputra World Mall 2 Surabaya</h4>
              <p>Ciputra World Mall 2 Surabaya</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/CiputraWorldMall2Surabaya.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Ciputra World Mall 2 Surabaya</h4>
              <p>Ciputra World Mall 2 Surabaya</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/EmbarcaderoBintaro.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Embarcadero Bintaro</h4>
              <p>EmbarcaderoBintaro</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/GandariaCity.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gandaria City</h4>
              <p>Gandaria City</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/GoldCoastTowerPIK.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gold Coast Tower PIK</h4>
              <p>Gold Coast Tower PIK</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/GrahaPenaSurabaya.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Graha Pena Surabaya</h4>
              <p>Graha Pena Surabaya</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/KertajatiAirport.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Kertajati Airport</h4>
              <p>Kertajati Airport</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/MNCTowerJakartaPusat.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>MNC Tower Jakarta Pusat</h4>
              <p>MNC Tower Jakarta Pusat</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/Office8Senopati.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Office 8 Senopati</h4>
              <p>Office 8 Senopati</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/PerpustakaanNegara.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Perpustakaan Negara</h4>
              <p>Perpustakaan Negara</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/PIKAvenueMall.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>PIK Avenue Mall</h4>
              <p>PIK Avenue Mall</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/RosevilleBSD.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Roseville BSD</h4>
              <p>Roseville BSD</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/SouthQuarterTangerang.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>South Quarter Tangerang</h4>
              <p>South Quarter Tangerang</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/SultanThahaAirportJambi.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sultan Thaha Airport Jambi</h4>
              <p>Sultan Thaha Airport Jambi</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/T-TowerJakarta.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Tower Jakarta</h4>
              <p>T-Tower Jakarta</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/TentremHotelYogyakarta.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Tentrem Hotel Yogyakarta</h4>
              <p>Tentrem Hotel Yogyakarta</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/TheSuitesTower.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>The Suites Tower</h4>
              <p>The Suites Tower</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/UniversitasNegeriMalang.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Universitas Negeri Malang</h4>
              <p>Universitas Negeri Malang</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/UniversitasNegeriSurabaya.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Universitas Negeri Surabaya</h4>
              <p>Universitas Negeri Surabaya</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/VasaHotelSurabaya.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Vasa Hotel Surabaya</h4>
              <p>Vasa Hotel Surabaya</p>
              <!-- <a href="theme/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
            </div>
          </div>
        </div>
        <!-- End Projects Item -->

  


        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/repairs-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Repairs 2</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="theme/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div> -->
        <!-- End Projects Item -->

        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/design-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Design 2</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="theme/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div> -->
        <!-- End Projects Item -->

        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Remodeling 3</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="theme/img/projects/remodeling-3.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div> -->
        <!-- End Projects Item -->

        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/construction-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Construction 3</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="theme/img/projects/construction-3.jpg" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div> -->
        <!-- End Projects Item -->

        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/repairs-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Repairs 3</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="theme/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div> -->
        <!-- End Projects Item -->

        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="theme/img/projects/design-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Design 3</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="theme/img/projects/design-3.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div> -->
        <!-- End Projects Item -->

      </div>
      <!-- End Projects Container -->

    </div>

  </div>
</section>
<!-- End Our Projects Section -->

<!-- End #main -->
@endsection
