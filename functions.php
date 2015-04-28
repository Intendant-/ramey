<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );

wp_register_script( 'fancy_redirect', 'http://i-occasions.com/wp-content/themes/x-child/fancyRedirect.js' );
wp_enqueue_script( 'fancy_redirect' );

// Additional Functions
// =============================================================================

function fancy_redirect() {
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
	if ( (strpos($actual_link, '/product/') !== false) && (strpos(actual_link, '?start_customizing=yes') === false)) {
		header('Location: '. $actual_link . '?start_customizing=yes');
	}
}
