<?php

// Load parent theme stylesheet
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( 'parent-style' )
  );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


// Modify big picture
add_action( 'zerif_custom_background_args', function() {
  return array(
    'default-color' => 'ffffff',
    'default-image' => get_stylesheet_directory_uri() . "/images/bg.jpg",
  );
});


function team_shortcode( $atts ) {
  $atts = shortcode_atts( array(
    'image' => 'http://www.wallyjob.dev/wp-content/themes/zerif-lite/images/product-bg.png',
    'name' => 'default baz',
    'occupation' => '',
    'linkedin' => '',
    'twitter' => '',
    'facebook' => ''
  ), $atts, 'team' );

  $return = '<div class="col-lg-3 col-sm-3 team-box" style="margin-top: 50px; text-align: center;"><div class="team-member"><figure class="profile-pic">';
  $return .= '<img src="' . $atts['image'] . '" alt="' . $atts['name'] . '">';
  $return .= '</figure><div class="member-details"><h5 class="dark-text red-border-bottom">' . $atts['name'] . '</h5>';
  $return .= '<div class="position">' . $atts['occupation'] . '</div></div>';

  $return .= '<div class="social-icons"><ul>';
  if ($atts['facebook'] != '') {
    $return .= '<li><a href="'.$atts['facebook'].'"><i class="fa fa-facebook"></i></a></li>';
  }
  if ($atts['twitter'] != '') {
    $return .= '<li><a href="'.$atts['twitter'].'"><i class="fa fa-twitter"></i></a></li>';
  }
  if ($atts['linkedin'] != '') {
    $return .= '<li><a href="'.$atts['linkedin'].'"><i class="fa fa-linkedin"></i></a></li>';
  }
  $return .= '</ul></div>';
  $return .= '</div></div></div>';
  return $return;
}
add_shortcode( 'team', 'team_shortcode' );