<div align="center">

![alt text](https://demo.neptune-green.tech/wp-content/themes/neptune/dist/images/logo-neptune.png "Logo Title Text 1")

</div>

Since a lot of people is using wordpress, and concidering our ecological ideology, we want to provide to people a way to reduce their carbon footprint.

- [Theme](#theme)
	- [Page editor](#page-editor)
- [Development](#development)
	- [Config](#config)
		- [Blog](#blog)
		- [Cleanup](#cleanup)
		- [Customizer](#customizer)
		- [Editor](#editor)
		- [Styles & scripts](#style-and-scripts)
		- [Menus](#menus)
		- [Theme support](#theme-supports)
- [Demo](https://demo.neptune-green.tech)

## [About Neptune](https://neptune-green.tech)

We do not see ourselves as experts but rather as scouts who want a cleaner world.

This optimization of Wordpress and theme is designed based on green tech principles.

It allows you to benefit from a site whose pages will have a reduced carbon footprint of at least -70% compared to the average site.

We hope some people will help us improving this theme because carbon footprint is also a teamwork.

## Customizer

### Homepage
The paragraph of the homepage page can be fill in the homepage section of the customizer

### Colors
You can change the 4 colors of the theme via the colors menu of the customizer

### Social Networks
You can fill in the links to your social networks in the social networks section of the customizer

### Footer
You can change the footer text


## Development

*Here are some information for development purpose.*

### Config

#### Blog

Some tweaks for the blog posts excerpts display can be found in the `config/blog/index.php` file.


#### Cleanup

This theme is all about the `config\clean` folder. A lot of native things from wordpress have been disabled from this folder.

 - **api:** Since we don't use the api in this theme, the API is disabled in the `config\clean\api.php` file.
 - **wp-embed:** Other wordpress posts embeds are disable in `config/clean/embed.php`
 - **emojis:** Emojis are disabled in `config\clean\emoji.php`
 - **head:** A big cleanup has been made in the head output of pages in the `config\clean\head.php`



#### Customizer

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


##### Controls linked to the css

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

#### Editor

The theme is embeding the Lazy blocks plugin.
The Lazy blocks file are in the `vendor\lazy-blocks` folder.

The block templates of the Neptune theme are defined in the `config\editor\index.php`. If you need to add or remove blocks feel free to check the [lazy blocks documentation](https://lazyblocks.com/documentation/getting-started/).



> #### why not ACF ?
> We really think ACF is a powerfull tool, but since the goal of this theme is to be as green as it can, we decided to not got with ACF.
>Lazy blocks is a good compromise, since it's a pretty small plugin, the only requests to create blocks are done in the admin side, and it has as much as feature than ACF.

#### Styles and scripts

Styles and scripts are defined in the `config\enqueue.php` file.

#### Menus

Menus are defined in the `config\menus.php`

#### Theme supports

Theme supports are defined in the `config\theme_support.php` file
