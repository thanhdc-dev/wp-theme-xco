<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function () {
    // Theme options
    Container::make('theme_options', __('Theme Options'))
        ->add_tab(__('Header'), [
            Field::make('image', 'menu_logo', 'Logo (menu)'),
            Field::make('complex', 'crb_slides', 'Slides')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make('text', 'title', 'Title'),
                    Field::make('text', 'description', 'Description'),
                    Field::make('image', 'image', 'Image'),
                    Field::make('text', 'url', 'URL'),
                ]),
            Field::make('complex', 'crb_socials', 'Social')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make('text', 'title', 'Title'),
                    Field::make('text', 'icon_class', 'Icon (fontawesome v4)'),
                    Field::make('text', 'url', 'URL'),
                ]),
        ])
        ->add_tab(__('Footer'), [
            Field::make('text', 'footer_title', 'Title'),
            Field::make('text', 'footer_hotline', 'Hotline'),
            Field::make('image', 'footer_image', 'Image'),
            Field::make('complex', 'footer_contacts', 'Contacts')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make('text', 'title', 'Title'),
                    Field::make('text', 'address', 'Address'),
                    Field::make('text', 'phone', 'Phone'),
                ]),
            Field::make('image', 'footer_logo', 'Logo'),
        ]);

    // Home page setting
    Container::make('post_meta', __('Homepage Settings'))
        ->where('post_type', '=', 'page')
        ->where('post_template', '=', 'home.php')
        ->add_tab(__('Introduce'), array(
            Field::make('text', 'introduce_title', 'Title'),
            Field::make('rich_text', 'introduce_description', 'Description'),
            Field::make('image', 'introduce_image', 'Image'),
        ))
        ->add_tab(__('Project'), array(
            Field::make('text', 'project_title', 'Title'),
	        Field::make('image', 'project_background', 'Background'),
            Field::make('complex', 'project_items', 'Projects')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make('text', 'title', 'Title'),
                    Field::make('textarea', 'description', 'Description'),
                    Field::make('image', 'image', 'Image'),
                ]),
        ))
        ->add_tab(__('Video'), array(
            Field::make('text', 'video_title', 'Title'),
            Field::make('textarea', 'video_description', 'Decription'),
            Field::make('complex', 'video_items', 'Videos')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make('text', 'title', 'Title'),
                    Field::make('text', 'youtube_id', 'Youtube ID'),
                    Field::make('text', 'image_url', 'Image URL'),
                ]),
        ))
        ->add_tab(__('Feedback'), array(
            Field::make('text', 'feedback_title', 'Title'),
            Field::make('image', 'feedback_background', 'Background'),
            Field::make('complex', 'feedback_items', 'Feedbacks')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make('text', 'name', 'Name'),
                    Field::make('text', 'position', 'Position'),
                    Field::make('text', 'description', 'Description'),
                    Field::make('image', 'image', 'Avatar'),
                ]),
        ));

	// AboutUs page setting
	Container::make('post_meta', __('AboutUs Setting'))
		->where('post_type', '=', 'page')
		->where('post_template', '=', 'about-us.php')
		->add_tab(__('Introduce'), [
			Field::make('text', 'about-us_introduce_title', 'Title'),
			Field::make('rich_text', 'about-us_introduce_description', 'Description'),
			Field::make('text', 'about-us_introduce_prize_title', 'Prize title'),
			Field::make('complex', 'about-us_introduce_prizes', 'Prize')
				->set_layout('tabbed-horizontal')
				->add_fields([
					Field::make('image', 'image', 'Image'),
					Field::make('textarea', 'description', 'Description'),
				]),
		])
		->add_tab(__('Service'), [
			Field::make('text', 'about-us_service_title', 'Title'),
			Field::make('text', 'about-us_service_caption', 'Caption'),
			Field::make('rich_text', 'about-us_service_description', 'Description'),
			Field::make('text', 'about-us_service_items_title', 'Item title'),
			Field::make('complex', 'about-us_service_items', 'Item')
			     ->set_layout('tabbed-horizontal')
			     ->add_fields([
				     Field::make('image', 'image', 'Image'),
				     Field::make('text', 'name', 'Name'),
				     Field::make('text', 'url', 'URL'),
			     ]),
			Field::make('image', 'about-us_service_image', 'Image'),
			Field::make('image', 'about-us_service_logo', 'Logo'),
		])
		->add_tab(__('Stat'), [
			Field::make('text', 'about-us_stat_title', 'Title'),
			Field::make('image', 'about-us_stat_background', 'Background'),
			Field::make('complex', 'about-us_stat_items', 'Item')
			     ->set_layout('tabbed-horizontal')
			     ->add_fields([
				     Field::make('text', 'name', 'Name'),
				     Field::make('text', 'number', 'Number'),
			     ]),
		])
		->add_tab(__('Utility'), [
			Field::make('text', 'about-us_utility_title', 'Title'),
			Field::make('complex', 'about-us_utility_items', 'Item')
			     ->set_layout('tabbed-horizontal')
			     ->add_fields([
				     Field::make('image', 'image', 'Image'),
				     Field::make('textarea', 'description', 'Description'),
			     ]),
		]);

	// Archive service page setting
	Container::make('post_meta', __('Service Setting'))
         ->where('post_type', '=', 'service')
         ->add_tab(__('Implementation process'), [
	         Field::make('text', 'service_implementation_process_title', 'Title')->set_default_value( 'QUY TRÌNH TRIỂN KHAI' ),
	         Field::make('rich_text', 'service_implementation_process_description', 'Description'),
	         Field::make('image', 'service_implementation_process_background', 'Background'),
         ])
         ->add_tab(__('Attention'), [
			Field::make('text', 'service_attention_title', 'Title')->set_default_value( 'LƯU Ý DỊCH VỤ' ),
			Field::make('rich_text', 'service_attention_description', 'Description'),
		]);
});


