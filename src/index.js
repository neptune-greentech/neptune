const { registerBlockType } = wp.blocks

registerBlockType('neptune/custom-cta', {
	// built-in attributes
	title: 'Call to Action',
	description: 'Block to generate a custom Call to Action',
	icon: 'smiley',
	category: 'layout',

	// custom attributes
	attributes: {},

	// custom functions

	// built-in functions
	edit() {
	},

	save() { }
})