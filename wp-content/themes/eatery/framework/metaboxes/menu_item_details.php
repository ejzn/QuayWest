<?php
/**
	* menu_item_details.php
	
	* Creates META BOXES (Menu Item Details) for the Food Menu Custom Post Type. 
	
	* License: GNU GENERAL PUBLIC LICENSE Version 2
	* License URI: http://www.themovation.com/eatery/license 
	
	* @copyright  2012 Themovation
	* @version    1.0
	* @link       http://www.themovation.com/eatery
*/


// Include & setup custom metabox and fields
$prefix = 'mg_';
$meta_boxes = array();

$meta_boxes[] = array(
    'id' => 'menu_item_details',
    'title' => __('Menu Item Details','eatery'),
    'pages' => array('food'), // post type
// condition examples: order of priority is: (1) id, (2) template, & (3) cat
//'condition' => array( 'type' => 'id', 'id' => '123' ),
//'condition' => array( 'type' => 'template', 'id' => '' , 'template' => 'page-gridblog.php' ),
//'condition' => array( 'type' => 'cat', 'id' => '' , 'cat_include' => '1,2,3,5' , 'cat_exclude' => '' ),
//'condition' => array( 'type' => 'cat', 'id' => '' , 'cat_include' => '' , 'cat_exclude' => '1,2,3,5' ),
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(
        array(
            'name' => __('Price Description','eatery'),
            'desc' => __('Price Description (optional)','eatery'),
            'id' => $prefix . 'price_description',
            'type' => 'text'
        ),
		array(
			'name' => __('Price','eatery'),
			'desc' => __('Price','eatery'),
			'id' => $prefix . 'price',
			'type' => 'text_money'
		),
		 array(
            'name' => __('Second Price Description','eatery'),
            'desc' => __('Second Price Description (optional)','eatery'),
            'id' => $prefix . 'second_price_description',
            'type' => 'text'
        ),
		array(
			'name' => __('Second Price','eatery'),
			'desc' => __('Second Price (optional)','eatery'),
			'id' => $prefix . 'second_price',
			'type' => 'text_money'
		),
		array(
            'name' => __('Third Price Description','eatery'),
            'desc' => __('Third Price Description (optional)','eatery'),
            'id' => $prefix . 'third_price_description',
            'type' => 'text'
        ),
		array(
			'name' => __('Third Price','eatery'),
			'desc' => __('Third Price (optional)','eatery'),
			'id' => $prefix . 'third_price',
			'type' => 'text_money'
		),
		array(
            'name' => __('Fourth Price Description','eatery'),
            'desc' => __('Fourth Price Description (optional)','eatery'),
            'id' => $prefix . 'fourth_price_description',
            'type' => 'text'
        ),
		array(
			'name' => __('Fourth Price','eatery'),
			'desc' => __('Fourth Price (optional)','eatery'),
			'id' => $prefix . 'fourth_price',
			'type' => 'text_money'
		),
		array(
            'name' => __('Fifth Price Description','eatery'),
            'desc' => __('Fifth Price Description (optional)','eatery'),
            'id' => $prefix . 'fifth_price_description',
            'type' => 'text'
        ),
		array(
			'name' => __('Fifth Price','eatery'),
			'desc' => __('Fifth Price (optional)','eatery'),
			'id' => $prefix . 'fifth_price',
			'type' => 'text_money'
		),
		array(
			'name' => __('Item Details Link','eatery'),
			'desc' => __('Disable Link to Item Details Page','eatery'),
			'id' => $prefix . 'disable_details_link',
			'type' => 'checkbox'
		),
    )
);

require_once('lib/init.php' );