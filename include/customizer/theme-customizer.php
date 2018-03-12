<?php
require get_template_directory().'./include/customizer/social.php';
require get_template_directory().'./include/customizer/layout.php';

function mm_customize_register( $wp_customize ) {
	$wp_customize->get_section('custom_css')->description = '';

	$wp_customize->add_panel('opcoes', array(
		'title' => 'Opções do Tema',
		'priority' => '1'
	));

	mm_social_customizer($wp_customize);

	mm_layout_customize($wp_customize);
}