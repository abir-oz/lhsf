<!--================ Start Events Area =================-->
<?php
$paged   = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$maxpost = 4;
$args    = array(
	'post_type'      => 'notices',
	'posts_per_page' => $maxpost,
);

// The Query
$notices = new WP_Query( $args );




// The Loop
if ( $notices->have_posts() ) : ?>

    <div class="events_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3 text-white">নোটিশ</h2>
                        <p>
                            স্কুলের কার্যাবলীর নোটিশসমূহ
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">

				<?php while ( $notices->have_posts() ): $notices->the_post() ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="single_event position-relative">
                            <div class="event_thumb">

                                <img src="<?php the_post_thumbnail_url( 'notice_thumb' ); ?>" alt=""/>
                            </div>
                            <div class="event_details">
                                <div class="d-flex mb-4">
                                    <div class="date"><span><?php echo get_the_date('j') ?></span> <?php echo get_the_date('M') ?></div>

                                    <div class="time-location">
                                        <p>
                                            <span class="ti-time mr-2"></span> <?php echo get_the_date('g a')?>
                                        </p>
                                        <p>
                                            <span class="ti-target mr-2"></span> <a href="<?php echo get_post_type_archive_link( 'notices' ); ?>" class="event-link">
                                                নোটিশ </a>
                                        </p>
                                    </div>
                                </div>
                                <p>

									<?php the_title(); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="primary-btn rounded-0 mt-3">বিস্তারিত
                                    দেখুন</a>
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>

				<?php if ( $notices->max_num_pages > 1 ): ?>
                    <div class="col-lg-12">
                        <div class="text-center pt-lg-5 pt-3">
                            <a href="<?php echo get_post_type_archive_link( 'notices' ); ?>" class="event-link">
                                সব ইভেন্ট একসাথে <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/next.png"
                                        alt=""/>
                            </a>
                        </div>
                    </div>
				<?php endif; ?>

            </div>
        </div>
    </div>
<?php endif ?>
<!--================ End Events Area =================-->