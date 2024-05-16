<?php
    //for admin menu
        register_nav_menus(
            array('primary-menu'=>'Top Menu')
        );
    //for thumbnail image
    add_theme_support('post-thumbnails');


//CUSTOM COLUMN FOR TEAM MEMBERS (ADMIN PANEL):

    // Add the custom column to the Team Members post type
    add_filter('manage_team_members_posts_columns', 'add_team_members_columns');
    function add_team_members_columns($columns) {
        $columns['designation'] = __('Designation');
        return $columns;
    }

    // Populate the custom column with the designation data
    add_action('manage_team_members_posts_custom_column', 'populate_team_members_columns', 10, 2);
    function populate_team_members_columns($column, $post_id) {
        if ('designation' === $column) {
            $designation = get_post_meta($post_id, 'designation', true); // field name
            echo esc_html($designation);
        }
    }

    // Make the designation column sortable
    add_filter('manage_edit-team_members_sortable_columns', 'team_members_sortable_columns');
    function team_members_sortable_columns($columns) {
        $columns['designation'] = 'designation';
        return $columns;
    }

    // Adjust the query to sort by designation
    add_action('pre_get_posts', 'team_members_orderby');
    function team_members_orderby($query) {
        if (!is_admin()) {
            return;
        }

        $orderby = $query->get('orderby');

        if ('designation' === $orderby) {
            $query->set('meta_key', 'designation'); // filed name
            $query->set('orderby', 'meta_value');
        }
    }

?>
