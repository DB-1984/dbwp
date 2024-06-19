<?php get_header(); ?>

<div class="container mntn">
  <div class="row">
    <div class="col-md-4 d-flex align-items-center">
      <div class="hero text-light text-center py-5">
        <div class="border-left-h1">
          <h1 class="display-4 typed-js">
          </h1>
          <p class="lead"><span style="color: #000; font-weight: 700">DBWP.PRO | </span>WordPress/WooCommerce site creation & technical support, with no surprises.</p>
          <button class="btn btn-primary cta mt-3" id="usp-anchor">
            Start here
          </button>
        </div>
      </div>
    </div>
    <div class="col-md-8 d-flex align-items-center">
      <img data-aos="fade-up" src="<?php echo get_theme_file_uri('assets/mntn.png'); ?>" alt="Hero Image" class="img-fluid">
    </div>
  </div>
</div>


<?php get_template_part('template-parts/usp-section'); ?>
<?php get_template_part('template-parts/bs-contact-form'); ?>
<?php get_template_part('template-parts/latest-posts'); ?>

<?php get_footer(); ?>