const { registerBlockType } = wp.blocks
const { RichText } = wp.editor


registerBlockType('neptune/hero-full', {
	// built-in attributes
	title: 'Hero Full',
	description: 'Block that generates a big header',
	icon: 'smiley',
	category: 'neptune',

	// custom attributes
	attributes: {
		topLine: {
			type: 'string',
			source: 'html',
			selector: 'p'
		},
		title: {
			type: 'string',
			source: 'html',
			selector: 'h1'
		},
		description: {
			type: 'string',
			source: 'html',
			selector: 'p'
		}
	},

	edit({ attributes, setAttributes }) {

		function onChangeTopLine(newTopLine) {
			setAttributes({ topLine: newTopLine })
		}

		function onChangeTitle(newTitle) {
			setAttributes({ title: newTitle })
		}

		function onDescriptionChange(newDescription) {
			setAttributes({ description: newDescription })
		}

		return ([
			<div className="container">
				<RichText
					tagName="p"
					placeholder="The top line"
					value={attributes.topLine}
					onChange={onChangeTopLine}
				/>
				<RichText
					tagName="h1"
					placeholder="The title"
					value={attributes.title}
					onChange={onChangeTitle}
				/>
				<RichText
					tagName="p"
					placeholder="The description"
					value={attributes.description}
					onChange={onDescriptionChange}
				/>
			</div>
		])
	},

	save({ attributes }) {
		return (
			<header class="hero hero-full">
				<div class="container hero_container">
					<RichText.Content tagName="p" value={attributes.topLine} />
					<RichText.Content tagName="h1" value={attributes.title} />
					<RichText.Content tagName="p" value={attributes.description} />
				</div>
			</header>
		)
	}
})