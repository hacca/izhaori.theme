<?php

//   ---------------------------------------
//    その他の設定
//  ----------------------------------------


        //投稿ページ 独自css
        add_editor_style('editor-style.css');


    //偶数番目の記事に○○○する
    function is_even_post(){
        global $wp_query;
        return ((($wp_query->current_post+1) % 2) === 0);
    }


//スマートフォンを判別
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}


?>
