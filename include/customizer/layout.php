<?php
function mm_layout_customize($wp_customize){
	//Settings
	$wp_customize->add_setting('mm_topmenu_show', array('default'=>'yes'));
	$wp_customize->add_setting('mm_search_show', array('default'=>'yes'));
	$wp_customize->add_setting('mm_privacy_url', array('default'=>''));

	//Sections
	$wp_customize->add_section('mm_layout_section', array(
		'title' => 'Opção de Layout',
		'priority' => '2',
		'panel' => 'opcoes'
	));

	//Controllers
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mm_topmenu_show',
			array(
				'label' => 'Mostrar Menu Superior',
				'section' => 'mm_layout_section',
				'settings' => 'mm_topmenu_show',
				'type' => 'checkbox', // text, checkbox, textarea, select, radio, dropdown-pages 
				'choices' => array(
					'yes' => 'Sim'
				)
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mm_search_show',
			array(
				'label' => 'Mostrar Busca',
				'section' => 'mm_layout_section',
				'settings' => 'mm_search_show',
				'type' => 'checkbox', // text, checkbox, textarea, select, radio, dropdown-pages 
				'choices' => array(
					'yes' => 'Sim'
				)
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mm_privacy_url',
			array(
				'label' => 'Página de Política de Privacidade',
				'section' => 'mm_layout_section',
				'settings' => 'mm_privacy_url',
				'type' => 'dropdown-pages', // text, checkbox, textarea, select, radio, dropdown-pages 
			)
		)
	);
}