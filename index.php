<?php get_header(); ?>


<main class="contents_wrapper" id="contents" role="main">

    <div class="md_mv__wrap">
        <figure class="md_mv__img"></figure>
        <?php
        $args = array(
            'post_type'=>'info',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'desc',
            'post_status'=> 'publish',
            'meta_query'=> array(
                array(
                    'key'=>'info_sticky',
                    'value'=> '1',
                    'compare' => 'IN',
                ))
        );
        $info_post = get_posts( $args );
        ?>
        <?php if($info_post):?>
            <?php foreach($info_post as $post) : setup_postdata( $post );?>
                <div class="fz_15 md_header__info">
                    <a href="<?php the_permalink(); ?>"><?php echo title_character_limit(46);?></a>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>
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


