<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="container-fluid position-relative">
                <div class="pagi-nations">
                    <div class="number"></div>
                </div>
                <div class="socmed-links">
                    <div class="wrap-links">
                        <a class="text-brown d-block my-lg-2" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-brown d-block my-lg-2" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-brown d-block my-lg-2" href="#">
                            <i class="fas fa-globe"></i>
                        </a>
                    </div>
                </div>
                <div class="row postery">
                    <div class="countery d-none">01</div>
                    <div class="container-fluid banner-home">
                        <div class="row">
                            <div class="background">
                                <div class="col-lg-12 px-0 px-lg-3">
                                    <div class="carousel-homebanner owl-theme">
                                        <?php if( have_rows('home_banner_content') ): ?>
                                            <?php while ( have_rows('home_banner_content') ): the_row(); ?>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-12 text-center">
                                                            <div class="content-desc">
                                                                <h1 class="text-brown">
                                                                    <?php the_sub_field('title'); ?>
                                                                </h1>
                                                                <hr class="w-25  bg-white my-4">
                                                                <p class="text-white d-none d-lg-block">
                                                                    <?php the_sub_field('details'); ?>
                                                                </p>
                                                                <p class="text-white d-lg-none">
                                                                    <?php the_sub_field('mobile'); ?>
                                                                </p>
                                                            </div>
                                                            <img class="img-product d-none d-lg-block" src="<?php the_sub_field('images'); ?>" alt="">
                                                            <img class="d-lg-none img-product" src="<?php the_sub_field('images_mobile'); ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row postery">
                    <div class="countery d-none">02</div>
                    <div class="container-fluid origin-home">
                        <div class="row">
                    <div class="col-lg-12 px-0">
                        <div class="background">
                            <div class="ornament_top  move-top ">
                                <img src="https://granita.netlify.app/images/ornaments-07.png" alt="">
                            </div>
                            <div class="image-content text-center">
                                <h1 class="text-lightgray move-top title-origin d-none d-lg-block">
                                <?php the_field('title_origin_section'); ?>
                                </h1>
                                <h1 class="text-lightgray move-top title-origin d-lg-none">
                                    The Origin<br>
                                    of Our Coffee
                                </h1>
                                <div class="bubble-origin">
                                    <p class="mb-0 title-content-2 font-lato-regular">
                                    <?php the_field('title_content_1'); ?>
                                    </p>
                                </div>
                                <div class="bubble-origin-expand">
                                    <div class="close-bubble">
                                        <i class="fas fa-times"></i>
                                    </div>
                                    <p class="mb-lg-0 text-left">
                                    <?php the_field('details_content_1'); ?>
                                    </p>
                                </div>
                                <div class="bubble-origin-2">
                                    <p class="mb-0 title-content-2 font-lato-regular">
                                    <?php the_field('title_content_2'); ?>
                                    </p>
                                </div>
                                <div class="bubble-origin-2-expand">
                                    <i class="fas fa-times close-bubble-2"></i>
                                    <p class="mb-lg-0 text-left content-detail-2">
                                    <?php the_field('details_content_2'); ?>
                                    </p>
                                </div>
                                <img class="content d-none d-lg-block" src="https://granita.netlify.app/images/origin-image-content-09.png" alt="">
                                <img class="content d-lg-none" src="https://granita.netlify.app/images/origin-image-content-09-mobile.png" alt="">
                                <img class="coffee-coffee d-none d-lg-block" src="https://granita.netlify.app/images/coffe-coffe.png" alt="">
                                <img class="coffee-coffee d-lg-none" src="https://granita.netlify.app/images/bg-bercak-origin-mobile.png" alt="">
                            </div>
                            <div class="ornament_bottom  move-top">
                                <img src="https://granita.netlify.app/images/asset-ornamen-kopi.png" alt="">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="row postery">
                    <div class="countery d-none">03</div>
                    <div class="container-fluid background-grey products">
                        <div class="row w-85 mx-auto">
                            <div class="col-lg-6 text-center pt-5">
                                <h1 class="text-gray title-our-products">
                                <?php the_field('title_products'); ?>
                                </h1>
                            </div>
                        </div>
                        <div class="row w-85 my-5 mx-auto">
                            <div class="col-lg-6 text-center">
                                <div class="position-relative wrapper wrapper-first">
                                <img id="product-img-first" class="product-img first move-top" src="https://granita.netlify.app/images/asset-toraja.png" alt="">
                                <img class="product-ornament first product-ornament-first move-top" src="https://granita.netlify.app/images/asset-2-toraja.png" alt="">
                                </div>
                                <div class="button-detail-products">
                                    <a href="https://granita.netlify.app/products/single-origin.html" class="button-products">
                                        Single Origin +
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="position-relative wrapper wrapper-second">
                                    <img class="product-img second move-top" src="https://granita.netlify.app/images/asset-3-cafe-latte.png" alt="">
                                    <img class="product-ornament product-ornament-second second move-top" src="https://granita.netlify.app/images/asset-4-cafe-latte.png" alt="">
                                </div>
                                <div class="button-detail-products">
                                    <a href="https://granita.netlify.app/products/espresso-blends.html" class="button-products button-products-second">
                                        Espresso Blends +
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row postery">
                    <div class="countery d-none">04</div>
                    <div class="container-fluid pb-5 granita-ideas">
                        <div class="row text-center">
                            <div class="col-lg-12 pt-5">
                                <h1 class="text-brown mt-lg-2 mb-lg-4 mt-5 mb-5">
                                    Granita Ideas
                                </h1>
                                <img src="https://granita.netlify.app/images/ornament-granita-ideas-05.png" class="ornament-top move-top">
                            </div>
                        </div>
                        <div class="row w-75 mx-auto text-center">
                            <div class="col-lg-4 col-6 py-lg-4 py-3">
                                <img class="img-fluid" src="https://granita.netlify.app/images/granita_ideas_content-05.jpg" alt="">
                            </div>
                            <div class="col-lg-4 col-6 py-lg-4 py-3">
                                <img class="img-fluid" src="https://granita.netlify.app/images/granita_ideas_content-06.jpg" alt="">
                            </div>
                            <div class="col-lg-4 col-6 py-lg-4 py-3">
                                <img class="img-fluid" src="https://granita.netlify.app/images/granita_ideas_content-07.jpg" alt="">
                            </div>
                            <div class="col-lg-4 col-6 py-lg-4 py-3">
                                <img class="img-fluid" src="https://granita.netlify.app/images/granita_ideas_content-08.jpg" alt="">
                            </div>
                            <div class="col-lg-4 col-6 py-lg-4 py-3">
                                <img class="img-fluid" src="https://granita.netlify.app/images/granita_ideas_content-09.jpg" alt="">
                            </div>
                            <div class="col-lg-4 col-6 py-lg-4 py-3">
                                <img class="img-fluid" src="https://granita.netlify.app/images/granita_ideas_content-10.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row postery">
                    <div class="countery d-none">05</div>
                </div>
        </div>
<?php endwhile; ?>
<?php get_footer(); ?>