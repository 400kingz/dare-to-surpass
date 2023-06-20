<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<?php

    $args = wp_parse_args($args, [
        'wfPage' => '648915be7442a2bef74b67d8',
        'head' => 'head/front-page',
        'body' => ''
    ]);

?>
<html data-wf-page="<?php echo $args['wfPage'] ?>" data-wf-site="648915bd7442a2bef74b6741" <?php language_attributes(); ?>><head><?php get_template_part( 'template-parts/' . $args['head'] );  ?><?php wp_enqueue_script('jquery'); wp_head(); ?></head>
<body <?php body_class($args["body"]); ?>>
<?php wp_body_open(); ?>
 