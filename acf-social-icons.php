<?php 
/*
Feature Name:   ACF Fields: Social Icons
Description:    Basic Column Setup
Version:        1.0
Dependencies:   ACF
*/

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5616234573ea0',
	'title' => 'Social Icons',
	'fields' => array (
		array (
			'key' => 'field_56162eafa026f',
			'label' => 'Networks',
			'name' => 'networks',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 100,
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
		        'key' => 'field_54065659b195a',
		        'label' => 'Facebook',
		        'name' => 'facebook',
		        'prefix' => '',
		        'type' => 'text',
		        'instructions' => 'Add the Facebook page here <strong style="float:right;">(ACF: facebook)</strong>',
		        'required' => 0,
		        'conditional_logic' => 0,
		        'default_value' => '',
		        'placeholder' => 'http://facebook.com/my-page',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
		        'readonly' => 0,
		        'disabled' => 0,
		),
		array (
		        'key' => 'field_54065716b195c',
		        'label' => 'Flicker',
		        'name' => 'flicker',
		        'prefix' => '',
		        'type' => 'text',
		        'instructions' => 'Add the Flickr page here <strong style="float:right;">(ACF: flicker)</strong>',
		        'required' => 0,
		        'conditional_logic' => 0,
		        'default_value' => '',
		        'placeholder' => 'https://www.flickr.com/photos/username/',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
		        'readonly' => 0,
		        'disabled' => 0,
		),
		array (
		        'key' => 'field_540657d4b195d',
		        'label' => 'Goodreads',
		        'name' => 'goodreads',
		        'prefix' => '',
		        'type' => 'text',
		        'instructions' => 'Add the Goodreads page here <strong style="float:right;">(ACF: goodreads)</strong>',
		        'required' => 0,
		        'conditional_logic' => 0,
		        'default_value' => '',
		        'placeholder' => 'http://www.goodreads.com/author/show/username',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
		        'readonly' => 0,
		        'disabled' => 0,
		),
		array (
		        'key' => 'field_54065876b195e',
		        'label' => 'Google Plus',
		        'name' => 'google_plus',
		        'prefix' => '',
		        'type' => 'text',
		        'instructions' => 'Add the Google+ page here <strong style="float:right;">(ACF: google_plus)</strong>',
		        'required' => 0,
		        'conditional_logic' => 0,
		        'default_value' => '',
		        'placeholder' => 'https://plus.google.com/u/0/your-user-id-here/posts',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
		        'readonly' => 0,
		        'disabled' => 0,
		),
		array (
		        'key' => 'field_540658d0b195f',
		        'label' => 'Instagram',
		        'name' => 'instagram',
		        'prefix' => '',
		        'type' => 'text',
		        'instructions' => 'Add the Instagram page here <strong style="float:right;">(ACF: instagram)</strong>',
		        'required' => 0,
		        'conditional_logic' => 0,
		        'default_value' => '',
		        'placeholder' => 'http://instagram.com/username',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
		        'readonly' => 0,
		        'disabled' => 0,
		),
		array (
		        'key' => 'field_5406594fb1960',
		        'label' => 'LinkedIn',
		        'name' => 'linkedin',
		        'prefix' => '',
		        'type' => 'text',
		        'instructions' => 'Add the LinkedIn page here <strong style="float:right;">(ACF: linkedin)</strong>',
		        'required' => 0,
		        'conditional_logic' => 0,
		        'default_value' => '',
		        'placeholder' => 'https://www.linkedin.com/profile/view?id=user-id',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
		        'readonly' => 0,
		        'disabled' => 0,
		),
		array (
		        'key' => 'field_540659a9b1961',
		        'label' => 'Pinterest',
		        'name' => 'pinterest',
		        'prefix' => '',
		        'type' => 'text',
		        'instructions' => 'Add the Pinterest page here <strong style="float:right;">(ACF: pinterest)</strong>',
		        'required' => 0,
		        'conditional_logic' => 0,
		        'default_value' => '',
		        'placeholder' => 'http://www.pinterest.com/username/',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
		        'readonly' => 0,
		        'disabled' => 0,
		),
		array (
		        'key' => 'field_54065a16b1962',
		        'label' => 'Twitter',
		        'name' => 'twitter',
		        'prefix' => '',
		        'type' => 'text',
		        'instructions' => 'Add the Twitter page here <strong style="float:right;">(ACF: twitter)</strong>',
		        'required' => 0,
		        'conditional_logic' => 0,
		        'default_value' => '',
		        'placeholder' => 'http://twitter.com/username',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
		        'readonly' => 0,
		        'disabled' => 0,
		),
		array (
		        'key' => 'field_54192a39b1963',
		        'label' => 'Vimeo',
		        'name' => 'vimeo',
		        'prefix' => '',
		        'type' => 'text',
		        'instructions' => 'Add the Vimeo page here <strong style="float:right;">(ACF: vimeo)</strong>',
		        'required' => 0,
		        'conditional_logic' => 0,
		        'default_value' => '',
		        'placeholder' => 'https://www.vimeo.com/username',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
		        'readonly' => 0,
		        'disabled' => 0,
		),
		array (
		        'key' => 'field_54065a39b1963',
		        'label' => 'YouTube',
		        'name' => 'youtube',
		        'prefix' => '',
		        'type' => 'text',
		        'instructions' => 'Add the YouTube page here <strong style="float:right;">(ACF: youtube)</strong>',
		        'required' => 0,
		        'conditional_logic' => 0,
		        'default_value' => '',
		        'placeholder' => 'https://www.youtube.com/user/username',
		        'prepend' => '',
		        'append' => '',
		        'maxlength' => '',
		        'readonly' => 0,
		        'disabled' => 0,
		),
		array (
			'key' => 'field_5616369181698',
			'label' => 'Icon Sets',
			'name' => 'icon_sets',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 100,
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_56163738ad50c',
			'label' => 'Icon Set',
			'name' => 'icon_set',
			'type' => 'repeater',
			'instructions' => 'Create a new set to be used in any given location on the site. <em>For Example: <strong>&#60 &#63 php do_action(\'action_name\'); &#63 &#62</strong></em>',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 0,
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Create a New Set',
			'sub_fields' => array (
				array (
					'key' => 'field_56163935d2787',
					'label' => 'Action Name',
					'name' => 'action-name',
					'type' => 'text',
					'instructions' => 'This is the name of the action placed in your theme. <strong>MUST BE UNIQUE!</strong>',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'header_social_icons',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5616374cad50d',
					'label' => 'Group',
					'name' => 'group',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'min' => 1,
					'max' => '',
					'layout' => 'table',
					'button_label' => 'Add a Network',
					'sub_fields' => array (
						array (
							'key' => 'field_56163763ad50e',
							'label' => 'Network',
							'name' => 'network',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								'facebook' => 'Facebook',
								'flicker' => 'Flicker',
								'goodreads' => 'Goodreads',
								'goodreads' => 'Goodreads',
								'google_plus' => 'Google Plus',
								'instagram' => 'Instagram',
								'linkedin' => 'LinkedIn',
								'pinterest' => 'Pinterest',
								'twitter' => 'Twitter',
								'youtube' => 'YouTube',
							),
							'default_value' => array (
								'Facebook' => 'Facebook',
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'placeholder' => '',
							'disabled' => 0,
							'readonly' => 0,
						),
						array (
							'key' => 'field_561637aea3fcb',
							'label' => 'Background Color',
							'name' => 'background_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#333333',
						),
						array (
							'key' => 'field_568923aea3fcb',
							'label' => 'Logo Color',
							'name' => 'logo_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#ffffff',
						),
						array (
							'key' => 'field_561637b6a3fcc',
							'label' => 'Shape',
							'name' => 'shape',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 20,
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								'Square' => 'Square',
								'Circle' => 'Circle',
							),
							'default_value' => array (
								'Square' => 'Square',
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'placeholder' => '',
							'disabled' => 0,
							'readonly' => 0,
						),
					),
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'social-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
?>