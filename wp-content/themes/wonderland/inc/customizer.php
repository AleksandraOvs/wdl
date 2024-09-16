<?php
/**
 * wonderland Theme Customizer
 *
 * @package wonderland
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

/*
Короткий пример для использования Theme_Customization_API 
http://casepress.org/kb/web/nastrojki-temy-wordpress-kak-dobavit-svoi-polya/
*/
/**
 * Добавляет страницу настройки темы в админку Вордпресса
 */
function mytheme_customize_register( $wp_customize ) {
	/*
	Добавляем секцию в настройки темы
	*/
	$wp_customize->add_section(
		// ID
		'data_site_section',
		// Arguments array
		array(
			'title' => 'Данные сайта',
			'capability' => 'edit_theme_options',
			'description' => "Тут можно указать данные сайта"
		)
	);
	/*
	Добавляем поле контактных данных
	*/
	$wp_customize->add_setting(
		// ID
		'theme_contacttext',
		// Arguments array
		array(
			'default' => '',
			'type' => 'option'
		)
	);
	$wp_customize->add_control(
		// ID
		'theme_contacttext_control',
		// Arguments array
		array(
			'type' => 'text',
			'label' => "Текст с контактной информацией",
			'section' => 'data_site_section',
			// This last one must match setting ID from above
			'settings' => 'theme_contacttext'
		)
	);
	/*
	Добавляем поле телефона site_telephone
	*/
	$wp_customize->add_setting(
		// ID
		'site_telephone',
		// Arguments array
		array(
			'default' => '',
			'type' => 'option'
		)
	);
	$wp_customize->add_control(
		// ID
		'site_telephone_control',
		// Arguments array
		array(
			'type' => 'text',
			'label' => "Текст с телефоном",
			'section' => 'data_site_section',
			// This last one must match setting ID from above
			'settings' => 'site_telephone'
		)
	);
	}
	add_action( 'customize_register', 'mytheme_customize_register' );



function wonderland_customize_register( $wp_customize ) {

	

	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'wonderland_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'wonderland_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'wonderland_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wonderland_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wonderland_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wonderland_customize_preview_js() {
	wp_enqueue_script( 'wonderland-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'wonderland_customize_preview_js' );
