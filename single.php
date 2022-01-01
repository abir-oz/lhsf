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
								the_post_thumbnail_url( 'large' );
							}
							?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 blog_details">
                        <div class="d-flex align-content-start justify-content-start py-3">

							<?php
							if ( ! empty( $pdf_link ) ) {
								echo '<a class="btn btn-success" href="' . $pdf_link . '" target="_blank">পিডিএফ<i class="ti-link"></i></a>';
							}
							?>
                        </div>
                        <h2><?php the_title(); ?></h2>

						<?php the_content(); ?>

                    </div>

                </div>
            </div>
			<?php get_template_part( "template-part/blog/right-col" ); ?>
        </div>
    </div>
</section>


<?php


get_footer();
?>