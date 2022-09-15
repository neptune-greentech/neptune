<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acloud - <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div data-scroll-container>
		<?php include_once locate_template('/components/nav.php'); ?>

		<header class="hero hero-full" data-scroll-section>
			<div class="container hero_container">
				<h1>Solutions de réduction des nuisances sonores, <span>performantes</span> et <span>durables</span></h1>
				<div class="bg_acloud">
					<img src="<?php echo get_template_directory_uri() . '/src/images/nuage_home.png';?>" alt="Nuage">
					<a class="btn btn-primary" href="">Voir nos solutions
						<svg width="26.945" height="18.255" viewBox="0 0 26.945 18.255">
							<g id="Groupe_329" data-name="Groupe 329" transform="translate(2 2.823)">
								<line id="Ligne_1" data-name="Ligne 1" x2="20.815" transform="translate(0 6.316)" fill="none" stroke="#f0f0f0" stroke-linecap="round" stroke-width="4"/>
								<path id="Tracé_1" data-name="Tracé 1" d="M1194.727,920.5l7.092,6.3-7.092,6.3" transform="translate(-1178.873 -920.499)" fill="none" stroke="#f0f0f0" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
							</g>
						</svg>
					</a>
				</div>
			</div>
		</header>
