<?php get_header(); ?>


<main class="contents_wrapper" id="contents" role="main">

    <div class="md_mv__wrap">
        <figure class="md_mv__img"></figure>
    </div>


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


