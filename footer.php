<?php
/**
 * contains footer
 */


?>



    <!-- Footer Area Start -->
    <div class="brand-area">
      <div class="container">
        <div class="row align-items-center gy-3">
          <div class="col-4 col-sm-2">
            <div class="single-brand">
              <a href="#" class="text-sm-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/b-1.png" alt=""></a>
            </div>
          </div>
          <div class="col-4 col-sm-2">
            <div class="single-brand">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/b-2.png" alt=""></a>
            </div>
          </div>
          <div class="col-4 col-sm-2">
            <div class="single-brand">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/b-3.png" alt=""></a>
            </div>
          </div>
          <div class="col-4 col-sm-2">
            <div class="single-brand">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/b-4.png" alt=""></a>
            </div>
          </div>
          <div class="col-4 col-sm-2">
            <div class="single-brand">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/b-5.png" alt=""></a>
            </div>
          </div>
          <div class="col-4 col-sm-2">
            <div class="single-brand">
              <a href="#" class="text-sm-end"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/b-6.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="bb-footer">
        <div class="bb-footer-widget section-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="bb-widget-info">
                            <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a>
                            <p>Branding Bear’s mission is to connect the human community using empathy, kindness and cultivated happiness while supporting institutions that help others.</p>
                            <h3>Branding Bear, LLC</h3>
                            <p class="mb-0">2250 Brookview Dr.<br>Washington, Missouri, 63090</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-2">
                        <div class="bb-widget-info">
                            <h4>Company</h4>
                            <ul class="bb-list-items">
                                <li><a href="#">Promotional Products</a></li>
                                <li><a href="#">What we do</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Bear Blog</a></li>
                                <li><a href="#">Branding Bear Cares</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-2">
                        <div class="bb-widget-info">
                            <h4>Marketing Services</h4>
                            <ul class="bb-list-items">
                                <li><a href="#">Bilingual Marketing</a></li>
                                <li><a href="#">Corporate Training</a></li>
                                <li><a href="#">Promotional Products and Printing</a></li>
                                <li><a href="#">Web, App Design</a></li>
                                <li><a href="#">Graphic Design</a></li>
                                <li><a href="#">PR & Publicity</a></li>
                                <li><a href="#">Social Media Management </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 mt-5 mt-xl-0">
                        <div class="bb-widget-info bb-widget-info-newsletter">
                            <h2>Subscribe To Our Newsletter </h2>
                            <p>Free Weekly Marketing Hacks, Tips And Tricks Straight To Your Inbox</p>
                            <form action="#" class="bb-subscribe-form">
                                <input type="email" placeholder="Enter your email here">
                                <button type="submit">Subscribe <img src="<?php echo get_template_directory_uri(); ?>/assets/img/papper.png" alt="papper"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bb-footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>© <script>document.write(new Date().getFullYear());</script> Branding Bear, LLC  . <a href="privacy-policy.html">Privacy Policy  .</a> <a href="terms-conditions.html">Terms & Conditions</a></p>
                    </div>
                    <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                        <ul>
                            <li><a href="#" target="_blank"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-pinterest"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
  </div>
  <!-- All Js -->
  <script>
    const isoldejs = new isolde({
  responsive: {
    1170: {
      columns: 4,
    },
    768: {
      columns: 3,
    },
    0: {
      columns: 2,
    },
  },
});

  </script>


  <?php wp_footer(); ?>
  </body>
  </html>