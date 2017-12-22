<?php

function a002_footer_widget_left() {

	register_sidebar( array(
		'name'          => 'Left Footer Area',
		'id'            => 'left_footer_area',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'a002_footer_widget_left' );

function a002_footer_widget_center() {

	register_sidebar( array(
		'name'          => 'Center Footer Area',
		'id'            => 'center_footer_area',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'a002_footer_widget_center' );

function a002_footer_widget_right() {

	register_sidebar( array(
		'name'          => 'Right Footer Area',
		'id'            => 'right_footer_area',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'a002_footer_widget_right' );

?>
