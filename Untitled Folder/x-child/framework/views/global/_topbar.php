<?php

// =============================================================================
// VIEWS/GLOBAL/_TOPBAR.PHP
// -----------------------------------------------------------------------------
// Includes topbar output.
// =============================================================================

?>

<?php if ( x_get_option( 'x_topbar_display', '' ) == '1' ) : ?>

  <div class="x-topbar">
    <div class="x-topbar-inner x-container max width">
      <?php if ( x_get_option( 'x_topbar_content' ) != '' ) : ?>
      <!-- <p class="p-info"><?php echo x_get_option( 'x_topbar_content' ); ?></p> -->
      <?php endif; ?>
      <?php 
      		$username = "";
      		if ( is_user_logged_in() ) {
				global $current_user;
				$username = $current_user->user_login."/";
			}
		?>
   
           <!--ORIGINAL COOL BLUE CODE: 
      <p class="p-info"><a href="<?php if($username) : ?>/members/<?php echo $username ?><?php else : ?><?php echo wp_login_url( '/landing/' ); ?> <?php endif; ?>"><img src="http://i-occasions.com/wp-content/uploads/2015/01/i-occasions_login21.png" alt="Login" ><br></a></p> 
      -->
      
      <!-- BG CODE: -->
      <?php

if ( has_nav_menu( 'footer' ) ) :
  wp_nav_menu( array(
    'theme_location' => 'footer',
    'container'      => false,
    'menu_class'     => 'x-nav',
    'depth'          => 1
  ) );
else :
  echo '<ul class="x-nav"><li><a href="' . home_url( '/' ) . 'wp-admin/nav-menus.php">Assign a Menu</a></li></ul>';
endif;

?>
       <p class="p-info"><?php x_get_view( 'global', '_nav', 'footer' ); ?></p>
       
       <!-- END BG CODE: -->
  
      
    
      
      <?php x_social_global(); ?>
    </div>
  </div>

<?php endif; ?>

