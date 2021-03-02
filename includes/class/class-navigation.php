<?php

//theme options
add_theme_support('menus');

//menus

register_nav_menus(

    array(

        'main-menu' => 'Main Menu Location',
        'top-right-menu' => 'Top Right Menu'
    )
);

/* Add custom classes to list item "li" */
function wpdocs_channel_nav_class( $classes, $item, $args ,$depth = 0) {
 
    if ( 'main-menu' === $args->theme_location ) {

        if($depth < 1){
            $classes[] = "nav-item";
        }
    }
    elseif( 'top-right-menu' === $args->theme_location ){
        $classes[] = 'dropdown-item';
    }
 
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'wpdocs_channel_nav_class' , 10, 4 );



function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
    if ( 'main-menu' === $args->theme_location ) {
        if ( $depth == 1 ) {
            $item_output = preg_replace('/<a /', '<a class="inner-drop" ', $item_output, 1);
        } else if ( $depth == 2 ){
            $item_output = preg_replace('/<a /', '<a class="" ', $item_output, 1);
        }
        else{
            $item_output = preg_replace('/<a /', '<a class="nav-link" ', $item_output, 1);
        }
    }

    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);

//custom nav_waljker
class Main_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t",$depth);
        $submenu = ($depth > 0) ? ' inner-menu' : 'dropdown-menu';
        $output .= "\n$indent<ul class=\"$submenu depth_$depth\">\n";  }
    
    
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span
    
        $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
    
        $li_attributes = '';
        $class_names = $value = '';
    
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
        if ($args->walker->has_children) {
            if (0 === $depth) {
              $classes[] = 'dropdown';
            }else{
              $classes[] = 'dropdown-item';
            }
          } else {
            if ($depth != 0 && $depth < 2 ) {
            $classes[] = 'dropdown-item';
            }
          }
          $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
          $classes[] = 'menu-item-' . $item->ID;
    
        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';
    
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
    
        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
    
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
    
        $attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle"' : '';
    
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= ( $depth == 0 && $args->walker->has_children ) ? '</a>' : '</a>';
        $item_output .= $args->after;
    
        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    
    }
}



?>