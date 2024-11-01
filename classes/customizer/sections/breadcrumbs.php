<?php
/**
 * SmartDocs Customizer Controls for breadcrumbs.
 *
 * @package SmartDocs\Classes\Customizer
 * @since 1.0.0
 */

use SmartDocs\Customizer_Control;

// Breadcrumbs.
$wp_customize->add_section(
	'smartdocs_breadcrumbs_settings',
	array(
		'title'    => __( 'Breadcrumbs', 'smart-docs' ),
		'priority' => 5,
	)
);

$wp_customize->add_setting(
	'smartdocs_single_doc_display_breadcrumbs',
	array(
		'default'    => 'yes',
		'capability' => 'edit_theme_options',
	)
);

$wp_customize->add_control(
	'smartdocs_single_doc_display_breadcrumbs_control',
	array(
		'label'       => __( 'Show on Single Doc', 'smart-docs' ),
		'description' => __( 'Show breadcrumbs on the single doc page.', 'smart-docs' ),
		'section'     => 'smartdocs_breadcrumbs_settings',
		'settings'    => 'smartdocs_single_doc_display_breadcrumbs',
		'type'        => 'select',
		'choices'     => array(
			'yes' => __( 'Yes', 'smart-docs' ),
			'no' => __( 'No', 'smart-docs' ),
		),
	)
);

$wp_customize->add_setting(
	'smartdocs_taxonomy_archives_display_breadcrumbs',
	array(
		'default'    => 'yes',
		'capability' => 'edit_theme_options',
	)
);

$wp_customize->add_control(
	'smartdocs_taxonomy_archives_display_breadcrumbs_control',
	array(
		'label'       => __( 'Show on Taxonomy Archives', 'smart-docs' ),
		'description' => __( 'Show breadcrumbs on the taxonomy archives.', 'smart-docs' ),
		'section'     => 'smartdocs_breadcrumbs_settings',
		'settings'    => 'smartdocs_taxonomy_archives_display_breadcrumbs',
		'type'        => 'select',
		'choices'     => array(
			'yes' => __( 'Yes', 'smart-docs' ),
			'no' => __( 'No', 'smart-docs' ),
		),
	)
);

/**
 * Register Sections.
 */
$wp_customize->get_section( 'smartdocs_breadcrumbs_settings' )->panel = 'smartdocs_style_options';
