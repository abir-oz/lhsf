<?php // WP_Query arguments
$paged   = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$maxpost = 6;
$args    = array(
	'post_type'      => 'gallery',
	'paged'          => $paged,
	'posts_per_page' => $maxpost,
);

// The Query
$gallery = new WP_Query( $args );

// The Loop
if ( $gallery->have_posts() ) : ?>

    <section class="trainer_area lhsf_gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">ফটো গ্যালারী</h2>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center d-flex align-items-center">
				<?php
				while ( $gallery->have_posts() ) : $gallery->the_post();
					if ( class_exists( 'Attachments' ) ) :
						?>

						<?php

						$attachments = new Attachments( 'gallery' );
						?>
						<?php if ( $attachments->exist() ) : ?>

						<?php $totalimg = $attachments->total();
						if ( $totalimg > 1 ) {
							$imgstr = 'Images';
						} else {
							$imgstr = 'Image';
						}

						?>

                        <div class="col-lg-4 col-md-6 col-sm-12 single-trainer">


                            <div class="gallery">


                                <div class="gallery-item">
                                    <div class="gallery-item-inner">
										<?php $img_id = $attachments->id( 0 ); ?>
                                        <div class="thumb">
                                            <img src="<?php echo $attachments->src( 'g_thumb', 0 ); ?>"
                                                 alt="">
                                        </div>
                                        <div class="content">
                                            <p class="d-flex align-items-center">

												<?php


												$postTitle  = get_the_title();
												$postTitles = trim( $postTitle, ' ' );

												$titleLen = strlen( $postTitles );

												if ( $titleLen > 13 ) {

													$titleR = substr( $postTitles, 0, 12 );

													echo $titleR . '...';
												} else {
													echo $postTitles;
												}

												?>
                                                <a href="<?php echo $attachments->src( 'full', 0 ); ?>"
                                                   class="gallery-thumb"
                                                   title="
                                    <?php
												   $title   = $attachments->field( 'title', 0 );
												   $caption = $attachments->field( 'caption', 0 );

												   if ( ! empty( $title ) ) {

													   echo $title;
												   } else {
													   echo $postTitle;
												   }
												   if ( ! empty( $caption ) ) {
													   echo '||' . $caption;
												   }
												   ?>"><?php echo $totalimg . ' ' . $imgstr ?></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="gallery-hidden">
                                    <div class="gallery-item">
                                        <div class="gallery-item-inner">
											<?php while ( $attachment = $attachments->get() ) :
												if ( $attachments->id() == $img_id ) {
													continue;
												}

												?>
                                                <div class="thumb">
                                                    <img src="<?php echo $attachments->src( 'full' ); ?>"
                                                         alt="">
                                                </div>
                                                <div class="content">
                                                    <p class="d-flex align-items-center"> <?php the_title(); ?>

                                                        <a href="<?php echo $attachments->src( 'full' ); ?>"
                                                           class="gallery-thumb"
                                                           title="
                                        <?php
														   $title   = $attachments->field( 'title' );
														   $caption = $attachments->field( 'caption' );

														   if ( ! empty( $title ) ) {

															   echo $title;
														   } else {
															   echo $postTitle;
														   }
														   if ( ! empty( $caption ) ) {
															   echo '||' . $caption;
														   }
														   ?>

                                        ">
															<?php echo $totalimg . ' ' . $imgstr ?></a>
                                                    </p>
                                                </div>
											<?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>


					<?php endif;
					endif;
				endwhile; ?>


            </div>
        </div>
    </section>

<?php endif; ?>
