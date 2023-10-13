<?php
/*
*Plugin Name:wpacademy
*Plugin URI:https://wpacademy.pk
*Author:wpacademy
*Author URI:https://wpacademy.pk
*Description: simple hello world
*/

function wpacademy_litttle_filter_example2($words){
    return 10;
}
add_filter('excerpt_length','wpacademy_litttle_filter_example2');

// function wpacademy_litttle_filter_example($more){
//     $more='<a href="'.get_the_permalink().'">more</a>';
//     return $more;
// }
// add_filter('excerpt_more','wpacademy_litttle_filter_example');
function wpdocs_excerpt_more2( $more ) {
    return sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
          esc_url( get_permalink( get_the_ID() ) ),
          sprintf( __( 'Continue reading %s', 'wpdocs' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more2' );