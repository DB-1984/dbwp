<?php wp_footer(); ?>

<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media - add border-top back later-->
  <!--section class="d-flex justify-content-center"> 
    < Left -->

  <!-- Right -->
  <!--div>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github"></i>
      </a>
    </div-->
  <!-- Right >
  </section>
  <Section: Social media -->

  <!-- Section: Links  -->
  <section class="footer-link-section">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="/privacy-policy" class="text-reset">Privacy</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->

  <div class="container-fluid copyright" style="padding-left: 0; padding-right: 0">
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      &copy;
      <?php echo date_i18n('Y'); ?> DBWP.pro
    </div>
  </div>

  <!-- Copyright -->

  <!-- Popup HTML -->
  <div id="popup-container" style="display: none">
    <p>By proceeding through this website, you accept the terms of our <span class="text-highlight"><a
          href="privacy-policy.html">Privacy Policy</a></span></p>
    <button id="close-btn">Close</button>
  </div>

  <script>
    const anchorLink = document.querySelector("#usp-anchor");
    const anchorTarget = document.querySelector("#usp-anchor-top");
    if (anchorTarget) {
      anchorLink.addEventListener("click", () => {
        anchorTarget.scrollIntoView({
          behavior: "smooth"
        });
      });
    }
  </script>

</footer>
<!-- Footer -->

</body>

</html>