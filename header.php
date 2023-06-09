<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php
            bloginfo('name');
            if (wp_title('', false)) {
                echo ' | ';
            } else {
                echo bloginfo('description');
            }
            wp_title(''); ?>
    </title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div id="site-wrapper">
        <div id="site-canvas">
            <header id="main-header">
                <!-- Skip to main content -->
                <div>
                    <a href="#main" class="screen-reader-text"> Skip to content </a>
                </div>


            </header>