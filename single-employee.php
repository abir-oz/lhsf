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


<?php

    
	if ( class_exists( 'Attachments' ) ) :
    	$attachments = new Attachments('employee');
    	    if ( $attachments->exist() ) : ?>
    	    <?php while ( $attachment = $attachments->get() ) : ?>

    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="<?php echo $attachments->src( 'large' ); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 blog_details">
                            <div class="d-flex align-content-start justify-content-start py-3">
                            </div>
                            <h2>
                                                        <?php echo esc_html( $attachments->field( 'name' ) ) ?>
                                                        <small> <?php 
                                                        if($attachments->field( 'edesignation' ))
                                                        {
                                                            echo '-'. esc_html( $attachments->field( 'designation' ) );
                                                        } 
                                                        
                                                        ?></small></h2>
    
    						<p><?php echo esc_html( $attachments->field( 'details' ) ) ?> </p>
    
                        </div>
    
                    </div>
                </div>
    			<?php get_template_part( "template-part/blog/right-col" ); ?>
            </div>
        </div>
    </section>


<?php



endwhile;

endif;
endif;

get_footer();
?>