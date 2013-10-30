<?php 
/**
	* walker_repsonsive_menu.php
	
	* Custom Menu Walker for Responsive Menus
	* Creates a <select> menu instead of the default
	* unordered list menus.
	
	* License: GNU GENERAL PUBLIC LICENSE Version 2
	* License URI: http://www.themovation.com/eatery/license 
	
	* @copyright  2012 Themovation
	* @version    1.0
	* @link       http://www.themovation.com/eatery
*/

class select_menu_walker extends Walker_Nav_Menu{
 
	 function start_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);
		$output .= "</option>\n";
	}
 
 
	function end_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);
		$output .= "";
	}
 
	 function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		$class_names = $value = '';
 
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
 
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
 
		//check if current page is selected page and add selected value to select element  
		  $selc = '';
		  $curr_class = 'current-menu-item';
		  $is_current = strpos($class_names, $curr_class);
		  if($is_current === false){
	 		  $selc = "";
		  }else{
	 		  $selc = " selected=\"selected\" ";
		  }
 
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
 
		$sel_val =  ' value="'   . esc_attr( $item->url        ) .'"';
 
		//check if the menu is a submenu
		switch ($depth){
		  case 0:
			   $dp = "";
			   break;
		  case 1:
			   $dp = "&raquo; ";
			   break;
		  case 2:
			   $dp = "&raquo;&raquo; ";
			   break;
		  case 3:
			   $dp = "&raquo;&raquo;&raquo; ";
			   break;
		  case 4:
			   $dp = "&raquo;&raquo;&raquo;&raquo; ";
			   break;
		  default:
			   $dp = "";
		}
 
 
		$output .= $indent . '<option'. $sel_val . $id . $value . $class_names . $selc . '>'.$dp;
 
		$item_output = $args->before;
		//$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		//$item_output .= '</a>';
		$item_output .= $args->after;
 
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
 
	function end_el(&$output, $item, $depth) {
		global $lastDepth;
		if ($lastDepth > $depth){
			$output .= "";	
		}else{
			$output .= "</option>\n";
		}
		$lastDepth = $depth;
		
	}
 
}