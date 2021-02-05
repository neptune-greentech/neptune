const { registerBlockType } = wp.blocks
const { RichText, InspectorControls, ColorPalettte } = wp.editor
const { PanelBody, TextControl } = wp.components

registerBlockType('neptune/custom-cta', {
	// built-in attributes
	title: 'Call to Action',
	description: 'Block to generate a custom Call to Action',
	icon: 'smiley',
	category: 'layout',

	// custom attributes
	attributes: {
		title: {
			type: 'string',
			source: 'html',
			selector: 'h2'
		},
		titleColor: {
			type: 'string',
			default:'black'
		},
		body: {
			type: 'string',
			source: 'html',
			selector: 'p'
		}
	},

	edit({ attributes, setAttributes }) {

		function onChangeTitle(newTitle) {
			setAttributes({ title: newTitle })
		}

		function onChangeBody(newBody) {
			setAttributes({ body: newBody })
		}

		function onTitleColorChange(newColor) {
			setAttributes({ titleColor: newColor })
		}

		return ([
			<InspectorControls style={{ marginBottom: '40px' }}>
				<PanelBody title={'Font color Settings'}>
					<p><strong>Select a title color: </strong></p>
					<TextControl label="Additionnal CSS" value={attributes.titleColor} onChange={onTitleColorChange}/>
				</PanelBody>
			</InspectorControls>,

			<div className="container">
				<RichText key="editable"
					tagName="h2"
					placeholder="Your CTA Title"
					value={attributes.title}
					onChange={onChangeTitle}
				/>
				<RichText key="editable"
					tagName="p"
					placeholder="Your CTA Description"
					value={attributes.body}
					onChange={onChangeBody}
				/>
			</div>
		])
	},

	save({ attributes }) {
		return (
			<div className="container">
				<h2>{attributes.title}</h2>
				<RichText.Content tagName="p" value={attributes.body} />
			</div>
		)
	}
})