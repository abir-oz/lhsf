

			<?php

			$args   = array(
				'post_type' => array( 'quotes' ),
			);
			$quotes = new WP_Query( $args );

			if ( $quotes->have_posts() ):
				?>
<section class="trainer_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3">সভাপতি ও প্রধান-শিক্ষকের বানী</h2>
                </div>
            </div>
        </div>


        <div class="row justify-content-center d-flex align-items-center">


				<?php while ( $quotes->have_posts() ):$quotes->the_post();
				if ( function_exists( "the_field" ) ) : ?>
					<?php
					$size = 'g_thumb'; // (thumbnail, medium, large, full or custom size)

					$h_image       = get_field( 'h_image' );
					$h_thumb = $h_image['sizes'][ $size ];
					$h_name        = get_field( 'h_name' );
					$h_designation = get_field( 'h_designation' );
					$h_quote       = get_field( 'h_quote' );
					$h_email       = get_field( 'h_email' );
					$h_facebook       = get_field( 'h_facebook' );


					$c_image       = get_field( 'c_image' );
					$c_thumb = $c_image['sizes'][ $size ];
					$c_name        = get_field( 'c_name' );
					$c_designation = get_field( 'c_designation' );
					$c_quote       = get_field( 'c_quote' );
					$c_email       = get_field( 'c_email' );
					$c_facebook       = get_field( 'c_facebook' );


					?>


                    


                    <div class="col-lg-4 col-md-6 col-sm-12 single-trainer">
                        <div class="w-100 thumb d-flex justify-content-sm-center">
                            <img class="img-fluid"
                                 src="<?php echo esc_url($c_thumb);?>" alt=""/>
                        </div>
                        <div class="meta-text text-sm-center">
                            <h4><?php echo esc_html($c_name);?></h4>
                            <p class="designation"><?php echo esc_html($c_designation);?></p>
                            <div class="mb-4">
                                <p>
	                                <?php echo esc_html($c_quote);?>
                                </p>
                            </div>
                            <div class="align-items-center justify-content-center d-flex">
                                <a href="mailto:<?php echo esc_html($c_email);?>"><i class="ti-email"></i></a>
                                <a href="<?php echo esc_url($c_facebook);?>"><i class="ti-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 single-trainer">
                        <div class="thumb d-flex justify-content-sm-center">
                            <img class="img-fluid"
                                 src="<?php echo esc_url($h_thumb);?>" alt=""/>
                        </div>
                        <div class="meta-text text-sm-center">
                            <h4><?php echo esc_html($h_name);?></h4>
                            <p class="designation"><?php echo esc_html($h_designation);?></p>
                            <div class="mb-4">
                                <p>
	                                <?php echo esc_html($h_quote);?>
                                </p>
                            </div>
                            <div class="align-items-center justify-content-center d-flex">
                                <a href="mailto:<?php echo esc_html($h_email);?>"><i class="ti-email"></i></a>
                                <a href="<?php echo esc_url($h_facebook);?>"><i class="ti-facebook"></i></a>
                            </div>
                        </div>
                    </div>

				<?php endif;
			endwhile;
			
			?>
        </div>
    </div>
</section>

<?php
endif;