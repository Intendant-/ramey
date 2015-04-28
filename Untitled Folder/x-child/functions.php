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



// Additional Functions
// =============================================================================

 /*-----------------------------------------------*/
/* Redirects To "Landing" After Login */
/*-----------------------------------------------*/

add_filter( 'login_redirect', 'ckc_login_redirect' );
function ckc_login_redirect() {
    
    return home_url( '/landing/' );
}

/*-----------------------------------------------*/
/* Only Allow Admins Into The Admin Area */
/*-----------------------------------------------*/
function only_admins_login_area( $redirect_to, $request, $user ) {
    global $user;
    if ( isset( $user->roles ) && is_array( $user->roles ) ) 
    {
        //check for admins
        if ( in_array( 'administrator', $user->roles ) ) 
        {
            // Redirect to default admin area
            return $redirect_to;
        }
    }

    return home_url();
}

add_filter( 'login_redirect', 'only_admins_login_area', 10, 3 );
