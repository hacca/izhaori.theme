<?php

//   ---------------------------------------
//    基本設定
//  ----------------------------------------

//管理画面 [設定 - メディア] で指定する 「大サイズ」 の幅の上限
if ( ! isset( $content_width ) )
    $content_width = 780;

    //サムネイルサイズ
add_theme_support('post-thumbnails');
add_image_size( 'original_thumbsq_lrg', 500, 500, true );
add_image_size( 'original_4-3__portrait', 600, 800, true );
add_image_size( 'original_4-3__mid', 800, 600, true );
add_image_size( 'original_4-3__lrg', 1200, 900, true );
add_image_size( 'original_16-9__mid', 800, 450, true );

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
?>
