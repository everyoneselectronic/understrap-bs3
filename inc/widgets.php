<?php
/**
 * Declaring widgets
 *
 *
 * @package understrap-bs3
 */
function understrap_bs3_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'understrap-bs3' ),
		'id'            => 'sidebar-1',
		'description'   => 'Sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => __( 'Hero Slider', 'understrap-bs3' ),
        'id'            => 'hero',
        'description'   => 'Hero slider area. Place two or more widgets here and they will slide!',
        'before_widget' => '<div class="jumbotron"><div class="container"><div class="row"><div class="item"><div class="col-md-12">',
        'after_widget'  => '</div></div></div></div></div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => __( 'Hero Static', 'understrap-bs3' ),
        'id'            => 'statichero',
        'description'   => 'Static Hero widget. no slider functionallity',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

        register_sidebar( array(
        'name'          => __( 'Footer Full', 'understrap-bs3' ),
        'id'            => 'footerfull',
        'description'   => 'Widget area below main content and above footer',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'understrap_bs3_widgets_init' );