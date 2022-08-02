<?php
/* ------------------------------------------------------------------------- *
 *  Dynamic styles
/* ------------------------------------------------------------------------- */

/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if ( ! function_exists( 'grayzone_hex2rgb' ) ) {

	function grayzone_hex2rgb( $hex, $array=false ) {
		$hex = str_replace("#", "", $hex);

		if ( strlen($hex) == 3 ) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}

		$rgb = array( $r, $g, $b );
		if ( !$array ) { $rgb = implode(",", $rgb); }
		return $rgb;
	}
	
}	


/*  Google fonts
/* ------------------------------------ */
if ( ! function_exists( 'grayzone_enqueue_google_fonts' ) ) {

	function grayzone_enqueue_google_fonts () {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { wp_enqueue_style( 'titillium-web-ext', '//fonts.googleapis.com/css?family=Titillium+Web:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }		
			if ( get_theme_mod( 'font' ) == 'droid-serif' )	{ wp_enqueue_style( 'droid-serif', '//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' ); }				
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' )	{ wp_enqueue_style( 'source-sans-pro', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300italic,300,400italic,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'lato' ) { wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700' ); }
			if ( get_theme_mod( 'font' ) == 'raleway' )	{ wp_enqueue_style( 'raleway', '//fonts.googleapis.com/css?family=Raleway:400,300,600' ); }
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'inter' ) ) { wp_enqueue_style( 'inter', '//fonts.googleapis.com/css?family=Inter:400,300,600,800' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu' ) { wp_enqueue_style( 'ubuntu', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) { wp_enqueue_style( 'ubuntu-cyr', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto' ) { wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-cyr' ) { wp_enqueue_style( 'roboto-cyr', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed' ) { wp_enqueue_style( 'roboto-condensed', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) { wp_enqueue_style( 'roboto-condensed-cyr', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab' ) { wp_enqueue_style( 'roboto-slab', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) { wp_enqueue_style( 'roboto-slab-cyr', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display' ) { wp_enqueue_style( 'playfair-display', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) { wp_enqueue_style( 'playfair-display-cyr', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,cyrillic' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans' ) { wp_enqueue_style( 'open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) { wp_enqueue_style( 'open-sans-cyr', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif' ) { wp_enqueue_style( 'pt-serif', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) { wp_enqueue_style( 'pt-serif-cyr', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,cyrillic-ext' ); }
		}
	}	
	
}
add_action( 'wp_enqueue_scripts', 'grayzone_enqueue_google_fonts' ); 	


/*  Dynamic css output
/* ------------------------------------ */
if ( ! function_exists( 'grayzone_dynamic_css' ) ) {

	function grayzone_dynamic_css() {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
		
			// rgb values
			$color_1 = get_theme_mod('color-1');
			$color_1_rgb = grayzone_hex2rgb($color_1);
			
			// start output
			$styles = '';		
			
			// google fonts
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { $styles .= 'body { font-family: "Titillium Web", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'droid-serif' ) { $styles .= 'body { font-family: "Droid Serif", serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' ) { $styles .= 'body { font-family: "Source Sans Pro", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'lato' ) { $styles .= 'body { font-family: "Lato", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'raleway' ) { $styles .= 'body { font-family: "Raleway", Arial, sans-serif; }'."\n"; }
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'inter' ) ) { $styles .= 'body { font-family: "Inter", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'ubuntu' ) || ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) ) { $styles .= 'body { font-family: "Ubuntu", Arial, sans-serif; }'."\n"; }	
			if ( ( get_theme_mod( 'font' ) == 'roboto' ) || ( get_theme_mod( 'font' ) == 'roboto-cyr' ) ) { $styles .= 'body { font-family: "Roboto", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-condensed' ) || ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) ) { $styles .= 'body { font-family: "Roboto Condensed", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-slab' ) || ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) ) { $styles .= 'body { font-family: "Roboto Slab", Arial, sans-serif; }'."\n"; }			
			if ( ( get_theme_mod( 'font' ) == 'playfair-display' ) || ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) ) { $styles .= 'body { font-family: "Playfair Display", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'open-sans' ) || ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) )	{ $styles .= 'body { font-family: "Open Sans", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'pt-serif' ) || ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) ) { $styles .= 'body { font-family: "PT Serif", serif; }'."\n"; }	
			if ( get_theme_mod( 'font' ) == 'arial' ) { $styles .= 'body { font-family: Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'georgia' ) { $styles .= 'body { font-family: Georgia, serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'verdana' ) { $styles .= 'body { font-family: Verdana, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'tahoma' ) { $styles .= 'body { font-family: Tahoma, sans-serif; }'."\n"; }
			
			// container width
			if ( get_theme_mod('container-width','1080') != '1080' ) {			
				if ( get_theme_mod( 'boxed' ) ) { 
					$styles .= '.boxed #wrapper-inner { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; }'."\n";
				}
				else {
					$styles .= '#wrapper-inner { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; }'."\n";
				}
			}
			// content max-width
			if ( get_theme_mod('content-width','700') != '700' ) {
				$styles .= '
.entry-header,
.entry-footer,
.entry > :not(.alignfull) { max-width: '.esc_attr( get_theme_mod('content-width') ).'px; }
				'."\n";
			}
			// header color
			if ( get_theme_mod('color-header','#eeeeee') != '#eeeeee' ) {
				$styles .= '
#wrapper { border-top-color: '.esc_attr( get_theme_mod('color-header') ).'; }
#header { background: '.esc_attr( get_theme_mod('color-header') ).'; }
.site-title a { color: #fff; }
.site-description { color: rgba(255,255,255,0.5); }

.menu-toggle-icon span { background: #fff; }

.nav-menu:not(.mobile) a { color: rgba(255,255,255,0.6); }
.nav-menu:not(.mobile) a:hover { color: #fff; }
.nav-menu:not(.mobile) button.active { background: rgba(255,255,255,0.15); }
.nav-menu:not(.mobile) button .svg-icon { fill: rgba(255,255,255,0.4); }
.nav-menu:not(.mobile) li.current_page_item > span > a, 
.nav-menu:not(.mobile) li.current-menu-item > span > a, 
.nav-menu:not(.mobile) li.current-menu-ancestor > span > a, 
.nav-menu:not(.mobile) li.current-post-parent > span > a { color: #fff; }

.nav-menu.mobile button.active .svg-icon { fill: #fff; }
.nav-menu.mobile ul ul { background: rgba(255,255,255,0.05); }
.nav-menu.mobile ul li .menu-item-wrapper,
.nav-menu.mobile ul ul li .menu-item-wrapper { border-bottom: 1px solid rgba(255,255,255,0.1); }
.nav-menu.mobile ul li a { color: #fff; }
.nav-menu.mobile ul button,
.nav-menu.mobile ul ul button { border-left: 1px solid rgba(255,255,255,0.1); }
.nav-menu.mobile > div > ul { border-top: 1px solid rgba(255,255,255,0.1); }

.nav-menu .svg-icon { fill: #fff; }
.nav-menu.mobile button:focus,
.menu-toggle:focus { background: rgba(255,255,255,0.06); }

@media only screen and (max-width: 719px) {
	.site-title { border-bottom: 1px solid rgba(255,255,255,0.1)!important; }
	.s2 .social-links { border-top: 1px solid rgba(255,255,255,0.1)!important; }
	.toggle-search .svg-icon { fill: #fff; }
	.toggle-search.active #svg-close { fill: #fff; }
	.toggle-search:focus #svg-search { fill: #fff; }
	.toggle-search:focus #svg-close { fill: #fff; }
}

				'."\n";
			}			
			// primary color
			if ( get_theme_mod('color-1','#333333') != '#333333' ) {
				$styles .= '
.entry a { color: '.esc_attr( get_theme_mod('color-1') ).'; }
.card-comments,
.alx-tabs-nav li.active a { background: '.esc_attr( get_theme_mod('color-1') ).'; }
.card-comments:before { border-left-color: '.esc_attr( get_theme_mod('color-1') ).'; }

@media only screen and (min-width: 720px) {
	.toggle-search { background: '.esc_attr( get_theme_mod('color-1') ).'; }
	.toggle-search .svg-icon { fill: #fff; }
}
@media only screen and (min-width: 1024px) {
	#profile:after { background: '.esc_attr( get_theme_mod('color-1') ).'; }
}
				'."\n";
			}
			// sidebar
			if ( get_theme_mod('color-sidebar','#eeeeee') != '#eeeeee' ) {
				$styles .= '
.s1 { background: '.esc_attr( get_theme_mod('color-sidebar') ).'; }

#profile:after { border-bottom: 1px solid rgba(255,255,255,0.15); }
#profile-image { border: 1px solid rgba(255,255,255,0.15); }
#profile-image img { border: 10px solid '.esc_attr( get_theme_mod('color-sidebar') ).'; }
#profile-name { color: #fff; }
#profile-description { color: rgba(255,255,255,0.6); }
#profile-description a { color: rgba(255,255,255,0.9); }
#profile-description a:hover { color: rgba(255,255,255,0.6); }

.sidebar .post-nav li a { border-bottom: 1px solid rgba(255,255,255,0.15); }
.sidebar .post-nav li a span { color: #fff; }
.sidebar .post-nav li a:hover span { color: rgba(255,255,255,0.6); }
.sidebar .post-nav li a strong { color: rgba(255,255,255,0.6); }
.sidebar .post-nav li i { color: rgba(255,255,255,0.6); }
.sidebar .post-nav li a:hover i { color: #fff; }

@media only screen and (max-width: 719px) {
	.sidebar .post-nav li.previous { border-top: 0; }
}

.sidebar .widget { color: rgba(255,255,255,0.6); }
.sidebar .widget a { color: rgba(255,255,255,0.8); }
.sidebar .widget a:hover { color: #fff; }
.sidebar .widget > h3 { color: #fff; }
.sidebar .widget > h3 a,
.sidebar .widget > h3 a:hover { color: #fff; }
.sidebar .widget select { background: '.esc_attr( get_theme_mod('color-sidebar') ).'; border: 1px solid rgba(255,255,255,0.3); color: rgba(255,255,255,0.6); }

.sidebar .widget > ul li:before,
.sidebar .widget > ul li a:before,
.sidebar .widget > div > ul li a:before,
.sidebar .widget_calendar caption:before { color: rgba(255,255,255,0.3); }
.sidebar .widget > ul li a:hover:before { color: rgba(255,255,255,0.6); }

.sidebar .widget_archive ul li,
.sidebar .widget_categories ul li,
.sidebar .widget_links ul li { color: rgba(255,255,255,0.6); }

.sidebar .widget_recent_comments ul li,
.sidebar .widget_recent_entries ul li { color: rgba(255,255,255,0.6); }

.sidebar .widget_rss ul li a { color: #fff; }
.sidebar .widget_rss ul li span.rss-date { color: #fff; }
.sidebar .widget_rss ul li cite { color: rgba(255,255,255,0.4); }

.sidebar .widget_search input.search { color: #999; }

.sidebar .widget_calendar a { color: #fff; }
.sidebar .widget_calendar a:hover { color: #fff!important; }
.sidebar .widget_calendar caption { background: rgba(255,255,255,0.3); color: #fff; }
.sidebar .widget_calendar caption:before { color: rgba(255,255,255,0.7); }
.sidebar .widget_calendar thead { background: rgba(255,255,255,0.1); box-shadow: inset 0 -1px 0 rgba(255,255,255,0.2); }
.sidebar .widget_calendar th, 
.sidebar .widget_calendar td { border: 1px solid rgba(255,255,255,0.2); }

.sidebar .alx-tabs-nav { background: rgba(255,255,255,0.15); }
.sidebar .alx-tabs-nav li a { color: rgba(255,255,255,0.6); }
.sidebar .alx-tabs-nav li.active a { background: #fff; color: #333; }

.sidebar .alx-tab .tab-item-category,
.sidebar .alx-posts .post-item-category { color: rgba(255,255,255,0.4); }
.sidebar .alx-tab .tab-item-title a,
.sidebar .alx-tab .tab-item-comment a,
.sidebar .alx-posts .post-item-title a { color: #fff; }
.sidebar .alx-tab .tab-item-category a:hover,
.sidebar .alx-posts .post-item-category a:hover { color: #fff!important; }
.sidebar .alx-tab .tab-item-date,
.sidebar .alx-tab .tab-item-name,
.sidebar .alx-posts .post-item-date  { color: rgba(255,255,255,0.6); }
.sidebar .alx-tab li:hover .thumb-icon,
.sidebar .alx-posts li:hover .thumb-icon { background: #fff; color: #111; }

.sidebar .alx-tab .tab-item-category a,
.sidebar .alx-posts .post-item-category a,
.sidebar .alx-tab li:hover .tab-item-title a,
.sidebar .alx-tab li:hover .tab-item-comment a,
.sidebar .alx-posts li:hover .post-item-title a { color: rgba(255,255,255,0.6); }

				'."\n";
			}
			// social sidebar
			if ( get_theme_mod('color-social-sidebar','#eeeeee') != '#eeeeee' ) {
				$styles .= '
.s2 { background: '.esc_attr( get_theme_mod('color-social-sidebar') ).'; box-shadow: none; }
.s2 .social-links li:before { background: rgba(255,255,255,0.2); }
.s2 .social-links .social-tooltip { color: rgba(255,255,255,0.7); }
.s2 .social-links .social-tooltip:hover { color: #fff; }
@media only screen and (min-width: 720px) {
	.toggle-search { border-bottom: 1px solid rgba(255,255,255,0.2); }
	.toggle-search .svg-icon { fill: #fff; }
}
				'."\n";
			}
			// background color
			if ( get_theme_mod('color-background','#dddddd') != '#dddddd' ) {
				$styles .= '
body { background-color: '.esc_attr( get_theme_mod('color-background') ).'; background-image: none; }
				'."\n";
			}
			// header logo max-height
			if ( get_theme_mod('logo-max-height','60') != '60' ) {
				$styles .= '.site-title a img { max-height: '.esc_attr( get_theme_mod('logo-max-height') ).'px; }'."\n";
			}
			// header text color
			if ( get_theme_mod( 'header_textcolor' ) != '' ) {
				$styles .= '.site-title a, .site-description { color: #'.esc_attr( get_theme_mod( 'header_textcolor' ) ).'; }'."\n";
			}
			if ( get_theme_mod('dark','off') == 'on' ) { 
				wp_add_inline_style( 'grayzone-dark', $styles );
			} else {
				wp_add_inline_style( 'grayzone-style', $styles );
			}
		}
	}
	
}
add_action( 'wp_enqueue_scripts', 'grayzone_dynamic_css' );
