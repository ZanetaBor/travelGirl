<?php 
/*
* Register New Post Type
*/

    add_action('init', 'travelGirl_init_posttypes');
    
    function travelGirl_init_posttypes(){
            
        $portfolio_args = array(
            'labels' => array(
                'name' => 'Portfolio',
                'singular_name' => 'Portfolio',
                'all_items' => 'Wszystkie posty',
                'add_new' => 'Dodaj nowy',
                'add_new_item' => 'Dodaj nowy post',
                'edit_item' => 'Edytuj',
                'new_item' => 'Nowy post',
                'view_item' => 'Pokaż post',
                'search_items' => 'Przeszukaj posty',
                'not_found' =>  'Nie znaleziono',
                'not_found_in_trash' => 'Nie znaleziono w koszu', 
                'parent_item_colon' => ''
            ),

            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title', 'editor', 'thumbnail','excerpt','custom-fields', 'post-formats'
            ),
            'has_archive' => true            
        );
        
        register_post_type('portfolio', $portfolio_args);
        
    };
/*
* Register new taxonomy
 */
    // add_action('init', 'travelGirl_init_taxonomies');
    
    // function travelGirl_init_taxonomies(){
        
    //         'categories',
    //         array('portfolio'),
    //         array(
    //             'hierarchical' => false,
    //             'labels' => array(
    //                 'name' => 'Kategorie',
    //                 'singular_name' => 'Kategorie',
    //                 'search_items' =>  'Szukaj kategorii',
    //                 'all_items' => 'Wszystkie kategorie',
    //                 'edit_item' => 'Edytuj kategorię', 
    //                 'update_item' => 'Uaktualnij',
    //                 'add_new_item' => 'Dodaj nową kategorię',
    //                 'new_item_name' => 'Nazwa kategorii',
    //                 'add_or_remove_items' => 'Dodaj lub usuń',
    //                 'menu_name' => 'Kategorie',
    //             ),
    //             'show_ui' => true,           
    //             'update_count_callback' => '_update_post_term_count',
    //             'query_var' => true,
    //     ));
    // }

?>      