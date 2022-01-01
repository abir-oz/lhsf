<div class="col-lg-4">
	<div class="blog_right_sidebar">
		<aside class="single_sidebar_widget search_widget">

			<form class="input-group" action="<?php echo site_url( "/" ) ?>">
				<input type="text" class="form-control" name="s" placeholder="Search Posts">
				<span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="ti-search"></i></button>
                                    </span>
			</form>

			<div class="br"></div>
		</aside>
		<aside class="single_sidebar_widget author_widget">
			<?php

			$args   = array(
				'post_type' => array( 'quotes' ),
			);
			$quotes = new WP_Query( $args );

			if ( $quotes->have_posts() ):
				?>

				<?php while ( $quotes->have_posts() ):
				$quotes->the_post();
				if ( function_exists( "the_field" ) ) : ?>
					<?php
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

					$h_image       = get_field( 'h_image' );
					$h_thumb       = $h_image['sizes'][ $size ];
					$h_name        = get_field( 'h_name' );
					$h_designation = get_field( 'h_designation' );
					$h_quote       = get_field( 'h_quote' );
					?>

					<img class="author_img rounded-circle" src="<?php echo esc_url( $h_thumb ) ?>" alt="">
					<h4><?php echo esc_html( $h_name ) ?></h4>
					<p><?php echo esc_html( $h_designation ) ?></p>
					<p><?php echo esc_html( $h_quote ) ?></p>
					<div class="br"></div>


				<?php endif;
			endwhile;
			endif; ?>

		</aside>

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

			<aside class="single_sidebar_widget popular_post_widget">
				<h3 class="widget_title">নোটিশ</h3>
				<?php while ( $notices->have_posts() ):$notices->the_post(); ?>
					<div class="media post_item">
						<img src="<?php the_post_thumbnail_url( 'tthumb' ); ?>" alt="post">
						<div class="media-body">
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
							</a>
							<p><?php
								$lastmodified = get_the_modified_time( 'U' );
								$posted       = get_the_time( 'U' );
								echo "Posted " . human_time_diff( $posted, current_time( 'U' ) ) . " ago";
								echo "</br>";
								if ( $lastmodified > $posted ) {
									echo "Edited " . human_time_diff( $lastmodified, current_time( 'U' ) ) ." ago";
								}
								?></p>
						</div>
					</div>
				<?php endwhile; ?>
				<div class="br"></div>
			</aside>
		<?php endif; ?>
	</div>

</div>