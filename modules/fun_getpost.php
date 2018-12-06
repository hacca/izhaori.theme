<?php

//   ---------------------------------------
//    pre_get_posts
//  ----------------------------------------

    function custom_query( $query ) {
        if ( is_admin() || ! $query->is_main_query() )
        return;
        if ( $query->is_home() ) { // ホーム
            $query->set( 'post_type', 'item' );
            $query->set( 'posts_per_page', 1 );
            $query->set( 'ignore_sticky_posts', 1 );
            $query->set( 'orderby', 'date' );
            $query->set( 'order', 'asc' );
        return;
        }
        if ( $query->is_post_type_archive( 'item' ) ) {
            $query->set( 'posts_per_page', 8 );
            $query->set( 'ignore_sticky_posts', 0 );
            $query->set( 'orderby', 'date' );
            $query->set( 'order', 'desc' );
            return;
        }
        if ( $query->is_tax( 'itecat','' ) ) {
            $query->set( 'posts_per_page', 8 );
            $query->set( 'ignore_sticky_posts', 0 );
            $query->set( 'orderby', 'date' );
            $query->set( 'order', 'desc' );
            return;
        }
    }
    add_action( 'pre_get_posts', 'custom_query' );
?>
