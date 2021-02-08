const { registerBlockType } = wp.blocks
const { RichText } = wp.editor


registerBlockType('neptune/hero-classic', {
	// built-in attributes
	title: 'Hero Classic',
	description: 'Block that generates a classic header',
	icon: 'smiley',
	category: 'neptune',

	// custom attributes
	attributes: {
		title: {
			type: 'string',
			source: 'html',
			selector: 'h1'
		},
	},

	edit({ attributes, setAttributes }) {
		function onChangeTitle(newTitle) {
			setAttributes({ title: newTitle })
		}

		return ([
			<div className="container">
				<RichText key="editable"
					tagName="h1"
					placeholder="Your Heading"
					value={attributes.title}
					onChange={onChangeTitle}
				/>
			</div>
		])
	},

	save({ attributes }) {
		return (
			<header class="hero hero-classic">
				<div class="container hero_container">
					<RichText.Content tagName="h1" value={attributes.title} />
				</div>
			</header>
		)
	}
})