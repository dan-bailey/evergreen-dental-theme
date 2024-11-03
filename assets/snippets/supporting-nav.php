<!-- Add to functions.php -->
class Tailwind_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class=\"hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10\">\n";
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</div>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= '<a' . $id . $class_names . ' href="' . esc_url($item->url) . '" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</a>';
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "\n";
    }
}

<!-- Add to header.php -->
<?php
wp_nav_menu(array(
    'theme_location' => 'primary', // Change this to your registered menu location
    'walker'         => new Tailwind_Nav_Walker(),
    'container'      => false,
    'items_wrap'     => '<div class="hidden sm:block sm:ml-6"><div class="flex space-x-4">%3$s</div></div>',
));
?>

<!-- add to functions.php -->
function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );

