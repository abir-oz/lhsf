<?php
$args = array(
	'post_type'      => array( 'about-lhsf' ),
	'posts_per_page' => 1,
);
$lhsf = new WP_Query( $args );

?>

<section class="home_banner_area">
    <div class="overlay"></div>
    <div class="banner_inner">
        <div class="container">
            <div class="row">
				<?php
				if ( $lhsf->have_posts() ):
					while ( $lhsf->have_posts() ):$lhsf->the_post()
						?>
                        <div class="col-lg-12">
                            <div class="banner_content text-center">
                                <h2 class="text-uppercase mt-4 mb-3 text-white">
									<?php the_title(); ?>
                                </h2>
                                <p class="text-white">

								<?php echo get_the_excerpt(); ?>
                                </p>
                                <div>
                                    <a href="<?php the_permalink(); ?>" class="primary-btn ml-sm-3 ml-0">বিস্তারিত
                                        দেখুন</a>
                                </div>
                            </div>
                        </div>
					<?php
					endwhile;
				endif; ?>
            </div>
        </div>
    </div>
</section>

