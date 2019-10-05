<?php

    //管理画面 [設定 - メディア] で指定する 「大サイズ」 の幅の上限
    if ( ! isset( $content_width ) )
        $content_width = 780;

    //サムネイルサイズ
    add_theme_support('post-thumbnails');
    add_image_size( 'original_thumbsq_lrg', 500, 500, true );
    add_image_size( 'original_4-3__mid', 800, 600, true );
    add_image_size( 'original_16-10__midx', 750, 1200, true );

    //追加したサイズの挿入
    add_filter('image_size_names_choose', 'me_display_image_size_names_muploader', 11, 1);
    function me_display_image_size_names_muploader( $sizes ) {
        $new_sizes = array();
        $added_sizes = get_intermediate_image_sizes();
        foreach( $added_sizes as $key => $value) {
            $new_sizes[$value] = $value;
        }
        $new_sizes = array_merge( $new_sizes, $sizes );
        return $new_sizes;
    }

    //サムネイルサイズ
    add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list',) );
    add_theme_support( 'post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',) );

    //投稿ページ 独自css
    add_editor_style('editor-style.css');

    //Contactform head 出力
    add_filter( 'wpcf7_load_js', '__return_false' );
    add_filter( 'wpcf7_load_css', '__return_false' );

    //偶数番目の記事に○○○する
    function is_even_post(){
        global $wp_query;
        return ((($wp_query->current_post+1) % 2) === 0);
    }
    function is_3th_post(){
        global $wp_query;
        return ((($wp_query->current_post+1) % 3) === 0);
    }

    require_once locate_template('modules/fun_output-ext.php');             //  テキストなどの出力回り
    require_once locate_template('modules/fun_posttype.php');               //  ポストタイプ
    require_once locate_template('modules/fun_getpost.php');                //  pre_get_post
    require_once locate_template('modules/fun_admin.php');              //  管理画面関係
?>
