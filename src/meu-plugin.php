<?php
/**
 * * Plugin Name: Meu Plugin
 */

 function my_content_footer( $content ) {
  if(is_single()){
    return $content . '<p>Thank you for visiting us.</p>';
  }
 }

 add_filter('the content', 'my_content_footer');