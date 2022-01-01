<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>সাইট নেভিগেশান</h4>

				<?php
				if ( has_nav_menu( 'footermain' ) ) {
					$lhsf_menu = wp_nav_menu( array(
						'container'      => 'ul',
						'theme_location' => "footermain",
						'menu_id'        => 'footermain',
						'depth' => 1,
					) );

					echo wp_kses_post( $lhsf_menu );
				}

				?>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>সাইট কুইক লিংকস্‌</h4>
	            <?php
	            if ( has_nav_menu( 'footersec' ) ) {
		            $lhsf_menu = wp_nav_menu( array(
			            'container'      => 'ul',
			            'theme_location' => "footersec",
			            'menu_id'        => 'footersec',
			            'depth' => 1,
		            ) );

		            echo wp_kses_post( $lhsf_menu );
	            }

	            ?>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>ফিচার লিংকসমূহ</h4>
	            <?php
	            if ( has_nav_menu( 'footerthird' ) ) {
		            $lhsf_menu = wp_nav_menu( array(
			            'container'      => 'ul',
			            'theme_location' => "footerthird",
			            'menu_id'        => 'footerthird',
			            'depth' => 1,
		            ) );

		            echo wp_kses_post( $lhsf_menu );
	            }

	            ?>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>গুরুত্বপূর্ণ রিসোর্স লিংক</h4>
	            <?php
	            if ( has_nav_menu( 'footerfourth' ) ) {
		            $lhsf_menu = wp_nav_menu( array(
			            'container'      => 'ul',
			            'theme_location' => "footerfourth",
			            'menu_id'        => 'footerfourth',
                        'depth' => 1,
		            ) );

		            echo wp_kses_post( $lhsf_menu );
	            }
	            ?>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-center align-items-center">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">

                &copy;২০২১
                ফেনী ল্যাবরেটোরী হাই স্কুল | সর্বস্বত্ব সংরক্ষিত
            </p>
            <div class="col-lg-4 col-sm-12 footer-social text-center">
				<?php
		/*		if ( has_nav_menu( 'social' ) ) {
					$lhsf_menu = wp_nav_menu( array(
						'container'      => 'div',
						'theme_location' => "social",
						'menu_id'        => 'social-menu',
						'depth'          => '1'
					) );

					echo wp_kses_post( $lhsf_menu );
				}*/

				$menuLocations = get_nav_menu_locations();


				$menuID = $menuLocations['social'];

				$primaryNav = wp_get_nav_menu_items( $menuID );

				if ( ! empty( $menuID ) ) {
					foreach ( $primaryNav as $navItem ) {

						$title  = $navItem->title;
						$titleW = trim( $title, ' ' );
						$titleC = strtolower( $titleW );
						if ( $titleC == 'facebook' ) {
							?>
                            <a href="<?php echo esc_url( $navItem->url ); ?>" target="_blank"><i
                                        class="ti-facebook"></i></a>
							<?php
						}
						if ( $titleC == 'twitter' ) {
							?>
                            <a href="<?php echo esc_url( $navItem->url ); ?>" target="_blank"><i
                                        class="ti-twitter"></i></a>
							<?php
						}
						if ( $titleC == 'youtube' ) {
							?>
                            <a href="<?php echo esc_url( $navItem->url ); ?>" target="_blank"><i
                                        class="ti-youtube"></i></a>
							<?php
						}
						if ( $titleC == 'linkedin' ) {
							?>
                            <a href="<?php echo esc_url( $navItem->url ); ?>" target="_blank"><i
                                        class="ti-linkedin"></i></a>
							<?php
						}
					}
				}

				?>
            </div>
        </div>
    </div>
</footer>