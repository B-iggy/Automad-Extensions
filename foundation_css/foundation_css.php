<?php
/*
 *	Foundation
 *	Extension for Automad
 *
 *	Copyright (c) 2015 by Ignaz Biegler
 *	http://ignaz-biegler.de
 *
 *	Licensed under the MIT license.
 *	https://github.com/B-iggy/ignaz-biegler.de/blob/master/LICENSE.md
 */


namespace Extensions;


/**
 *  This extension gives you the option to hook foundation as framework into your website instead of bootstrap.
 *  It's
 *
 *	@author Ignaz Biegler <ignaz-biegler@posteo.de>
 *	@copyright Copyright (c) 2015 Ignaz Biegler <ignaz-biegler@posteo.de>
 *	@license MIT license - https://github.com/B-iggy/ignaz-biegler.de/blob/master/LICENSE.md
 */

class Foundation_CSS {
		
	/**
	 *	Load Foundation 5.5.1 CSS.
	 *
	 *	@return the stylesheet tag to include the minified foundation CSS
	 */
	
	public function Foundation_CSS() {
		// modernizr is not a css file but needed to put in header
		return '<script src=/extensions/foundation_js/js/vendor/modernizr.js></script>'  . "\n" . 
			'<link rel="stylesheet" href="/extensions/foundation_css/css/foundation.min.css">' . "\n" .
			'<link rel="stylesheet" href="/extensions/foundation_css/css/fonts/foundation-icons.css">';
	}
}