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
	<?php include_once locate_template('/components/bar.php'); ?>
    <?php include_once locate_template('/components/nav.php'); ?>

	<header class="hero hero-full">
		<div class="container hero_container">

			<p><?php bloginfo('description'); ?></p>
			<h1><?php bloginfo('name'); ?></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non sapien tincidunt, suscipit metus sed, hendrerit mi. Ut commodo tristique.</p>

		</div>
	</header>