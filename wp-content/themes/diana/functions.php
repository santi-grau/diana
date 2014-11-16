<?php

/* Register Post Type */
add_action( 'init', 'register_projects' );
function register_projects() {
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' )
			),
			'public' => true,
			'supports' => array( 'title', 'editor'),
			'hierarchical' => true,
			'menu_position' => 4
		)
	);
}

add_action( 'init', 'contact' );
function contact() {
	register_post_type( 'contact',
		array(
			'labels' => array(
				'name' => __( 'Contacto' )
			),
			'public' => true,
			'supports' => array( 'title', 'editor'),
			'hierarchical' => true,
			'menu_position' => 4
		)
	);
}

add_action( 'init', 'about' );
function about() {
	register_post_type( 'about',
		array(
			'labels' => array(
				'name' => __( 'About' )
			),
			'public' => true,
			'supports' => array( 'title', 'editor'),
			'hierarchical' => true,
			'menu_position' => 4
		)
	);
}

/* Hide Menus */
add_action('admin_head', 'hide_menus');
function hide_menus() {
	$itemsToHide = array( "links", "posts", "comments", "media", "tools", "appearance", "users", "settings", "plugins");
	for($i=0; $i<sizeof($itemsToHide); $i++){
		echo "<style>#menu-".$itemsToHide[$i]."{display:none;}</style>";
	}
}

?>