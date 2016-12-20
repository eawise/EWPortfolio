<?php
	if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_556825bbadf77',
	'title' => __('Home Page Sections', 'coastal'),
	'fields' => array (
		array (
			'key' => 'field_556825ed08113',
			'label' => __('Home Page Sections', 'coastal'),
			'name' => 'home_page_sections',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'button_label' => __('Add Section', 'coastal'),
			'min' => '',
			'max' => '',
			'layouts' => array (
				array (
					'key' => '556825fb1ac85',
					'name' => 'collection',
					'label' => __('Collection', 'coastal'),
					'display' => 'row',
					'sub_fields' => array (
						array (
							'key' => 'field_55683a2163be3',
							'label' => __('Header Title', 'coastal'),
							'name' => 'coll_header_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'coll-section-header-title',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_5568267e08114',
							'label' => __('Section Sub-title', 'coastal'),
							'name' => 'coll_section_subtitle',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'coll-section-subtitle',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_557559353f557',
							'label' => __('Categories', 'coastal'),
							'name' => 'coll_categories',
							'type' => 'taxonomy',
							'instructions' => __('Select the category or categories of collection items', 'coastal'),
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'taxonomy' => 'portfolio_category',
							'field_type' => 'multi_select',
							'allow_null' => 0,
							'add_term' => 1,
							'load_save_terms' => 1,
							'return_format' => 'id',
							'multiple' => 0,
						),
						array (
							'key' => 'field_557559a33f559',
							'label' => __('Display Category Buttons?', 'coastal'),
							'name' => 'display_collection_buttons',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
						),
						array (
							'key' => 'field_55682c7ef388d',
							'label' => __('Sort order of items', 'coastal'),
							'name' => 'coll_sort',
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
								'ASC' => __('Oldest First', 'coastal'),
								'DESC' => __('Newest First', 'coastal'),
							),
							'default_value' => array (
								'ASC' => __('Oldest First', 'coastal'),
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
							'key' => 'field_5571350a1bb20',
							'label' => __('Background Color', 'coastal'),
							'name' => 'coll_background_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#fff',
						),
						array (
							'key' => 'field_557135411bb21',
							'label' => __('Text Color', 'coastal'),
							'name' => 'coll_text_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#333',
						),
						array (
							'key' => 'field_55753db4b3d0f',
							'label' => __('Category Button Background Color', 'coastal'),
							'name' => 'coll_cat_button_bg_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#FFF',
						),
						array (
							'key' => 'field_557543b265ecf',
							'label' => __('Category Button Hover Color', 'coastal'),
							'name' => 'coll_cat_button_hover_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#FFF',
						),
						array (
							'key' => 'field_55753e7ab3d10',
							'label' => __('Category Button Text Color', 'coastal'),
							'name' => 'coll_cat_button_text_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#333',
						),
						array (
							'key' => 'field_55754495d7ec6',
							'label' => __('Category Button Hover Text Color', 'coastal'),
							'name' => 'coll_cat_button_hover_text_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
						),
						array (
							'key' => 'field_55684ef2a9697',
							'label' => __('Menu Link', 'coastal'),
							'name' => 'coll_menu_link',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'coll_menu_link',
								'id' => '',
							),
							'default_value' => '/#',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '55682b40f3747',
					'name' => 'text',
					'label' => __('Text Section', 'coastal'),
					'display' => 'row',
					'sub_fields' => array (
						array (
							'key' => 'field_55683afccba47',
							'label' => __('Header Title', 'coastal'),
							'name' => 'txt_header_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'txt-section-header-title',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55682b6cf3748',
							'label' => __('Section Sub-title', 'coastal'),
							'name' => 'txt_section_subtitle',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'txt-section-subtitle',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_557135cf1bb22',
							'label' => __('Background Color', 'coastal'),
							'name' => 'txt_background_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#edf4f4',
						),
						array (
							'key' => 'field_557135f61bb23',
							'label' => __('Text Color', 'coastal'),
							'name' => 'txt_text_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#333',
						),
						array (
							'key' => 'field_55682bdef3749',
							'label' => __('Content', 'coastal'),
							'name' => 'txt_content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
						),
						array (
							'key' => 'field_55684f16a9698',
							'label' => __('Menu Link', 'coastal'),
							'name' => 'txt_menu_link',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'txt_menu_link',
								'id' => '',
							),
							'default_value' => '/#',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '55682c21f374a',
					'name' => 'latest',
					'label' => __('Latest Posts', 'coastal'),
					'display' => 'row',
					'sub_fields' => array (
						array (
							'key' => 'field_55683b19cba48',
							'label' => __('Header Title', 'coastal'),
							'name' => 'tl_header_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'tl-section-header-title',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55682c64f374b',
							'label' => __('Section Sub-title', 'coastal'),
							'name' => 'tl_section_subtitle',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'tl-section-subtitle',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55682da8f374e',
							'label' => __('Background Color', 'coastal'),
							'name' => 'tl_background_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#fff',
						),
						array (
							'key' => 'field_55682df9f374f',
							'label' => __('Text Color', 'coastal'),
							'name' => 'tl_text_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#333',
						),
						array (
							'key' => 'field_55682c7ef374c',
							'label' => __('Number of posts to display', 'coastal'),
							'name' => 'tl_number_of_posts',
				            'type' => 'number',
				            'instructions' => '',
				            'required' => 0,
				            'conditional_logic' => 0,
				            'wrapper' => array (
				                'width' => '',
				                'class' => '',
				                'id' => '',
				            ),
				            'default_value' => '3',
				            'placeholder' => 3,
				            'prepend' => '',
				            'append' => '',
				            'min' => -1,
				            'max' => '',
				            'step' => '',
				            'readonly' => 0,
				            'disabled' => 0,
						),
						array (
							'key' => 'field_55682ceef374d',
							'label' => __('Category', 'coastal'),
							'name' => 'tl_category',
							'type' => 'taxonomy',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'taxonomy' => 'category',
							'field_type' => 'multi_select',
							'allow_null' => 0,
							'add_term' => 0,
							'load_save_terms' => 0,
							'return_format' => 'id',
							'multiple' => 0,
						),
						array (
							'key' => 'field_55684f30a9699',
							'label' => __('Menu Link', 'coastal'),
							'name' => 'tl_menu_link',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'tl_menu_link',
								'id' => '',
							),
							'default_value' => '/#',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '55682eb6f3750',
					'name' => 'photo',
					'label' => __('Photo', 'coastal'),
					'display' => 'row',
					'sub_fields' => array (
						array (
							'key' => 'field_55682ef7f3751',
							'label' => __('Link URL', 'coastal'),
							'name' => 'blog_link_url',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55682f29f3752',
							'label' => __('Link Text', 'coastal'),
							'name' => 'blog_link_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_556830daf3753',
							'label' => __('Section Background Image', 'coastal'),
							'name' => 'blog_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '5568314df3754',
					'name' => 'contact',
					'label' => __('Contact', 'coastal'),
					'display' => 'row',
					'sub_fields' => array (
						array (
							'key' => 'field_55683b3fcba49',
							'label' => __('Header Title', 'coastal'),
							'name' => 'contact_header_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'contact-section-header-title',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_556831a7f3755',
							'label' => __('Section Sub-title', 'coastal'),
							'name' => 'contact_section_subtitle',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'contact-section-subtitle',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_5568329261707',
							'label' => __('Contact Form Shortcode', 'coastal'),
							'name' => 'contact_form_shortcode',
							'type' => 'text',
							'instructions' => __('Enter the contact form shortcode here.', 'coastal'),
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_5571361e1bb24',
							'label' => __('Background Color', 'coastal'),
							'name' => 'contact_background_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#fff',
						),
						array (
							'key' => 'field_5571367e1bb25',
							'label' => __('Text Color', 'coastal'),
							'name' => 'contact_text_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#333',
						),
						array (
							'key' => 'field_55684f4fa969b',
							'label' => __('Menu Link', 'coastal'),
							'name' => 'contact_menu_link',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => 'contact_menu_link',
								'id' => '',
							),
							'default_value' => '/#',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'front-page-main.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
	),
));

endif;
?>