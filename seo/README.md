# Seo

The Seo extension let you create seo relevant meta or open graph tags easily without typing it manually. All you have to do is set the option you want to true and define the relevant content in your GUI in a variable. See Options for more information about options.

---

### Markup

To use the Seo extension, simply add

@x(seo)

to your template's header element markup.

---

### Dependencies

None.

---

### Options

There are several options available to modify the Seo:

- description: `true` or `false` - false means it won't be show up in your html markup. true will create the corresponding tag.
	+ you can add a site description in the description variable in your gui.

- canonical: `true` or `false` - false means it won't be show up in your html markup. true will create the corresponding tag.
	+ the canoncial will be generated automatically. Based on the current URL.

- og_locale: `true` or `false` - false means it won't be show up in your html markup. true will create the corresponding tag.
	+ set you language in your GUI in the og_locale variable. For example: en_US or de_DE or fr_FR or ru_RU.

- og_type: `true` or `false` - false means it won't be show up in your html markup. true will create the corresponding tag.
	+ set your page type in your GUI in the og_type variable. For example: website or video.

- og_title: `true` or `false` - false means it won't be show up in your html markup. true will create the corresponding tag.
	+ will set your page title as og title.

- og_description: `true` or `false` - false means it won't be show up in your html markup. true will create the corresponding tag.
	+ set your og description in your GUI in the og_description variable.

- og_url: `true` or `false` - false means it won't be show up in your html markup. true will create the corresponding tag.
	+ will set your current URL as og_url.

- og_site_name: `true` or `false` - false means it won't be show up in your html markup. true will create the corresponding tag.
	+ will set your defined meta title as og site name.

- article_publisher: `true` or `false` - false means it won't be show up in your html markup. true will create the corresponding tag.
	+ insert your facebook profile URL in the article_publisher URL in your GUI.

- meta_robots: `true` or `false` - false means it won't be show up in your html markup. true will create the corresponding tag.
	+ set your meta robots in your GUI in the meta_robots variable. For example: index, follow or noindex, nofollow or index.
	If you go on your general header.php and set it to true you get an empty output. Considering this post http://stackoverflow.com/a/12172899 it is OK.

The options must be specified in **JSON** format.

---

### Example

Website with meta name description, meta robots index, nofollow and rel canoncical:

@x(seo {
description: true, // check you GUI for the description variable
canonical: true,
meta_robots: true // check you GUI for the meta_robots variable
})

If you want to have different options on different pages, you have to make a special header.php for them.<br>
For example: Only on imprint I want meta_robots `noindex` and `nofollow`.<br>
So I create a header-imprint.php and include it with `@i(header-imprint.php)` in my imprint.php (which I created a template for)<br>

See my own website for detailed use cases. (https://github.com/B-iggy/www.ignaz-biegler.de)

*There will be maybe a better solution for it in future. Or feel free to help me with it*