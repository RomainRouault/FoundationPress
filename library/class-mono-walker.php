<?php

/**
 * For create a one page menu
 * Customize the output of menus : transform URL page into ref 
 *
 * https://medium.com/@colirpixoil/cr%C3%A9er-un-site-one-page-propre-avec-wordpress-e817b3ab2a6f
*/

class mono_walker extends Walker_Nav_Menu{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){
      global $wp_query;
      $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
      $class_names = $value = '';
      $classes = empty( $item->classes ) ? array() : (array) $item->classes;

      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
      $class_names = ' class="'. esc_attr( $class_names ) . '"';

      $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

      $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
      $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
      $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';


      $parsedURL = parse_url( esc_attr( $item->url ));
      $cleanURL = substr_replace($parsedURL['path'],'',-1);//remove last '/';

      $pathTab = explode('/',$cleanURL);
      $pathTab[sizeof($pathTab)-1] = '#'.$pathTab[sizeof($pathTab)-1];
      $path = $pathTab[sizeof($pathTab)-1];

      $attributes .= ! empty( $item->url )        ? ' href="'   . $path .'"' : '';
      $attributes .= ! empty( $item->url )        ? ' data-title="'   .   sanitize_title($item->title) .'"' : '';
      $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

      if($depth != 0) $description = "";

      $item_output = $args->before;
      $item_output .= '<a'. $attributes .'>';
      $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
      $item_output .= $description.$args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}