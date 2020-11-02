<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="theme-color" content="#1e0014">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_enqueue_script('script', get_template_directory_uri() . '/assets/bbb-downloader.min.js', [], '1.0.0'); ?>
    <?php wp_head(); ?>
</head>

<?php
$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');
?>

<body <?php body_class(is_front_page() ? 'fixed-header' : 'fixed-header'); ?>>
    <header>This is the header 2.0</header>