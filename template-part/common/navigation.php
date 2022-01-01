<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="<?php echo site_url(); ?>"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/flhs.png" alt=""
                    height="70"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->


        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">



			<?php

			if ( has_nav_menu( 'topmenu' ) ) {
				$location_name = 'topmenu';
				$locations     = get_nav_menu_locations();
				$menu_id       = $locations[ $location_name ];
				$menu          = wp_get_nav_menu_object( $menu_id );

				$lhsf_menu = wp_nav_menu( array(
					'container'       => 'ul',
					'container_class' => 'menu-' . $menu->slug . '-container' . ' nav navbar-nav menu_nav ml-auto',
					'theme_location'  => 'topmenu',
					'menu_id'         => 'topmenu',
					'menu_class'      => 'nav navbar-nav menu_nav ml-auto',
					'add_li_class'    => 'nav-item',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s<li class="nav-item">
                <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                </a>
            </li></ul>',
					'echo'            => false
				) );

				$lhsf_menu = str_replace( "current-menu-item", "current-menu-item active", $lhsf_menu );
				$lhsf_menu = str_replace( "menu-item-has-children", "menu-item-has-children  submenu dropdown", $lhsf_menu );
				$lhsf_menu = str_replace( "sub-menu", "sub-menu dropdown-menu", $lhsf_menu );


				echo wp_kses_post( $lhsf_menu );
			}





			?>
            
        </div>
    </div>
</nav>