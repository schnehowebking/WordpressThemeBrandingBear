
<?php
/**
* Template Name: Branding Bear Cares
*
* @package BrandingBear
* @subpackage 
* @since  1.0.0
*/ ?>

<?php
get_header();
?>


        <!-- Breadcrumb Area Start -->
        <section class="bb-breadcrumb-area">
          <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-xl-5">
                    <div class="bb-breadcrumb-info">
                        <h1 class="breadcrumb-title">Branding Bear Cares</h1>
                        <ul>
                          <li><a href="<?php echo get_home_url(); ?>"><i class="icofont-home"></i> Home</a></li>
                          <li>Branding Bear Cares</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-7">
                    <div class="bb-breadcrumb-info">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illus.png" class="img-fluid" alt="illus">
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Breadcrumb Area End -->
        <!-- Cares Info Area Start -->
        <section class="cares-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4">
                      <div class="cares-info">
                        <div class="bb-section-title ">
                          <h2 class="text-start mb-3">Giving Back <br> For Good</h2>
                        </div>
                        <p>With our Branding Bear Cares initiative we help nonprofits and schools compete with professional marketing and promotional services for any stage of their organizational life-cycle.</p>
                        <p>We believe these institutions are filled with purpose—each one striving to make our neighborhoods and communities a better place to live, work and play.</p>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 align-self-end mt-3 mt-md-0">
                        <div class="cares-info">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/v-1.jpg" alt="">
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 align-self-end">
                      <div class="cares-info mt-3 mt-lg-0">
                        <p>Our Branding Bear Cares program allows us to offer our skills as branding and marketing specialists to assist local schools and nonprofits. Marketing plays an integral role in fundraising and reaching those in need for nonprofits.</p>
                      </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-lg-6">
                      <div class="cares-info">
                        <div class="bb-section-title">
                          <h4>We help these organizations reach their fundraising goals and support their missions by:</h4>
                        </div>
                        <ul>
                          <li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt=""> Strategic planning, brand identity and goal setting.</li>
                          <li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt=""> Developing an engaging online presence through our social media to the management and website design services.</li>
                          <li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt=""> Creating unique, branded promotional products, logos and more!</li>
                          <li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt=""> Building expertly-crafted online retail stores.</li>
                          <li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt=""> Organizing public relations and publicity strategies.</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-3 mb-3">
                        <div class="cares-info">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/v-2.jpg" alt="">
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3 align-self-end mt-3 mt-lg-0">
                      <div class="cares-info">
                        <p>Branding Bear Cares is our way of saying ‘thank you’ to the people and organizations in our area that have big plans to make our world a better place.</p>
                        <p>We offer these services at or below our cost, and sometimes for free, to give back to our community.</p>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cares Info End -->
        <!-- Contact Info Area Start -->
        <section class="contact-area section-padding">
            <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="bb-section-title mb-5">
                      <h2 class="text-start">Contact us to <span>learn</span> more today!</h2>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="contact-info">
                        <form>
                          <div class="mb-3">
                            <label for="exampleInputname" class="form-label">Full Name</label>
                            <input type="email" class="form-control" id="exampleInputname" placeholder="Enter your full name">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                          </div>
                          <div class="select-wrap mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-down.png" alt="">
                          <label for="exampleSelect" class="form-label">Select Your Services</label>
                          <select id="exampleSelect" class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Instruction</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message "></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="contact-info mt-5 mt-md-0 ps-lg-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.png" alt="contact">
                      </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Info End -->


        <?php the_content(); ?>
<?php
get_footer();
?>