
<?php get_header();
if(have_posts()) {
    $type = get_post_type_object($post->post_type);
}
?>

<main class="contents_wrapper" id="contents" role="main">

<div class="fz_18 lt1 gf_ptsans md_tax__ttl"><?php single_term_title();?></div>

    <?php if (have_posts()) : ?>
        <div class="md_pg__wrap typo">
            <div class="l_row pd_sideItem">
                <section class="md_listItem__Wrap">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( '_modules_itemloop' ); ?>
                    <?php endwhile; ?>
                </section>
            </div>
        </div>
    <?php else: ?>
        <div class="md_pg__wrap typo">
            <div class="l_row pd_sideItem">
                <section class="md_listItem__Wrap">
                    <div class="md_listItem__nocontents">
                        <h3 class="fz_16 lt1 ttl">現在登録されている商品はありません。<em>No Items to Display.</em></h3>
                    </div>
                </section>
            </div>
        </div>
    <?php endif; ?>

</main><!--.contents_wrapper-->


<?php get_footer(); ?>

