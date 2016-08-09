<?php /* Static Name: Navigation */ ?>
<!-- BEGIN MAIN NAVIGATION -->

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#duckdiver-navbar-collapse-1" aria-expanded="false"> 
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
              </button>
              <?php $navbar_brand = of_get_option('navbar_brand_chooser');
				if ($navbar_brand === 'image_navbar_brand'): ?>
						<?php if ( of_get_option( 'navbar_brand_img' ) ) : ?>
                        <a class="navbar-brand visible-xs" rel="home" href="<?php echo get_home_url();?>" title="<?php echo get_bloginfo(); ?>">
                            <img class="visible-xs" src="<?php echo of_get_option('navbar_brand_img') ?>">
                        </a>
                        <?php endif; ?>
                    <?php else :?>
                    <a class="navbar-brand text-brand visible-xs" rel="home" href="<?php echo get_home_url();?>" title="<?php echo get_bloginfo(); ?>">
            	        <?php echo of_get_option('navbar_brand_text') ?>
               		</a>
			<?php endif; ?>
         </div>
         
      <?php if (has_nav_menu('header_menu')) {
           wp_nav_menu( array(
                'menu'              => 'header_menu',
                'theme_location'    => 'header_menu',
                'depth'             => 3,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        		'container_id'      => 'duckdiver-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
				));
        } else {
            echo '<ul class="nav navbar-nav">';
                $ex_page = get_page_by_title( 'Privacy Policy' );
                if ($ex_page === NULL) {
                    $ex_page_id = '';
                } else {
                    $ex_page_id = $ex_page->ID;
                }
                wp_list_pages( array(
                    'depth'    => 0,
                    'title_li' => '',
                    'exclude'  => $ex_page_id
                    )
                );
            echo '</ul>';
        } ?>
  	</div><!-- /.container-fluid -->
</nav>
<!-- END MAIN NAVIGATION -->