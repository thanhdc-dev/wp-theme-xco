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
});


