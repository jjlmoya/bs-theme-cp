<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class('p-wordpress kino'); ?>>
<?php
require_once get_template_directory(dirname(__FILE__)) . '/service/ModelService.php';
new ModelService('ImageOptimizer');
?>
<div>