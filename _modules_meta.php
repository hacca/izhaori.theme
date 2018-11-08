<?php $title_default = '和歌山県田辺市のビジネスホテル花屋・花庵' ; ?>

<?php
if(!empty($post->post_content)){
    if(has_excerpt()){
        $desc = $post->post_excerpt;
    } else{
        $desc = $post->post_content;
    }
}else{
    $desc = get_bloginfo('description');
}
$desc = stripslashes(strip_tags(strip_shortcodes($desc)));
$desc = str_replace(array("\r\n","\r","\n"," ","　"," "), '', $desc );
$desc = trim($desc);
?>
<?php if (is_home() || is_front_page()) : ?>
<meta name="description" content="田辺市のビジネスホテル、ビジネスホテル花屋です。紀伊田辺駅徒歩5分と絶好の立地は観光・ビジネスに大変便利です。田辺市は熊野古道、天神崎など観光名所が多く、また隣の南紀白浜は白浜温泉や白良浜で有名な近畿有数のリゾート地です。田辺市のホテルをお探しならビジネスホテル花屋へ。" />
<title><?php echo $title_default ; ?></title>

<?php elseif( is_page( 'hanaiori' )):?>
<meta name="description" content="ホテル花屋の隣にできた一棟貸しのゲストハウス。ご家族や友人同士、グループでの気軽に利用できる別館「花庵（はないおり）」ができました。1日１組限定の一棟貸しなので気兼ねなくご利用いただけます。古い日本家屋をリノベーションした建物で、玄関を開けると家に帰ってきたような懐かしさに落ち着きます。キッチンもあり自炊も可能、合宿や長期滞在にもご利用ください。" />
<title>ホテル花屋の隣にできた一棟貸しのゲストハウス「花庵」hana-iori</title>

<?php else: ?>
<meta name="description" content="<?php bloginfo('name'); ?>の<?php the_title(); ?>ページです。<?php echo mb_substr($desc, 0, 160); ?>" />
<title><?php the_title(); ?> | <?php echo $title_default ; ?></title>
<?php endif; ?>
