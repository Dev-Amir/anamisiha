<?php
/**
 * The template for displaying the header
 *
 */

defined('ABSPATH') || exit; // Exit if accessed directly

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="manifest" href="<?php echo get_template_directory_uri() . DIRECTORY_SEPARATOR ?>manifest.json"/>
    <meta name="theme-color" content="#2c2e32">

    <!-- icon for ios feature -->
    <link rel="apple-touch-icon"
          href="<?php echo get_template_directory_uri() . DIRECTORY_SEPARATOR ?>pwa-icon/icon-192.png" sizes="192x192"/>
    <link rel="apple-touch-icon"
          href="<?php echo get_template_directory_uri() . DIRECTORY_SEPARATOR ?>pwa-icon/icon-512.png" sizes="512x512"/>


    <?php wp_head(); ?>
</head>

<body id="tie-body" <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="background-overlay">
    <div id="tie-container" class="site tie-container">

        <div id="pwa-banner" style="
    padding: 13px 0;
    text-align: center;
    width: 100%;
    background: #ececec;
    position: fixed;
    left: 0;
    bottom: 0;
    z-index: 10000;
    display: none;
">
            <a href="#" style="font-weight: bold !important;font-size: 16px">نصب اپلیکیشن آنامیسی ها</a>
        </div>

        <?php do_action('TieLabs/before_wrapper'); ?>

        <div id="tie-wrapper">

<?php

TIELABS_HELPER::get_template_part('templates/header/load');

do_action('TieLabs/before_main_content');
