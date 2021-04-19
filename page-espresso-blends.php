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
                            <?php if( have_rows('products_1') ): ?>
                                <?php while ( have_rows('products_1') ): the_row(); ?>
                                <?php $post_objects = get_sub_field('products');
                                    if( $post_objects ): 
                                        $post = $post_objects;
                                        setup_postdata( $post ); ?>
                                            <div class="item text-center">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <img style="width: 30%;" class="mx-auto" src="<?php the_field('thumbnails') ?>" alt="">
                                                </a>
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <h3 class="text-darkgray text-center mt-lg-3">
                                                        <?php the_field('title') ?>
                                                    </h3>
                                                </a>
                                                <a href="<?php echo get_permalink(); ?>" class="button-products">
                                                    More +
                                                </a>
                                            </div>
                                        <?php wp_reset_postdata();?>
                                    <?php endif;?>
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
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>