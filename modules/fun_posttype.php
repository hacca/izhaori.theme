<?php

//   ---------------------------------------
//    カスタムポストタイプ設定
//  ----------------------------------------


    //     コンテンツ カスタムポスト
    // ---------------------------------------------

add_action( 'init', 'create_post_type_item' );
function create_post_type_item() {
    $args = array(
        'label' => 'アイテム',
        'labels' => array(
            'singular_name' => 'アイテム',
            'add_new_item' => 'アイテムの新規作成',
            'add_new' => '新規作成',
            'new_item' => '新規作成',
            'view_item' => '記事を表示',
            'not_found' => '見つかりません',
            'not_found_in_trash' => 'ゴミ箱にはありません',
            'search_items' => '検索',
        ),
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'item', 'with_front' =>false ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array('title'),
        'has_archive' => 'item',
                //posttypeにオリジナルの権限
                //'capability_type' => array( 'item', 'items' ),
                //'map_meta_cap' => true
    );
    register_post_type('item', $args);
    $args = array(
        'label' => 'カテゴリー',
        'labels' => array(
            'name' => 'カテゴリー',
            'singular_name' => 'カテゴリー',
            'search_items' => 'カテゴリーを検索',
            'popular_items' => 'よく使われているカテゴリー',
            'all_items' => 'すべてのカテゴリー',
            'parent_item' => '親カテゴリー',
            'edit_item' => 'カテゴリーの編集',
            'update_item' => '更新',
            'add_new_item' => '新規カテゴリーを追加',
            'new_item_name' => '新しいカテゴリー',
        ),
        'public' => true,
        'show_ui' => true,
        'hierarchical' => true,
        'rewrite' => array(true, 'with_front' => false),
        'capabilities' => array(
            'assign_terms' => 'edit_others_posts',
            'edit_terms' => 'edit_theme_options'
        )
    );
    register_taxonomy('itemcat', 'item', $args);
}


    //管理画面
function manage_item_posts_columns($columns) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => 'タイトル',
        'itemcat' => 'カテゴリー',
        'thumbnail' => 'サムネイル',
    );
    return $columns;
}
function add_column_item($column_name, $post_id) {
    if( $column_name == 'thumbnail' ) {
        if(get_field('item_img1')) {
            $thumb_id = get_field('item_img1');
            echo wp_get_attachment_image($thumb_id,array(60, 60));
        }
    }
    if( $column_name == 'itemcat' ) {
        echo get_the_term_list($post_id, 'itemcat','',' , ','');
    }
    if( $column_name == 'articletag' ) {
        echo get_the_term_list($post_id, 'articletag','',' , ','');
    }
}
add_filter( 'manage_item_posts_columns', 'manage_item_posts_columns' );
add_action( 'manage_posts_custom_column', 'add_column_item', 10, 2 );


add_action( 'init', 'create_post_type_info' );
function create_post_type_info() {
    $args = array(
        'label' => 'お知らせ',
        'labels' => array(
            'singular_name' => 'お知らせ',
            'add_new_item' => 'お知らせの新規作成',
            'add_new' => '新規作成',
            'new_item' => '新規作成',
            'view_item' => '記事を表示',
            'not_found' => '見つかりません',
            'not_found_in_trash' => 'ゴミ箱にはありません',
            'search_items' => '検索',
        ),
        'public' => false,
        'show_ui' => true,
        'query_var' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'info', 'with_front' =>false ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-rss',
        'supports' => array('title'),
        'has_archive' => false,
    );
    register_post_type('info', $args);
}




//   ---------------------------------------
//    カスタムポストタイプ共通設定
//  ----------------------------------------

    //   投稿一覧ページ
    //  ----------------------------------------
        //投稿一覧で「絞り込み系」を非表示
            // if (!current_user_can('administrator')) {
            //  add_filter('months_dropdown_results', '__return_empty_array');
            //  add_filter( 'bulk_actions-edit-store', '__return_empty_array' );
            //  add_filter( 'bulk_actions-edit-article', '__return_empty_array' );
            // }

        // 投稿一覧でクイック投稿を非表示
        // add_filter( 'post_row_actions', 'hide_quickedit' );
        // add_filter( 'page_row_actions', 'hide_quickedit' );
        // function hide_quickedit($actions){
        //  unset($actions['inline hide-if-no-js']);
        //  return $actions;
        // }



//   検索結果
//  ----------------------------------------

    // テンプレート読み込みフィルターをカスタマイズ
add_filter('template_include','custom_search_template');
function custom_search_template($template){
            // 検索結果の時
    if ( is_search() ) {
                // 表示する投稿タイプを取得
        $post_types = get_query_var('post_type');
                // search-{$post_type}.php の読み込みルールを追加
        foreach ( (array) $post_types as $post_type )
            $templates[] = "search-{$post_type}.php";
        $templates[] = 'search.php';
        $template = get_query_template('search',$templates);
    }
    return $template;
}

//   タイトルプレースホルダー
//  ----------------------------------------

    //タイトルプレースホルダーを変更
function change_default_title( $title ) {
    $screen = get_current_screen();
    if ( $screen -> post_type == 'item' ) {
        $title = '日本語の商品名を入力';
    }
    return $title;
}
add_filter('enter_title_here', 'change_default_title');


?>
