
<?php get_header();
if(have_posts()) {
    $type = get_post_type_object($post->post_type);
    $term_object = get_queried_object();
}
?>

<main class="contents_wrapper" id="contents" role="main">

<div class="fz_18 lt1 gf_ptsans md_tax__ttl"><?php echo $term_object->name;?></div>

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
    <?php endif; ?>

</main><!--.contents_wrapper-->


<?php get_footer(); ?>

