<?php get_header();

the_post();
$pdf_link = get_post_meta( get_the_ID(), 'pdf_file', true );


$post_type         = get_post_type( get_the_ID() );
$post_type_archive = get_post_type_archive_link( $post_type );
$pt                = get_post_type_object( $post_type );
$pt_name           = $pt->labels->name;

?><!--================Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2><?php the_title(); ?></h2>
                        <div class="page_link">
                            <a href="<?php echo site_url(); ?>">হোম</a>
                            <a href="<?php echo $post_type_archive; ?>"><?php echo $pt_name; ?></a>
                            <a href=""><?php the_title(); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail_url( 'full' );
							}
							?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 blog_details">
                        <div class="d-flex align-content-start justify-content-start py-3">

							<?php
							if ( ! empty( $pdf_link ) ) {
								echo '<a class="btn btn-success" href="' . $pdf_link . '" target="_blank">পিডিএফ

<i class="ti-link"></i></a>';
							}

							?>

                        </div>
                        <h2><?php the_title(); ?></h2>

						<?php the_content(); ?>

                    </div>

                </div>
            </div>
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
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<?php
get_footer();
?>