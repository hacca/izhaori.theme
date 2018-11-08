<?php
    if(!empty($post->post_content)){
        if(has_excerpt()){
            $desc = $post->post_excerpt;
        } else{
            $desc = strip_tags(apply_filters('the_content', $post->post_content));
        }
    }else{
        $desc = get_bloginfo('description');
    }
    $desc = str_replace(array("&nbsp;","\r\n","\r","\n"," ","　","   "), '', $desc );
    $current_url = esc_url( home_url() . $_SERVER['REQUEST_URI'] );
?>
<?php if( is_home()):?>
<meta property="og:type" content="website" />
<?php else: ?>
<meta property="og:type" content="article" />
<?php endif; ?>
<meta property="og:url" content="<?php echo $current_url  ?>" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/ogp1200x630.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<?php if( is_home()):?>
<meta property="og:title" content="和歌山県田辺市のビジネスホテル花屋・花庵" />
<meta property="og:description" content="田辺市のビジネスホテル、ビジネスホテル花屋です。紀伊田辺駅徒歩5分と絶好の立地は観光・ビジネスに大変便利です。田辺市は熊野古道、天神崎など観光名所が多く、また隣の南紀白浜は白浜温泉や白良浜で有名な近畿有数のリゾート地です。田辺市のホテルをお探しならビジネスホテル花屋へ。"/>
<?php elseif( is_page( 'hanaiori' )):?>
<meta property="og:title" content="ホテル花屋の隣にできた一棟貸しのゲストハウス「花庵」hana-iori" />
<meta property="og:description" content="ホテル花屋の隣にできた一棟貸しのゲストハウス。ご家族や友人同士、グループでの気軽に利用できる別館「花庵（はないおり）」ができました。1日１組限定の一棟貸しなので気兼ねなくご利用いただけます。古い日本家屋をリノベーションした建物で、玄関を開けると家に帰ってきたような懐かしさに落ち着きます。キッチンもあり自炊も可能、合宿や長期滞在にもご利用ください。"/>
<?php else: ?>
<meta property="og:title" content="<?php bloginfo('name'); ?> <?php the_title(); ?>" />
<meta property="og:description" content="<?php bloginfo('name'); ?>の<?php the_title(); ?>ページです。<?php echo mb_substr($desc, 0, 160); ?>"/>
<?php endif; ?>
<meta property="og:site_name" content="ビジネスホテル花屋・花庵" />
<meta property="fb:app_id" content="618071618595688" />


