export default class NeptuneCustomizer {
	/**
	 * Get the ACF options and set css var properties
	 * @param {Object} options The Neptune Customizer options sent by wp_localize_script
	 * @see /config/enqueue.php
	 */
	constructor(options) {
		this.options = options
		this.setOptionProperty(options)
	}


	/**
	 * Loop through the Neptune Customizer options and set their value to matched css variables
	 * @param {Object} NeptuneCustomVars
	 * @return {void}
	 */
	setOptionProperty(NeptuneCustomVars) {
		if (NeptuneCustomVars) {
			for (let option in NeptuneCustomVars) {
				document.documentElement.style.setProperty(option, this.options[option])
			}
		}
	}

}
