<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="container-fluid">
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
            <div class="container-fluid product-details-wrapper">
                <div class="row mt-5">
                    <div class="col-lg-12 pt-5 side-content">
                        <img class="my-4 mx-auto d-block img-fluid  image-detail-content" src="<?php the_field('images'); ?>" alt="">
                        <h3 class="text-brown text-center">
                        <?php the_field('title'); ?>
                        </h3>
                        <p class="text-white text-center"><img class="mr-lg-2" src="<?php bloginfo('stylesheet_directory');?>/images/coffee-glyphs-09.png" alt=""> <?php the_field('type'); ?></p>
                        <div class="text-center py-4">
                            <a href="#" class="button-buy">
                                Buy Now +
                            </a>
                        </div>
                        <p class="text-white phar text-center mx-auto pt-lg-4 pb-lg-0 py-4 first-phar">
                          <?php the_field('excerpt'); ?>
                        </p>
                        <p class="text-center read-more-links text-white mx-auto pb-4 pb-lg-5">
                            Read More
                        </p>
                        <p class="text-white phar text-center mx-auto pt-lg-4 pb-lg-5 py-5 more-phar">
                          <?php the_field('full_details'); ?>
                        </p>
                        <div class="row detail-stats mx-auto px-lg-5">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-5  offset-lg-0 offset-1">
                                        <p class="text-white mb-lg-3 mb-0">
                                            Acidity
                                        </p>
                                    </div>
                                    <div class="col-5">
                                      <?php the_field('acidity'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5  offset-lg-0 offset-1">
                                        <p class="text-white mb-lg-3 mb-0">
                                            Aroma
                                        </p>
                                    </div>
                                    <div class="col-5">
                                      <?php the_field('aroma'); ?> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5  offset-lg-0 offset-1">
                                        <p class="text-white mb-lg-3 mb-0">
                                            Aftertaste
                                        </p>
                                    </div>
                                    <div class="col-5">
                                      <?php the_field('aftertaste'); ?> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5  offset-lg-0 offset-1">
                                        <p class="text-white mb-lg-3 mb-0">
                                            Sweetness
                                        </p>
                                    </div>
                                    <div class="col-5">
                                      <?php the_field('sweetness'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-5  offset-lg-0 offset-1">
                                        <p class="text-white mb-lg-3 mb-0">
                                            Body
                                        </p>
                                    </div>
                                    <div class="col-5">
                                      <?php the_field('body'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5  offset-lg-0 offset-1">
                                        <p class="text-white mb-lg-3 mb-0">
                                            Clean Cup
                                        </p>
                                    </div>
                                    <div class="col-5">
                                      <?php the_field('clean_clup'); ?> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5  offset-lg-0 offset-1">
                                        <p class="text-white mb-lg-3 mb-0">
                                            Balance
                                        </p>
                                    </div>
                                    <div class="col-5">
                                      <?php the_field('balance'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row postery">
            <div class="countery d-none">01</div>
        </div>
    </div>
    <div class="container-fluid py-5 background-lightgrey product-details-bottom">
        <div class="row">
            <div class="col-lg-3 ml-lg-5 ml-3">
                <h3 class="text-brown underline-brown-products">
                    Our Single<br>
                    Origin Products
                </h3>
            </div>
            <div class="col-lg-8">
                <div class="carousel-bottom owl-theme">
                <?php
                      $params = array('post_type' => 'single-origin' , 'order' => 'DESC');
                      $single_origin = new WP_Query($params);
                        if($single_origin->have_posts()){
                        while ($single_origin->have_posts()) : $single_origin->the_post();?>
                    <div class="item">
                        <div class="row my-lg-0 mt-5 mb-3">
                            <div class="col-6">
                                <a href="<?php echo get_permalink(); ?>">
                                    <img src="<?php the_field('bottom_thumbnails'); ?>" alt="">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="<?php echo get_permalink(); ?>">
                                <h5 class="text-darkgrey title-product">
                                <?php the_field('title'); ?>
                                </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php 	endwhile;
                    }?>
                </div>
                
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php get_footer(); ?> 