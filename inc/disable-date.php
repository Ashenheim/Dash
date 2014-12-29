<?php

function deny_post_date_change( $data, $postarr ) {
  unset( $data['post_date'] );
  unset( $data['post_date_gmt'] );
  return $data;
}
add_filter( 'wp_insert_post_data', 'deny_post_date_change', 0, 2 );

function hide_publication_date_elements() { ?>
  <style type="text/css">
    a.edit-timestamp, #timestampdiv {display:none;}
  </style><?php
}
add_action( 'admin_enqueue_scripts', 'hide_publication_date_elements' );