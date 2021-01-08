<?php

/**
 * This table is needed to send customizer values to js via wp_localize_script in the inc/enqueue.php file
 */

$neptuneCustomVars = [
	// Colors
	'--background-color' => get_theme_mod('neptune_background_color')
];