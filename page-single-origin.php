<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="container-fluid position-relative full-pages-products">
        <div class="pagi-nations">
            <div class="number"></div>
        </div>
        <div class="socmed-links">
            <div class="wrap-links">
                <a class="text-brown d-block" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-brown d-block" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-brown d-block" href="#">
                    <i class="fas fa-globe"></i>
                </a>
            </div>
        </div>
        <div class="row postery">
            <div class="countery d-none">01</div>
            <div class="container-fluid product-pages-wrapper">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="text-brown">
                            <?php the_field('title'); ?>
                        </h1>
                    </div>
                </div>
                <div class="row mt-lg-5">
                    <div class="col-lg-3 pt-5 side-content">
                        <h3 class="text-brown underline-brown-products">
                            <?php the_field('title_section'); ?>
                        </h3>
                        <img class="mb-5 my-lg-4" src="<?php the_field('glyphs_section'); ?>" alt="">
                            <p class="text-white d-none d-lg-block">
                        <?php the_field('details_section'); ?>
                        </p>
                        <p class="text-white d-lg-none d-inline-block pt-5 ml-4">
                            <?php the_field('details_section_mobile'); ?>
                        </p>
                    </div>
                    <div class="col-lg-6 px-lg-0 pb-lg-5 px-5">
                        <div class="background-grey carousel-products-wrapper py-lg-5">
                            <div class="divider d-none d-lg-block">
        
                            </div>
                            <div class="carousel-products owl-theme">
                                <div class="item text-center">
                                    <a href="https://granita.netlify.app/products/details/black-toraja.html">
                                        <img class="w-auto mx-auto" src="../images/items-product-page-10.png" alt="">
                                    </a>
                                    <a href="https://granita.netlify.app/products/details/black-toraja.html">
                                        <h3 class="text-darkgray text-center mt-lg-3">
                                            Black Toraja<br>
                                            Slush
                                        </h3>
                                    </a>
                                    <a href="https://granita.netlify.app/products/details/black-toraja.html" class="button-products">
                                        More +
                                    </a>
                                </div>
                                <div class="item text-center">
                                    <a href="https://granita.netlify.app/products/details/toraja-v60.html">
                                        <img class="w-auto mx-auto" src="../images/vshot-toraja.png" alt="">
                                    </a>
                                    <a href="https://granita.netlify.app/products/details/toraja-v60.html">
                                        <h3 class="text-darkgray text-center mt-lg-3">
                                            Toraja<br>
                                            V60 Shot
                                        </h3>
                                    </a>
                                    <a href="https://granita.netlify.app/products/details/toraja-v60.html" class="button-products">
                                        More +
                                    </a>
                                </div>
                                <div class="item text-center">
                                    <a href="https://granita.netlify.app/products/details/black-toraja.html">
                                        <img class="w-auto mx-auto" src="../images/items-product-page-10.png" alt="">
                                    </a>
                                    <a href="https://granita.netlify.app/products/details/black-toraja.html">
                                        <h3 class="text-darkgray text-center mt-lg-3">
                                            Black Toraja<br>
                                            Slush
                                        </h3>
                                    </a>
                                    <a href="https://granita.netlify.app/products/details/black-toraja.html" class="button-products">
                                        More +
                                    </a>
                                </div>
                                <div class="item text-center">
                                    <a href="https://granita.netlify.app/products/details/toraja-v60.html">
                                        <img class="w-auto mx-auto" src="../images/vshot-toraja.png" alt="">
                                    </a>
                                    <a href="https://granita.netlify.app/products/details/toraja-v60.html">
                                        <h3 class="text-darkgray text-center mt-lg-3">
                                            Toraja<br>
                                            V60 Shot
                                        </h3>
                                    </a>
                                    <a href="https://granita.netlify.app/products/details/toraja-v60.html" class="button-products">
                                        More +
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row postery">
            <div class="countery d-none">02</div>
            <div class="container-fluid product-pages-wrapper">
                <div class="row mt-5">
                    <div class="col-lg-3 pt-5 side-content">
                        <h3 class="text-brown underline-brown-products">
                            <?php the_field('title_section_2'); ?>
                        </h3>
                        <img class="mb-5 my-lg-4" src="<?php the_field('glyphs_section_2'); ?>" alt="">
                        <p class="text-white d-none d-lg-block">
                            <?php the_field('details_section_2'); ?>
                        </p>
                        <p class="text-white d-lg-none d-inline-block pt-5 ml-4">
                            <?php the_field('detail_section_mobile_2'); ?>
                        </p>
                    </div>
                    <div class="col-lg-6 px-lg-0 px-5">
                        <div class="background-grey carousel-products-wrapper py-lg-5">
                            <div class="divider d-none d-lg-block">
        
                            </div>
                            <div class="carousel-products owl-theme">
                                <div class="item text-center">
                                    <a href="https://granita.netlify.app/products/details/aceh-gayo.html">
                                        <img class="w-auto mx-auto" src="../images/vshot-aceh-gayo.png" alt="">
                                    </a>
                                    <a href="https://granita.netlify.app/products/details/aceh-gayo.html">
                                        <h3 class="text-darkgray text-center mt-lg-3">
                                            Aceh Gayo<br>
                                            V60 Shot
                                        </h3>
                                    </a>
                                    <a href="https://granita.netlify.app/products/details/aceh-gayo.html" class="button-products">
                                        More +
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row postery">
            <div class="countery d-none">02</div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>