<?php get_header(); ?>

<div class="container mntn">
  <div class="row">
    <div class="col-md-12 p-0">
      <div class="hero text-light text-center py-5">
        <div class="border-left-h1">
          <h1 class="display-4 typed-js">
          </h1>
          <p class="lead"><span style="color: #303030; font-weight: 600">DBWP.PRO | </span>WordPress/WooCommerce site
            creation & technical support, with no surprises.</p>
          <button class="btn btn-primary cta mt-3" id="usp-anchor">
            Start here
          </button>
        </div>
        <img data-aos="fade-up" src="<?php echo get_theme_file_uri('assets\mntn.png'); ?>" alt="Hero Image" class="img-fluid mt-4" style="max-width: 100%; margin-top: -20rem!important">
      </div>
    </div>
  </div>
</div>

<?php get_template_part('template-parts/usp-section'); ?>
<?php get_template_part('template-parts/bs-contact-form'); ?>
<?php get_template_part('template-parts/latest-posts'); ?>

<?php get_footer(); ?>