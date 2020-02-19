
<?php
/**
* Template Name: mm
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/


<?php error_reporting(E_ALL);
ini_set("display_errors", 1);?>
<?php get_header();?>
<?php $hero = get_field('hero');?>
<?php $services_area = get_field('services_area');?>
<?php $about = get_field('about');?>
<?php $about__image_gallery = get_field('about__image_gallery');?>

<!-- Hero Start -->
<section class="hero bg-hero-1 centered" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">

    <div class="container ">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="hero-text text-center text-lg-left">
                    <h1 class="fading" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><?php echo $hero['maine_title'];?></h1>

                    <h1 class="fading" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><?php echo $hero['main_title2'];?> <span><?php echo $hero['coloured_main_title'];?></span></h1>
                    <p class="sub-title fading" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><?php echo $hero['small_title'];?>
                    </p>
                    <?php if ($hero['link']):?>
                    <a class="button-work purple-gradient fading" href="<?php echo $hero['link'];?>"
                        style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><?php echo $hero['link_button'];?>
                        </a>
<?php endif;?>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Hero End -->

<!-- <section class="scroll-up" data-scroll-index="0">
    <h2>.</h2>
</section> -->

<!-- Service Start -->
<section class="services mt-full fading" data-scroll-index="1" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
    <div class="container">
        <div class="title text-center mb-40">
            <h2 class="title-text"><span><?php echo $services_area['services_main_title'];?></span></h2>
            <p><?php echo $services_area['services_small_text'];?></p>
            <div class="dash"></div>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon-round blue-gradient">
                        <i class="fas fa-code az" aria-hidden="true"></i>
                        <div class="dots"></div>
                        <div class="dots-2"></div>
                        <div class="dots-3"></div>
                        <div class="dots-4"></div>
                    </div>
                    <div class="service-text text-center">
                        <h3><?php echo $services_area['service_block1_title'];?></h3>
                        <p> <?php echo $services_area['service_block1'];?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon-round purple-gradient">
                        <i class="fas fa-tablet" aria-hidden="true" style="transform: matrix(1, 0, 0, 1, 0, 0);"></i>
                        <div class="dots"></div>
                        <div class="dots-2"></div>
                        <div class="dots-3"></div>
                        <div class="dots-4"></div>
                    </div>
                    <div class="service-text text-center">
                    <h3><?php echo $services_area['service_block2_title'];?></h3>
                        <p> <?php echo $services_area['service_block2'];?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon-round green-gradient">
                        <i class="fas fa-seedling" aria-hidden="true"></i>
                        <div class="dots"></div>
                        <div class="dots-2"></div>
                        <div class="dots-3"></div>
                        <div class="dots-4"></div>
                    </div>
                    <div class="service-text text-center">
                    <h3><?php echo $services_area['service_block3_title'];?></h3>
                        <p> <?php echo $services_area['service_block3'];?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon-round red-gradient">
                        <i class="fas fa-marker" aria-hidden="true"></i>
                        <div class="dots"></div>
                        <div class="dots-2"></div>
                        <div class="dots-3"></div>
                        <div class="dots-4"></div>
                    </div>
                    <div class="service-text text-center">
                    <h3><?php echo $services_area['service_block4_title'];?></h3>
                        <p> <?php echo $services_area['service_block4'];?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon-round orange-gradient">
                        <i class="fas fa-camera-retro" aria-hidden="true"></i>
                        <div class="dots"></div>
                        <div class="dots-2"></div>
                        <div class="dots-3"></div>
                        <div class="dots-4"></div>
                    </div>
                    <div class="service-text text-center">
                    <h3><?php echo $services_area['service_block5_title'];?></h3>
                        <p> <?php echo $services_area['service_block5'];?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon-round pink-gradient">
                        <i class="fas fa-cube" aria-hidden="true"></i>
                        <div class="dots"></div>
                        <div class="dots-2"></div>
                        <div class="dots-3"></div>
                        <div class="dots-4"></div>
                    </div>
                    <div class="service-text text-center">
                    <h3><?php echo $services_area['service_block6_title'];?></h3>
                        <p> <?php echo $services_area['service_block6'];?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Service End -->

<!-- About Start -->
<section class="about between" data-scroll-index="2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 ">
                <div class="title text-center">
                    <h2 class="title-text"><span><?php echo $about['about_main_title'];?></span></h2>
                    <p><?php echo $about['about_small_title'];?></p>
                    <div class="dash"></div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="about-slide">
                    <div class="about-image">
                        <div class="owl-carousel owl-theme owl-loaded">



                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item cloned">
                                        <div class="about-item">
                                            <figure class="red-gradient">
                                          
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="about-item">
                                            <figure class="dark-orange-gradient">
                                            <img class="img-fluid"src="<?php echo $about__image_gallery['image1'];?>" alt="about">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="about-item">
                                            <figure class="blue-gradient">
                                            <img class="img-fluid"src="<?php echo $about__image_gallery['image2'];?>" alt="about">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="about-item">
                                            <figure class="red-gradient">
                                            <img class="img-fluid"src="<?php echo $about__image_gallery['image3'];?>" alt="about">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="about-item">
                                            <figure class="dark-orange-gradient">
                                            <img class="img-fluid"src="<?php echo $about__image_gallery['image4'];?>" alt="about">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="about-item">
                                            <figure class="blue-gradient">
                                            <img class="img-fluid"src="<?php echo $about__image_gallery['image5'];?>" alt="about">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="about-item">
                                            <figure class="red-gradient">
                                            <img class="img-fluid"src="<?php echo $about__image_gallery['image6'];?>" alt="about">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                    class="owl-next"><span aria-label="Next">›</span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-5 centered">
                <div class="about-text text-center text-lg-left mt-mobile">
                    <h2><?php echo $about['about_desc1_title'];?></h2>
                    <p><?php echo $about['about_desc1'];?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text text-center text-lg-left mt-mobile mt-40">
                    <h2>Our Vision</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt quas
                        dolore, exercitationem, quisquam aspernatur at temporibus possimus fugiat fugit nulla iusto
                        illum delectus iure architecto ea, ex assumenda? Quia, voluptatibus?</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text text-center text-lg-left mt-mobile mt-40">
                    <h2>How we work</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt quas
                        dolore, exercitationem, quisquam aspernatur at temporibus possimus fugiat fugit nulla iusto
                        illum delectus iure architecto ea, ex assumenda? Quia, voluptatibus?</p>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- About End -->

<!-- Work Start -->
<section class="work between" data-scroll-index="3">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="title text-center mb-40">
                    <h2 class="title-text"><span>Work</span></h2>
                    <p>Digital Marketing Agency, providing innovative,</p>
                    <div class="dash"></div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="owl-carousel owl-theme owl-loaded owl-drag">




            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item active center">
                        <div class="work-item" data-position="0">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2(1).jpg">
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="work-title">
                                        <h2>Midnight Town</h2>
                                        <p>Web Development, UI / UX</p>
                                        <a class="button-work purple-gradient" href="http://melankolia.space/tf/creativora/index-1.html">View
                                            Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active">
                        <div class="work-item" data-position="1">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/2(1).jpg" alt="">
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="work-title">
                                        <h2>Panorama</h2>
                                        <p>Photography / Video</p>
                                        <a class="button-work green-gradient" href="http://melankolia.space/tf/creativora/index-1.html">View
                                            Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="work-item" data-position="2">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/3(1).jpg" alt="">
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="work-title">
                                        <h2>Mombasa</h2>
                                        <p>Branding / Art Direction</p>
                                        <a class="button-work pink-gradient" href="http://melankolia.space/tf/creativora/index-1.html">View
                                            Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="work-item" data-position="3">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/4(1).jpg" alt="">
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="work-title">
                                        <h2>Of Monsters and Men</h2>
                                        <p>Web Development, UI / UX</p>
                                        <a class="button-work dark-orange-gradient" href="http://melankolia.space/tf/creativora/index-1.html">View
                                            Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                        aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span
                        aria-label="Next">›</span></button></div>
            <!-- <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button"
                    class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button
                    role="button" class="owl-dot"><span></span></button></div> -->
        </div>

        <div class="row">
            <div class="col-lg-12 text-center mt-40">
                <a class="dark-button" href="http://melankolia.space/tf/creativora/index-1.html">VIEW ALL WORKS</a>
            </div>
        </div>
    </div>
</section>
<!-- Work End -->

<!-- Testimonial Start -->
<section class="testimonial between">

    <div class="container">

        <div class="row">
            <div class="col-lg-4 centered text-center text-lg-left">
                <div>

                    <h2 class="title-text">What People Says</h2>


                    <p class="sub-title mt-20">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div class="nav-custom mt-40 text-center text-lg-left text-md-left">
                        <i class="fas fa-arrow-left nav-left"></i>
                        <i class="fas fa-arrow-right nav-right"></i>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="testi-content">
                    <div class="owl-carousel owl-theme owl-loaded">



                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item cloned">
                                    <div class="testi-item text-center">
                                        <p>"Breakfast agreeable incommode departure it an. By ignorant at on
                                            wondered relation.
                                            Enough at tastes really so cousin am of."</p>
                                        <div class="author">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-1.png" alt="1">
                                            <p class="author-text">Nattasha, Aloka CEO</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="testi-item text-center">
                                        <p>"There is nothing to prevent us from living on the Moon. Many books have
                                            been
                                            written on this subject. ."</p>
                                        <div class="author">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-2.png" alt="1">
                                            <p class="author-text">Rafian Sevent</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active">
                                    <div class="testi-item text-center">
                                        <p>"Breakfast agreeable incommode departure it an. By ignorant at on
                                            wondered relation.
                                            Enough at tastes really so cousin am of."</p>
                                        <div class="author">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-1.png" alt="1">
                                            <p class="author-text">Nattasha, Aloka CEO</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="testi-item text-center">
                                        <p>"There is nothing to prevent us from living on the Moon. Many books have
                                            been
                                            written on this subject. ."</p>
                                        <div class="author">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-2.png" alt="1">
                                            <p class="author-text">Rafian Sevent</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="testi-item text-center">
                                        <p>"Breakfast agreeable incommode departure it an. By ignorant at on
                                            wondered relation.
                                            Enough at tastes really so cousin am of."</p>
                                        <div class="author">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-1.png" alt="1">
                                            <p class="author-text">Nattasha, Aloka CEO</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="testi-item text-center">
                                        <p>"There is nothing to prevent us from living on the Moon. Many books have
                                            been
                                            written on this subject. ."</p>
                                        <div class="author">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-2.png" alt="1">
                                            <p class="author-text">Rafian Sevent</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="partner mt-40">
        <div class="container">
            <div class="owl-carousel owl-theme owl-loaded owl-drag">







                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item cloned">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item cloned">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item cloned">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item cloned">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item cloned">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item active">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item active">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item active">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item active">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item active">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item cloned">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item cloned">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item cloned">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item cloned">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.png" alt="1">
                            </div>
                        </div>
                        <div class="owl-item cloned">
                            <div class="parter-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.png" alt="1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                            aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span
                            aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial End -->

<!-- Team Start -->
<section class="team between" data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="title text-center">
                    <h2 class="title-text"><span>Team</span></h2>
                    <p>Good design is simple, clear and uncluttered.</p>
                    <div class="dash"></div>
                </div>
            </div>

        </div>

        <div class="owl-carousel owl-theme owl-loaded owl-drag">







            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item cloned">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image purple-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text purple-gradient">
                                            <h3>Jannifer Lucy</h3>
                                            <p>Developer</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image red-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text red-gradient">
                                            <h3>James Yanto</h3>
                                            <p>Art Director</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image blue-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/3(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text blue-gradient">
                                            <h3>Gerard Way</h3>
                                            <p>Graphic Designer</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image green-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/4(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text green-gradient">
                                            <h3>Mikayla Jade</h3>
                                            <p>Senior Marketing</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image purple-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text purple-gradient">
                                            <h3>Jannifer Lucy</h3>
                                            <p>Developer</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image red-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text red-gradient">
                                            <h3>James Yanto</h3>
                                            <p>Art Director</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image blue-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/3(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text blue-gradient">
                                            <h3>Gerard Way</h3>
                                            <p>Graphic Designer</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image green-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/4(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text green-gradient">
                                            <h3>Mikayla Jade</h3>
                                            <p>Senior Marketing</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image purple-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text purple-gradient">
                                            <h3>Jannifer Lucy</h3>
                                            <p>Developer</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image red-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text red-gradient">
                                            <h3>James Yanto</h3>
                                            <p>Art Director</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image blue-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/3(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text blue-gradient">
                                            <h3>Gerard Way</h3>
                                            <p>Graphic Designer</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned">
                        <div class="team-slide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-item">
                                        <div class="team-image green-gradient">
                                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/4(2).jpg" alt="1"></figure>
                                        </div>
                                        <div class="team-text green-gradient">
                                            <h3>Mikayla Jade</h3>
                                            <p>Senior Marketing</p>
                                            <ul class="team-social">
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="http://melankolia.space/tf/creativora/index-1.html"><i
                                                            class="fab fa-behance" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                        aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span
                        aria-label="Next">›</span></button></div>
            <div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div>
        </div>
    </div>
</section>
<!-- Team Start -->


<?php get_footer();?>


<!-- Optional JavaScript -->

