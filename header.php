<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>images/favicon.ico" type="image/x-icon">  
    <link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/style.css">
    <title><?php the_title(); ?> | Granita</title>
    <?php wp_head(); ?>
</head>
<body>
    <div id="navbar-granita" class="navbar-granita">
        <div class="nav-granita">
            <div class="logo">
                <a href="<?php echo home_url('');?>">
                    <img src="<?php bloginfo('stylesheet_directory');?>/images/logo-granita-06.png" alt="granita logo">
                </a>
            </div>
        </div>
        <div class="nav-menu d-none d-lg-flex">
            <ul>
                <li>
                    <a href="<?php echo home_url('/single-origin/');?>">Single Origin <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo home_url('/black-toraja-slush/');?>">
                                Black Toraja Slush
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/toraja-v60-shot/');?>">
                                Toraja V60 Slush
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/aceh-v60-shot/');?>">
                                Aceh V60 Slush
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo home_url('/espresso-blends/');?>">Espresso Blends <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo home_url('/caffe-latte/');?>">
                                Cafe Latte
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="mobile d-lg-none">
            <div class="icon-menu">
                <img src="<?php bloginfo('stylesheet_directory');?>/images/menu-icon-mobile-04.png" alt="">
            </div>
            <div class="side-menu">
                <div class="close-button-menu text-right p-4">
                    <img src="<?php bloginfo('stylesheet_directory');?>/images/close-icon-mobile-05.png" alt="">
                </div>
                <ul>
                    <li>
                        <a href="<?php echo home_url('/single-origin/');?>">
                            Single Origin
                        </a>
                        <ul>
                            <li>
                                <a href="<?php echo home_url('/black-toraja-slush/');?>">
                                    Black Toraja Slush
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/toraja-v60-shot/');?>">
                                    Toraja V60 Slush
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/aceh-v60-shot/');?>">
                                    Aceh V60 Slush
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/espresso-blends/');?>">
                            Espresso Blends
                        </a>
                        <ul>
                            <li>
                                <a href="<?php echo home_url('/caffe-latte/');?>">
                                    Cafe Latte
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </div>