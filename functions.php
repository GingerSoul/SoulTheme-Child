<?php
//* Code goes here

add_filter( 'auth_cookie_expiration', 'keep_me_logged_in_for_1_year' );

function keep_me_logged_in_for_1_year( $expirein ) {
    return 31556926; // 1 year in seconds
}