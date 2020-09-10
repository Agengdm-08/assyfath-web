<main id="main">
  <!-- ======= Breadcumb Section ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2><?php echo $title ?></h2>
        <ol>
          <li><a href="<?php echo site_url() ?>">Beranda</a></li>
          <li><?php echo $title ?></li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcumb Section -->
  <!-- ======= Portfolio Section ======= -->
  <section class="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Kantor</li>
            <li data-filter=".filter-card">Obat Dalam</li>
            <li data-filter=".filter-web">Obat Luar</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="col-lg-4 col-md-6 filter-app">
          <div class="portfolio-item">
            <img src="<?php echo asset_url('frontend/') ?>img/galeri/gbr-1.jpg" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h3>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-1.jpg" data-gall="portfolioGallery" class="venobox" title=""></a>
              </h3>
              <div>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-1.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="Portfolio Details"><i class=""></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 filter-web">
          <div class="portfolio-item">
            <img src="<?php echo asset_url('frontend/') ?>img/galeri/gbr-2.jpg" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h3>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-2.jpg" data-gall="portfolioGallery" class="venobox" title=""></a>
              </h3>
              <div>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-2.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="Portfolio Details"><i class=""></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 filter-app">
          <div class="portfolio-item">
            <img src="<?php echo asset_url('frontend/') ?>img/galeri/gbr-3.jpg" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h3>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-3.jpg" data-gall="portfolioGallery" class="venobox" title=""></a>
              </h3>
              <div>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-3.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="Portfolio Details"><i class=""></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 filter-card">
          <div class="portfolio-item">
            <img src="<?php echo asset_url('frontend/') ?>img/galeri/gbr-4.jpg" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h3>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-4.jpg" data-gall="portfolioGallery" class="venobox" title=""></a>
              </h3>
              <div>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-4.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="Portfolio Details"><i class=""></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 filter-web">
          <div class="portfolio-item">
            <img src="<?php echo asset_url('frontend/') ?>img/galeri/gbr-5.jpg" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h3>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-5.jpg" data-gall="portfolioGallery" class="venobox" title=""></a>
              </h3>
              <div>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-5.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="Portfolio Details"><i class=""></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 filter-app">
          <div class="portfolio-item">
            <img src="<?php echo asset_url('frontend/') ?>img/galeri/gbr-6.jpg" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h3>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-6.jpg" data-gall="portfolioGallery" class="venobox" title=""></a>
              </h3>
              <div>
                <a href="<?php echo asset_url('frontend/') ?>img/galeri/gbr-6.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="Portfolio Details"><i class=""></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- End Portfolio Section -->
</main>