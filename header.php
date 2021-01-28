<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neptune - <?php the_title(); ?></title>
    <?php wp_head() ?>
</head>

<body>

    <?php include_once locate_template('/components/nav.php'); ?>

    <?php include_once locate_template('/components/hero.php'); ?>

    <?php include_once locate_template('/components/layering-title.php'); ?>

    <?php include_once locate_template('/components/cols3-title.php'); ?>

    <?php include_once locate_template('/components/cols4-title.php'); ?>

    <?php include_once locate_template('/components/gallery.php'); ?>