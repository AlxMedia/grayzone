<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'grayzone', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'grayzone' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'grayzone' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'grayzone' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'grayzone' ),
	'button_url'  => 'https://wordpress.org/support/theme/grayzone/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'grayzone' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'grayzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'grayzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'grayzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'grayzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'grayzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'grayzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'grayzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'grayzone' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'grayzone' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'grayzone' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'grayzone' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'grayzone' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'grayzone' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'grayzone' ),
	'description'	=> esc_html__( 'Your blog heading', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'grayzone' ),
	'description'	=> esc_html__( 'Your blog subheading', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'grayzone' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'grayzone' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Featured Category
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'grayzone' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'grayzone' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'grayzone' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> '4',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'grayzone' ),
	'description'	=> esc_html__( '2 columns of widgets', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'grayzone' ),
	'description'	=> esc_html__( '2 columns of widgets', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Author Avatar
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-avatar',
	'label'			=> esc_html__( 'Author Avatar', 'grayzone' ),
	'description'	=> esc_html__( 'Circle images', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Comment Count
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'grayzone' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'grayzone' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'grayzone' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'grayzone' ),
		'categories'=> esc_html__( 'Related by categories', 'grayzone' ),
		'tags'		=> esc_html__( 'Related by tags', 'grayzone' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'grayzone' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'grayzone' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'grayzone' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'grayzone' ),
		'content'	=> esc_html__( 'Below content', 'grayzone' ),
	),
) );
// Header: Search
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'grayzone' ),
	'description'	=> esc_html__( 'Header search button', 'grayzone' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'grayzone' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'grayzone' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'grayzone' ),
	'description'	=> esc_html__( 'Minimum width of 320px', 'grayzone' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'grayzone' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'grayzone' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'grayzone' ),
	'description'	=> esc_html__( 'A short description of you', 'grayzone' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'grayzone' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'grayzone' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'grayzone' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'grayzone' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'grayzone' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'grayzone' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'grayzone' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'grayzone' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'grayzone' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'grayzone' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'grayzone' ),
	'description'	=> esc_html__( 'Footer credit text', 'grayzone' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'grayzone' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'grayzone' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'grayzone' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'grayzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'grayzone' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'grayzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'grayzone' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'grayzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'grayzone' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'grayzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'grayzone' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'grayzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'grayzone' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'grayzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'grayzone' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'grayzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function grayzone_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'grayzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'grayzone' ),
		'description'	=> esc_html__( '(is_home) Primary', 'grayzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'grayzone' ),
	) );
	Kirki::add_field( 'grayzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'grayzone' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'grayzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'grayzone' ),
	) );
	Kirki::add_field( 'grayzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'grayzone' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'grayzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'grayzone' ),
	) );
	Kirki::add_field( 'grayzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'grayzone' ),
		'description'	=> esc_html__( '(is_category) Primary', 'grayzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'grayzone' ),
	) );
	Kirki::add_field( 'grayzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'grayzone' ),
		'description'	=> esc_html__( '(is_search) Primary', 'grayzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'grayzone' ),
	) );
	Kirki::add_field( 'grayzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'grayzone' ),
		'description'	=> esc_html__( '(is_404) Primary', 'grayzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'grayzone' ),
	) );
	Kirki::add_field( 'grayzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'grayzone' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'grayzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'grayzone' ),
	) );
	
 } 
add_action( 'init', 'grayzone_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'grayzone' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'grayzone' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'grayzone' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'grayzone' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'grayzone' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'grayzone' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'grayzone' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'grayzone' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'grayzone' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'grayzone' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'grayzone' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'grayzone' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'grayzone' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'grayzone' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'grayzone' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'grayzone' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'grayzone' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'grayzone' ),
	'description'	=> esc_html__( 'Select font for the theme', 'grayzone' ),
	'section'		=> 'styling',
	'default'		=> 'inter',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'grayzone' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'grayzone' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'grayzone' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'grayzone' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'grayzone' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'grayzone' ),
		'inter'					=> esc_html__( 'Inter, Latin', 'grayzone' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'grayzone' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'grayzone' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'grayzone' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'grayzone' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'grayzone' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'grayzone' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'grayzone' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'grayzone' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'grayzone' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'grayzone' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'grayzone' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'grayzone' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'grayzone' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'grayzone' ),
		'arial'					=> esc_html__( 'Arial', 'grayzone' ),
		'georgia'				=> esc_html__( 'Georgia', 'grayzone' ),
		'verdana'				=> esc_html__( 'Verdana', 'grayzone' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'grayzone' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'grayzone' ),
	'description'	=> esc_html__( 'Max-width of the container.', 'grayzone' ),
	'section'		=> 'styling',
	'default'		=> '1080',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'grayzone' ),
	'description'	=> esc_html__( 'Max-width of the content on posts and pages', 'grayzone' ),
	'section'		=> 'styling',
	'default'		=> '700',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'grayzone' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'grayzone' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Header Color
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header',
	'label'			=> esc_html__( 'Header Color', 'grayzone' ),
	'section'		=> 'styling',
	'default'		=> '#eeeeee',
) );
// Styling: Primary Color
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'grayzone' ),
	'section'		=> 'styling',
	'default'		=> '#333333',
) );
// Styling: Sidebar Color
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-sidebar',
	'label'			=> esc_html__( 'Sidebar Color', 'grayzone' ),
	'section'		=> 'styling',
	'default'		=> '#eeeeee',
) );
// Styling: Social Sidebar Color
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-social-sidebar',
	'label'			=> esc_html__( 'Social Sidebar Color', 'grayzone' ),
	'section'		=> 'styling',
	'default'		=> '#eeeeee',
) );
// Styling: Background Color
Kirki::add_field( 'grayzone_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'grayzone' ),
	'section'		=> 'styling',
	'default'		=> '#dddddd',
) );