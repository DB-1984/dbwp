<?php get_header(); ?>
<div class="container">
  <div class="row wpwc">
    <div class="col-md-6">
      <img class="img-fluid" data-aos="fade-up" src="<?php echo get_theme_file_uri('assets/wpwc.png'); ?>" alt="Hero Image">
    </div>
  </div>
</div>
<div class="container mntn">
  <div class="row">
    <div class="col">
      <div class="p-3 splash-text">
        <h1 class="display-4 typed-js">
        </h1>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
      <div class="p-3 splash-img">
        <img class="img" data-aos="fade-up" src="<?php echo get_theme_file_uri('assets/mntn.png'); ?>" alt="Hero Image">
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="border-left-h1">
      <p class="lead"><span style="color: #303030; font-weight: 600">DBWP.PRO | </span>WordPress/WooCommerce site
        creation & technical support, with no surprises.</p>
      <button class="btn btn-primary cta mt-3" id="contact-link">
        Start here
      </button>
    </div>
  </div>
</div>

<?php get_template_part('template-parts/usp-section'); ?>
<?php get_template_part('template-parts/bs-contact-form'); ?>
<?php get_template_part('template-parts/latest-posts'); ?>

<?php get_footer(); ?>