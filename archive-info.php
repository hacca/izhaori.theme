
<?php get_header();
if(have_posts()) {
    $type = get_post_type_object($post->post_type);
}
?>

<main class="contents_wrapper" id="contents" role="main">
    <div class="md_pg__wrap typo_static">
        <div class="l_row pd_side">
            <div class="sInfo_wrap">
                <h2 class="fz_18 fw700 sInfo_term__ttl">Information</h2>
                <?php if (have_posts()) : ?>
                    <ul class="sInfo_postList">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink();?>">
                                <div class="wrap">
                                    <time datetime="<?php the_time('c');?> " class="fz_13 fw700 date"><?php echo get_post_time('Y.m.d'); ?></time>
                                    <h2 class="fz_16 title"><?php the_title();?></h2>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main><!--.contents_wrapper-->


<?php get_footer(); ?>

