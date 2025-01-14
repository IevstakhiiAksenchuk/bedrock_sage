<?php

namespace App\Walkers;

use Walker_Nav_Menu;

class NavWalker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);

        // Adjust positioning for nested levels
        $position_class = $depth === 0 ? 'absolute left-0 top-full pt-2 bg-transparent' : 'bg-white absolute left-full top-0';

        $classes = "submenu hidden group-hover:block text-black shadow-lg min-w-[220px] $position_class";
        $output .= "\n$indent<ul class=\"$classes\">\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = $depth ? str_repeat("\t", $depth) : '';

        // Base classes for menu items
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $classes[] = 'menu-item';

        // Apply 'active' class only to level 2 and deeper items
        if ($depth > 0 && (in_array('current-menu-item', $classes) || in_array('current-menu-ancestor', $classes) || in_array('current-menu-parent', $classes))) {
            $classes[] = 'active';
        }

        // Add "group" and "relative" classes for items with children
        if ($args->walker->has_children) {
            $classes[] = 'group relative';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= $indent . '<li' . $class_names . '>';

        $attributes = '';
        if (!empty($item->url)) {
            $attributes .= ' href="' . esc_attr($item->url) . '"';
        }

        // Specific classes for level 1 vs deeper levels
        $link_classes = $depth === 0
            ? 'flex items-center px-4 py-2 block bg-transparent text-white hover:bg-transparent'
            : 'px-4 py-2 block bg-white text-black hover:bg-[#BA2C73] hover:text-white';

        // Add caret only for items deeper than level 1
        $caret = ($args->walker->has_children && $depth > 0)
            ? '<span class="caret-right ml-2 inline-block w-2 h-2 bg-current rotate-45 transform origin-center"></span>'
            : '';

        $item_output = $args->before ?? '';
        $item_output .= '<a class="' . $link_classes . '"' . $attributes . '>';
        $item_output .= $args->link_before ?? '';
        $item_output .= apply_filters('the_title', $item->title, $item->ID);
        $item_output .= $args->link_after ?? '';
        $item_output .= $caret;
        $item_output .= '</a>';
        $item_output .= $args->after ?? '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
