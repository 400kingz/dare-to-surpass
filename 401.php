<?php


$args = [
    'wfPage' => '648915be7442a2bef74b67d9',
    'body' => '',
    'head' => 'head/401',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('401');
}
     
get_header('', $args);

udesly_get_content_template( '401' );

$args = [
  'footer' => 'footer/401',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('401');
}

get_footer('', $args);
