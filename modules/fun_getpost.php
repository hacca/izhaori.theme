<?php

//   ---------------------------------------
//    pre_get_posts
//  ----------------------------------------

    function custom_query( $query ) {
        if ( is_admin() || ! $query->is_main_query() )
        return;
        if ( $query->is_home() ) { // ホーム
            $query->set( 'post_type', 'item' );
            $query->set( 'posts_per_page', -1 );
            $query->set( 'ignore_sticky_posts', 1 );
            $query->set( 'orderby', array(
                'meta_value' => 'desc',
                'term_order' => 'asc',
                'date' => 'asc',
                )
            );
            $query->set( 'order', 'ASC' );
            $query->set( 'tax_query',
                array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'itemcat',
                        'field' => 'slug',
                        'terms' => array( 'juban','haori' ),
                        'operator' => 'IN'
                    ),
                )
            );
            $query->set( 'meta_query',
                array(
                    'relation' => 'AND',
                    array(
                        'key'=>'item_sold__out',
                        'value' => array('販売中','売り切れ'),
                        'operator' => 'IN'
                    ),
                )
            );
        return;
        }
        if ( $query->is_post_type_archive( 'item' ) ) {
            $query->set( 'posts_per_page', -1 );
            $query->set( 'ignore_sticky_posts', 1 );
            $query->set( 'orderby', 'meta_value date' );
            $query->set( 'order', 'desc' );
            $query->set( 'meta_query',
                array(
                    'relation' => 'AND',
                    array(
                        'key'=>'item_sold__out',
                        'value' => array('販売中','売り切れ'),
                        'operator' => 'IN'
                    ),
                )
            );
            return;
        }
        if ( $query->is_tax( 'itemcat','' ) ) {
            $query->set( 'posts_per_page', -1 );
            $query->set( 'ignore_sticky_posts', 1 );
            $query->set( 'orderby', 'meta_value date' );
            $query->set( 'order', 'desc' );
            $query->set( 'meta_query',
                array(
                    'relation' => 'AND',
                    array(
                        'key'=>'item_sold__out',
                        'value' => array('販売中','売り切れ'),
                        'operator' => 'IN'
                    ),
                )
            );
            return;
        }
    }
    add_action( 'pre_get_posts', 'custom_query' );
?>
