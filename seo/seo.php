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

	public function seo($options, $Automad) {

		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$defaults = 	array(
			'this_url' => '',
			'description' => false,
			'canonical' => false,
			'og_locale' => false,
			'og_type' => false,
			'og_title' => false,
			'og_description' => false,
			'og_url' => false,
			'og_site_name' => false,
			'article_publisher' => false,
			'meta_robots' => false
			//'og_image' => '<meta property="og:image" content="" />' searching a way to create a screenshot with php
			);

		// Merge defaults with options
		$options = array_merge($defaults, $options);

		// check if user set variables
		if ($options['description']) {
			$description = '<meta name="description" content="@p(meta_description)"/>';
		} else {
			$description = '';
		}
		if ($options['canonical']) {
			$canonical = '<link rel="canonical" href="'. $actual_link .'" />';
		} else {
			$canonical = '';
		}
		if ($options['og_locale']) {
			$og_locale = '<meta property="og:locale" content="@p(og_locale)" />';
		} else {
			$og_locale = '';
		}
		if ($options['og_type']) {
			$og_type = '<meta property="og:type" content="@p(og_type)" />';
		} else {
			$og_type = '';
		}
		if ($options['og_title']) {
			$og_title = '<meta property="og:title" content="@p(title)" />';
		} else {
			$og_title = '';
		}
		if ($options['og_description']) {
			$og_description = '<meta property="og:description" content="@p(meta_description)" />';
		} else {
			$og_description = '';
		}
		if ($options['og_url']) {
			$og_url = '<meta property="og:url" content="'. $actual_link .'" />';
		} else {
			$og_url = '';
		}
		if ($options['og_site_name']) {
			$og_site_name = '<meta property="og:site_name" content="@p(meta_title)" />';
		} else {
			$og_site_name = '';
		}
		if ($options['article_publisher']) {
			$article_publisher = '<meta property="article:publisher" content="@p(facebook_profile_url)" />';
		} else {
			$article_publisher = '';
		}
		if ($options['meta_robots']) {
			$meta_robots = '<meta name="robots" content="@p(index_follow)" />';
		} else {
			$meta_robots = '';
		}


		// generate metas / og
		$html = $description;
		$html .= $this_url;
		$html .= $canonical;
		$html .= $og_locale;
		$html .= $og_type;
		$html .= $og_title;
		$html .= $og_description;
		$html .= $og_url;
		$html .= $og_site_name;
		$html .= $article_publisher;
		$html .= $meta_robots;


		return $html;
	}
}