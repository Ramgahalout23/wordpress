
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    <?php wp_head()?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Creativora</title>
   
    <!-- Font Awesome -->   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" type="text/css" media="screen" />


    <!-- Plugin CSs -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/plugin.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/responsive.css">
</head>

<body <?php body_class('homepage is-preload') ?>">
    <!-- Header Start -->
    <header class="home-1">             
        <nav class="navbar header-nav navbar-expand-lg" >
            <div class="container container-large">
                <!-- Brand -->
                <a class="navbar-brand" href="http://melankolia.space/tf/creativora/index-1.html#">
                    <?php the_custom_logo() ?>

                </a>
                <!-- / -->

                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- / -->

           
                    <ul class="collapse navbar-collapse justify-content-end" id="navbar">
                    <?php
						wp_nav_menu(array(
                            'theme_location' =>'primary',   
                            'menu_class'=>'navbar-nav ml-auto align-items-center',
                            'link_before' => '<li><a  class="nav-link"  data-scroll-nav="1" style="transform: matrix(1, 0, 0, 1, 0, 0);">',
                             'link_after' =>'<a/></li>'
                            
                           
                        ))
						
                        ?>
                        
                          
                    </ul>
          
                <!-- / -->

            </div><!-- Container -->
        </nav> <!-- Navbar -->
    </header>
    <!-- Header End -->