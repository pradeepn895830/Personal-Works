<?php
function project2welve_alpha_process_region(&$vars) {
    if($vars['region'] == 'menu'){
        $menu_tree_page_data = menu_tree_page_data(variable_get('menu_main_links_source', 'main-menu'));
        $vars['main_menu_expanded'] = menu_tree_output($menu_tree_page_data);
    }
}
?>