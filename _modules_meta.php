<?php $title_default = 'IZ HAORI' ; ?>

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
<meta name="description" content="絹織物を中心とした日本の高品質の着物を素材として、コートやガウンのようなHAORIを中心に、新たなデザインに作り変えています。一品一品素材である着物そのものの形状美や雰囲気を損なわずに、新たな息吹を吹き込んで作っています。" />
<title><?php echo $title_default ; ?></title>

<?php else: ?>
<meta name="description" content="<?php bloginfo('name'); ?>の<?php the_title(); ?>ページです。<?php echo mb_substr($desc, 0, 160); ?>" />
<title><?php the_title(); ?> | <?php echo $title_default ; ?></title>
<?php endif; ?>
