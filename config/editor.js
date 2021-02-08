wp.domReady(() => {
	console.log('RDY')

	// Common block
	//wp.blocks.unregisterBlockType('core/paragraph');
	//wp.blocks.unregisterBlockType('core/image');
	//wp.blocks.unregisterBlockType('core/heading');
	wp.blocks.unregisterBlockType('core/gallery');
	//wp.blocks.unregisterBlockType('core/list');
	//wp.blocks.unregisterBlockType('core/quote');
	//wp.blocks.unregisterBlockType('core/audio');
	//wp.blocks.unregisterBlockType('core/cover');
	//wp.blocks.unregisterBlockType('core/file');
	//wp.blocks.unregisterBlockType('core/video');

	// Formatting category
	//wp.blocks.unregisterBlockType('core/table');
	wp.blocks.unregisterBlockType('core/verse');
	wp.blocks.unregisterBlockType('core/code');
	wp.blocks.unregisterBlockType('core/freeform');
	wp.blocks.unregisterBlockType('core/html');
	wp.blocks.unregisterBlockType('core/preformatted');
	wp.blocks.unregisterBlockType('core/pullquote');

	// Layout Elements category
	wp.blocks.unregisterBlockType('core/buttons');
	wp.blocks.unregisterBlockType('core/text-columns');
	wp.blocks.unregisterBlockType('core/media-text');
	wp.blocks.unregisterBlockType('core/more');
	wp.blocks.unregisterBlockType('core/nextpage');
	wp.blocks.unregisterBlockType('core/separator');
	wp.blocks.unregisterBlockType('core/spacer');

	// Widgets category
	wp.blocks.unregisterBlockType('core/shortcode');
	wp.blocks.unregisterBlockType('core/archives');
	wp.blocks.unregisterBlockType('core/categories');
	wp.blocks.unregisterBlockType('core/latest-comments');
	wp.blocks.unregisterBlockType('core/latest-posts');
	wp.blocks.unregisterBlockType('core/calendar');
	wp.blocks.unregisterBlockType('core/rss');
	wp.blocks.unregisterBlockType('core/search');
	wp.blocks.unregisterBlockType('core/tag-cloud');
	wp.blocks.unregisterBlockType('core/social-link');

	// Embeds category
	wp.blocks.unregisterBlockType('core/embed');
	wp.blocks.unregisterBlockType('core-embed/twitter');
	wp.blocks.unregisterBlockType('core-embed/youtube');
	wp.blocks.unregisterBlockType('core-embed/facebook');
	wp.blocks.unregisterBlockType('core-embed/instagram');
	wp.blocks.unregisterBlockType('core-embed/wordpress');
	wp.blocks.unregisterBlockType('core-embed/soundcloud');
	wp.blocks.unregisterBlockType('core-embed/spotify');
	wp.blocks.unregisterBlockType('core-embed/flickr');
	wp.blocks.unregisterBlockType('core-embed/vimeo');
	wp.blocks.unregisterBlockType('core-embed/animoto');
	wp.blocks.unregisterBlockType('core-embed/cloudup');
	wp.blocks.unregisterBlockType('core-embed/collegehumor');
	wp.blocks.unregisterBlockType('core-embed/dailymotion');
	wp.blocks.unregisterBlockType('core-embed/funnyordie');
	wp.blocks.unregisterBlockType('core-embed/hulu');
	wp.blocks.unregisterBlockType('core-embed/imgur');
	wp.blocks.unregisterBlockType('core-embed/issuu');
	wp.blocks.unregisterBlockType('core-embed/kickstarter');
	wp.blocks.unregisterBlockType('core-embed/meetup-com');
	wp.blocks.unregisterBlockType('core-embed/mixcloud');
	wp.blocks.unregisterBlockType('core-embed/photobucket');
	wp.blocks.unregisterBlockType('core-embed/polldaddy');
	wp.blocks.unregisterBlockType('core-embed/reddit');
	wp.blocks.unregisterBlockType('core-embed/reverbnation');
	wp.blocks.unregisterBlockType('core-embed/screencast');
	wp.blocks.unregisterBlockType('core-embed/scribd');
	wp.blocks.unregisterBlockType('core-embed/slideshare');
	wp.blocks.unregisterBlockType('core-embed/smugmug');
	wp.blocks.unregisterBlockType('core-embed/speaker');
	wp.blocks.unregisterBlockType('core-embed/ted');
	wp.blocks.unregisterBlockType('core-embed/tumblr');
	wp.blocks.unregisterBlockType('core-embed/videopress');
	wp.blocks.unregisterBlockType('core-embed/wordpress-tv');
});
