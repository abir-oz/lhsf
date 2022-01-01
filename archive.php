<?php get_header();


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
                        <h2><?php echo $pt_name ?></h2>
                        <div class="page_link">
                            <a href="<?php echo site_url(); ?>">হোম</a>
                            <a href="<?php echo $post_type_archive; ?>"><?php echo $pt_name; ?></a>
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">

						<?php while ( have_posts() ):the_post() ?>
                            <article class="row blog_item">
                                <div class="col-md-12">
                                    <div class="blog_post">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                        <div class="blog_details">
                                            <a href="<?php the_permalink(); ?>">
                                                <h2><?php the_title(); ?></h2>
                                            </a>
                                            <?php the_excerpt(); ?>
                                            <a href="<?php the_permalink(); ?>" class="blog_btn">পুরো পড়ূন</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
						<?php endwhile; ?>

                        <?php if ($wp_query->max_num_pages>1): ?>
                        <div class="row">
                            <div class="col">
                                <div class="posts_paginations text-center">
                                    <a href="<?php echo next_posts( get_max_page_number(), '%link' ); ?>" id="loadmore"
                                       class="btn btn-danger py-2 px-3"><?php _e( 'Load More', 'acca' ); ?></a>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>


                    </div>
                </div>
				<?php get_template_part( "template-part/blog/right-col" ); ?>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

<?php
get_footer();
?>