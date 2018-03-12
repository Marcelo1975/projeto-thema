<?php
function mm_social_customizer($wp_customize) {
	//Settings
	$wp_customize->add_setting('mm_facebook', array('default'=>''));
	$wp_customize->add_setting('mm_googleplus', array('default'=>''));
	$wp_customize->add_setting('mm_instagram', array('default'=>''));
	$wp_customize->add_setting('mm_twitter', array('default'=>''));
	$wp_customize->add_setting('mm_youtube', array('default'=>''));

	//Sections
	$wp_customize->add_section('mm_social_section', array(
		'title' => 'Rede Sociais',
		'priority' => '1',
		'panel' => 'opcoes'
	));

	//Controllers
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mm_facebook',
			array(
				'label' => 'Link do Facebook',
				'section' => 'mm_social_section',
				'settings' => 'mm_facebook',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mm_googleplus',
			array(
				'label' => 'Link do Google Plus',
				'section' => 'mm_social_section',
				'settings' => 'mm_googleplus',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mm_instagram',
			array(
				'label' => 'Link do Instagram',
				'section' => 'mm_social_section',
				'settings' => 'mm_instagram',
				'type' => 'text'
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mm_twitter',
			array(
				'label' => 'Link do Twitter',
				'section' => 'mm_social_section',
				'settings' => 'mm_twitter',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mm_youtube',
			array(
				'label' => 'Link do Youtube',
				'section' => 'mm_social_section',
				'settings' => 'mm_youtube',
				'type' => 'text'
			)
		)
	);

}