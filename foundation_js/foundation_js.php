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
 *  This extension gives you the option to hook the js of foundation as framework into your website instead of bootstrap.
 *
 *
 *	@author Ignaz Biegler <ignaz-biegler@posteo.de>
 *	@copyright Copyright (c) 2015 Ignaz Biegler <ignaz-biegler@posteo.de>
 *	@license MIT license - https://github.com/B-iggy/ignaz-biegler.de/blob/master/LICENSE.md
 */

class Foundation_JS {
		
	/**
	 *	Load Foundation 5.5.1 CSS.
	 *
	 *	@return the stylesheet tag to include the minified foundation CSS
	 */
	
	public function Foundation_JS() {
		
		return '<script src="/extensions/foundation_js/js/vendor/jquery.js"></script>' . "\n" . 
		'<script src="/extensions/foundation_js/js/foundation.min.js"></script>' . "\n" .
'<script>
	$(document).foundation();
</script>';
		
	}
}