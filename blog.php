<?php
/**
* Template Name: Bear Blog
*
* @package BrandingBear
* @subpackage 
* @since  1.0.0
*/ ?>


<?php
get_header();
?>


<section class="bb-breadcrumb-area">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6 col-xl-5">
                  <div class="bb-breadcrumb-info">
                     <h1 class="breadcrumb-title">The Bear Blog</h1>
                     <ul>
                        <li><a href="<?php echo get_home_url(); ?>"><i class="icofont-home"></i> Home</a></li>
                        <li>The Bear Blog</li>
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
      <!-- Blog Info Area Start -->
      <div class="blog-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="bb-section-title mb-5">
                     <h2 class="text-left"><span>Bear</span> Blog</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="blog-item big">
                     <div class="row align-items-center">
                        <div class="col-lg-6">
                           <div class="blog-item-img">
                              <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-1.jpg" alt=""></a>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="blog-item-info">
                              <div class="blog-item-info-top-big">
                                 <div class="blog-meta-info"><span>Wednesday,12:49 PM </span> <span>Sept 28, 2020.</span></div>
                                 <h3><a href="#">Thoren Okendhild</a></h3>
                              </div>
                              <p>Jacque McHugh originally wrote this post as a guest thought-leader for Marketing Mission.    The best fundraisers are wonderful storytellers. You know who I mean. Their elevator pitch sounds beautifully unrehearsed and illustrates</p>
                              <p>1) the societal pain-point, 2) the creation-story of their nonprofit to relieve that pain and 3) why you absolutely must help. </p>
                              <a href="#" class="learn-more">Learn More <i class="icofont-thin-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Blog Info End -->
      <div class="blog-cat section-padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <ul class="sortable__nav nav">
                     <li>
                        <a data-isolde-link="all" class="nav__link">
                        All Categories
                        </a>
                     </li>
                     <li>
                        <a data-isolde-link="flatty" class="nav__link">
                        Career
                        </a>
                     </li>
                     <li>
                        <a data-isolde-link="funny" class="nav__link">
                        Marketing
                        </a>
                     </li>
                     <li>
                        <a data-isolde-link="video" class="nav__link">
                        Video Production
                        </a>
                     </li>
                     <li>
                        <a data-isolde-link="advertising" class="nav__link">
                        Shop Local
                        </a>
                     </li>
                     <li>
                        <a data-isolde-link="uncategorized" class="nav__link">
                        Uncategorized
                        </a>
                     </li>
                  </ul>
                  <div id="isolde" class="isolde-default">
                     <div data-isolde-el="flatty">
                        <div class="blog-item pb-3 mb-3 border-bottom">
                           <div class="row align-items-center">
                              <div class="col-md-6">
                                 <div class="blog-item-img">
                                    <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-2.jpg" alt=""></a>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="blog-item-info">
                                    <div class="blog-item-info-top">
                                       <h3><a href="#">The Buyer’s Journey</a></h3>
                                       <span>Sept 28, 2020</span>
                                    </div>
                                    <p>Jacque McHugh originally wrote this post as the guest thought-leader for Marketing</p>
                                    <a href="#" class="learn-more">Learn More <i class="icofont-thin-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-isolde-el="funny">
                        <div class="blog-item pb-3 mb-3 border-bottom">
                           <div class="row align-items-center">
                              <div class="col-md-6">
                                 <div class="blog-item-img">
                                    <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-3.jpg" alt=""></a>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="blog-item-info">
                                    <div class="blog-item-info-top">
                                       <h3><a href="#">The Buyer’s Journey</a></h3>
                                       <span>Sept 28, 2020</span>
                                    </div>
                                    <p>Jacque McHugh originally wrote this post as the guest thought-leader for Marketing</p>
                                    <a href="#" class="learn-more">Learn More <i class="icofont-thin-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-isolde-el="video">
                        <div class="blog-item pb-3 mb-3 border-bottom">
                           <div class="row align-items-center">
                              <div class="col-md-6">
                                 <div class="blog-item-img">
                                    <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-4.jpg" alt=""></a>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="blog-item-info">
                                    <div class="blog-item-info-top">
                                       <h3><a href="#">The Buyer’s Journey</a></h3>
                                       <span>Sept 28, 2020</span>
                                    </div>
                                    <p>Jacque McHugh originally wrote this post as the guest thought-leader for Marketing</p>
                                    <a href="#" class="learn-more">Learn More <i class="icofont-thin-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-isolde-el="uncategorized">
                        <div class="blog-item pb-3 mb-3 border-bottom">
                           <div class="row align-items-center">
                              <div class="col-md-6">
                                 <div class="blog-item-img">
                                    <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-2.jpg" alt=""></a>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="blog-item-info">
                                    <div class="blog-item-info-top">
                                       <h3><a href="#">The Buyer’s Journey</a></h3>
                                       <span>Sept 28, 2020</span>
                                    </div>
                                    <p>Jacque McHugh originally wrote this post as the guest thought-leader for Marketing</p>
                                    <a href="#" class="learn-more">Learn More <i class="icofont-thin-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        </div>

        <?php the_content(); ?>
<?php
get_footer();
?>