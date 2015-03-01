<?php
/*
 *	SEO
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
 *  This extension gives your head important seo links like opengraph, different metas and possibility to insert your google analytic code
 *
 *
 *	@author Ignaz Biegler <ignaz-biegler@posteo.de>
 *	@copyright Copyright (c) 2015 Ignaz Biegler <ignaz-biegler@posteo.de>
 *	@license MIT license - https://github.com/B-iggy/ignaz-biegler.de/blob/master/LICENSE.md
 */

class seo {

	/**
	 *	Output your metas you given in the input field of variable title, subtitle, metaDescription...
	 *
	 *	@return the metas and og links
	 */

		public function seo() {

			$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			$description 		= '<meta name="description" content="@p(meta_description)"/>';
			$canonical			= '<link rel="canonical" href="'. $actual_link .'" />';
			$og_locale			= '<meta property="og:locale" content="@p(og_locale)" />';
			$og_type			= '<meta property="og:type" content="website" />';
			$og_title			= '<meta property="og:title" content="@p(title)" />';
			$og_description 	= '<meta property="og:description" content="@p(meta_description)" />';
			$og_url				= '<meta property="og:url" content="'. $actual_link .'" />';
			$og_site_name		= '<meta property="og:site_name" content="@p(meta_title)" />';
			$article_publisher	= '<meta property="article:publisher" content="@p(facebook_profile_url)" />';
			$og_image			= '<meta property="og:image" content="http://christinabusse.de/wp-content/uploads/2015/02/Capture.png" />';

			return 
			$description . "\n"
			. $canonical . "\n"
			. $og_locale . "\n"
			. $og_type . "\n"
			. $og_title . "\n"
			. $og_description . "\n"
			. $og_url . "\n"
			. $og_site_name . "\n"
			. $article_publisher . "\n"
			. $og_image;
		}
	}