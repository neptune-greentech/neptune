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

    <section>
        <div class="container">

            <h2>Theme based on Gutenberg editor</h2>

        </div>
    </section>