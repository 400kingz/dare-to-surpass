<?php


$args = [
    'wfPage' => '648915be7442a2bef74b67da',
    'body' => 'body',
    'head' => 'head/single-project',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('single-project');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'single-project' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/401',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('single-project');
}

get_footer('', $args);
