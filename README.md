# Neptune Wordpress theme

- [Development](#development)
	- [Custom Customizer panels, sections & controls](#custom-customizer-panels-sections-&-controls)
		- [Registration](#registration)
		- [Controls linked to the css](#controls-linked-to-the-css)

## Development

*Here are some information for development purpose.*


### Custom Customizer panels, sections & controls

#### Registration

Neptune's custom customizer panels, sections & controls are defined in the `/config/customizer` folder.

Go to the `/config/customizer/register.php` to register a new customization option.

```php
function neptune_customizer_options( $wp_customize ) {

	//...

	$wp_customize->add_setting('neptune_background_color', array(
		'default' => '#333333',
		'transport' => 'refresh'
	));

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'neptune_custom_background_color',
			array(
				'label'      => __( 'Background Color', 'neptune' ),
				'section'    => 'colors',
				'settings'   => 'neptune_background_color',
				'description' => __('Select the background color', 'neptune'),
				'selector' => "#neptune_bg_color"
			)
		)
	);

	// ...
}
```

> *Please refere to the [Customizer Objects](https://developer.wordpress.org/themes/customize-api/customizer-objects/) section of the official Wordpress documentation if needed.*


#### Controls linked to the css

Some of the customizer controls values are directly sent to the main js file `/dist/scripts/bundle.js` via the `wp_localize_script()` located in the `/config/enqueue.php` file.

```php
/* ./config/enqueue.php */

function neptune_enqueue_assets() {
	//...
	wp_enqueue_script( 'neptune-script', get_template_directory_uri() . '/dist/scripts/bundle.js', array (), '1.0', true);

	// Send customizer values to js
	include(locate_template('/config/customizer/custom_vars.php'));
	wp_localize_script( 'neptune-script', 'NeptuneCustomVars', $neptuneCustomVars);
}
```

Here, we are sending an array of values defined in `/config/customizer/custom_vars.php` to the `bundle.js` file.

```php
/* ./config/customizer/custom_vars.php */

$neptuneCustomVars = [
	// ...
	'--color-background' => get_theme_mod('neptune_background_color')
];
```

> *Note that we are setting the value of `--color-background` by passing the ID of the control we declared before to the [`get_theme_mod()`](https://developer.wordpress.org/reference/functions/get_theme_mod/) method*.

Under the hood, the `bundle.js` recieve an object of that array and the `NeptuneCustomizer.js` class loop through that object to update the css var defined in the `:root` pseudo-class in `src/scss`.

```css
/* ./src/styles/index.scss */

:root {
  --color-background: #000;
}
```