<?php // WP_Query arguments
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args  = array(
	'post_type' => array( 'teachers' ),
	'paged'     => $paged,
);

// The Query
$teachers = new WP_Query( $args );


// The Loop
if ( $teachers->have_posts() ): 



?>


    <div class="testimonial_area" id="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">শিক্ষকবৃন্দ</h2>
                        <p>
                            শিক্ষকবৃন্দ ও তাদের তথ্য
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="testi_slider owl-carousel">
					<?php while ( $teachers->have_posts() ):$teachers->the_post();
						if ( class_exists( 'Attachments' ) ) :

							// retrieve all Attachments for the 'attachments' instance of post 123
							$attachments = new Attachments( 'teachers' );
							if ( $attachments->exist() ) : ?>

								<?php while ( $attachment = $attachments->get() ) : ?>
                                    <div class="testi_item">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <img src="<?php echo $attachments->src( 'large' ); ?>"/>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="testi_text">
                                                    <h4>
                                                        <?php echo esc_html( $attachments->field( 'name' ) ) ?>
                                                        <small> <?php
                                                        if(!empty($attachments->field( 'tdesignation' ) )){
                                                            
                                                        echo '- '. esc_html( $attachments->field( 'designation' ) ); }?></small>
                                                    </h4>

                                                  
                                                    <a href="<?php the_permalink();  ?>" class="see_more">আরোও দেখুন</a>
								
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endwhile;
							endif;
						endif;
					endwhile; 
				
					?>
                </div>
            </div>
        </div>
    </div>


<?php

endif;
	wp_reset_query();

?>