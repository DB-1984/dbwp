<?php get_header(); ?>


<div class="container-fluid mntn">
  <div class="row">
    <!-- Column 1 -->
    <div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
      <div class="p-3">
        <h1 class="display-4 typed-js">
        </h1>
        <div class="border-left-h1">
          <p class="lead"><span style="color: #303030; font-weight: 600">DBWP.PRO | </span>WordPress/WooCommerce site
            creation & technical support, with no surprises.</p>
          <button class="btn btn-primary cta mt-3" id="usp-anchor">
            Start here
          </button>
        </div>
      </div>
    </div>
    <!-- Column 2 -->
    <div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
      <div class="p-3">

        <img class="img-fluid" data-aos="fade-up" src="<?php echo get_theme_file_uri('assets/mntn.png'); ?>" alt="Hero Image">
      </div>
    </div>
  </div>
</div>

<!--
<div class="container mntn">
  <div class="row">
    <h1 class="display-4 typed-js">
    </h1>
    <div class="border-left-h1">
      <p class="lead"><span style="color: #303030; font-weight: 600">DBWP.PRO | </span>WordPress/WooCommerce site
        creation & technical support, with no surprises.</p>
      <button class="btn btn-primary cta mt-3" id="usp-anchor">
        Start here
      </button>
    </div>
    <div class="col-md-12 p-0">
      <div class="hero text-light text-center py-5">
        <img data-aos="fade-up" src="<?php echo get_theme_file_uri('assets\mntn.png'); ?>" alt="Hero Image" class="img-fluid mt-4" style="max-width: 100%; margin-top: -20rem!important">
      </div>
    </div>
  </div>
</div>
-->

<?php get_template_part('template-parts/usp-section'); ?>
<?php get_template_part('template-parts/bs-contact-form'); ?>
<?php get_template_part('template-parts/latest-posts'); ?>

<?php get_footer(); ?>