<?php get_header(); ?>

<?php
    $type = get_post_type_object($post->post_type);
    $template_uri = get_template_directory_uri();
?>

<main class="contents_wrapper" id="contents" role="main">
    <?php if (have_posts()) : ?>
        <div class="md_pg__wrap typo_static">
            <div class="l_row pd_side">
                <div class="sInfo_wrap">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <h2 class="fz_18 fw700 sInfo_term__ttl"><a href="<?php echo home_url('/'); ?>info/">Information</a></h2>
                        <article class="sInfo_postWrap">
                            <time datetime="<?php the_time('c');?> " class="fz_13 fw700 sInfo_date"><?php echo get_post_time('Y.m.d'); ?></time>
                            <h2 class="fz_24 fw700 sInfo_ttl"><?php the_title();?></h2>
                            <div class="fz_15 postEntry sInfo_postEntry">
                                <?php the_content(); ?>
                            </div>
                        </article>
                        <div class="fz_14 sInfo_totop">
                            <a href="<?php echo home_url('/'); ?>info/">お知らせ一覧へ</a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main><!--.contents_wrapper-->

<?php get_footer(); ?>

