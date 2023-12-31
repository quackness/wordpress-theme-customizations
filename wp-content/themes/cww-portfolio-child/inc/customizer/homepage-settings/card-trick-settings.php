<?php
/**
 *
 */

$wp_customize->add_section('cww_homepage_card_trick_section', array(
	'title' => esc_html__('Card Trick Section', 'cww-portfolio'),
	'panel' => 'cww_homepage_panel',
	'priority' => 50
)
);

//enable or disable section
$wp_customize->add_setting('cww_card_trick_enable',
	array(
		'default' => false,
		'sanitize_callback' => 'cww_card_trick_sanitize_checkbox',
	)
);

$wp_customize->add_control(new CWW_Portfolio_Checkbox($wp_customize, 'cww_card_trick_enable',
	array(
		'label' => esc_html__('Enable or Disable Section', 'cww-portfolio'),
		'section' => 'cww_homepage_card_trick_section',
		'priority' => 1,

	)
)
);

$wp_customize->add_setting('cww_card_trick_title',
	array(
		'default' => $default['cww_card_trick_title'],
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'postMessage'
	)
);

$wp_customize->add_control('cww_card_trick_title', array(
	'label' => esc_html__('Section Title', 'cww-portfolio'),
	'section' => 'cww_homepage_card_trick_section',
	'type' => 'text',
	'priority' => 50,

));


$wp_customize->add_setting('cww_card_trick_sub_title',
	array(
		'default' => $default['cww_card_trick_sub_title'],
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'postMessage'
	)
);

$wp_customize->add_control('cww_card_trick_sub_title', array(
	'label' => esc_html__('Section Subitle', 'cww-portfolio'),
	'section' => 'cww_homepage_card_trick_section',
	'type' => 'text',
	'priority' => 60,

));


$wp_customize->add_setting('cww_card_trick_post',
	array(
		'default' => $default['cww_card_trick_post'],
		'sanitize_callback' => 'cww_portfolio_sanitize_number'
	)
);

$wp_customize->add_control('cww_card_trick_post', array(
	'label' => esc_html__('Select Page', 'cww-portfolio'),
	'description' => esc_html__('Select page with card trick', 'cww-portfolio'),
	'section' => 'cww_homepage_card_trick_section',
	'type' => 'dropdown-pages',
	'priority' => 70,


));