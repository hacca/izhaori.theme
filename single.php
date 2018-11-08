<?php get_header(); ?>

<?php
    $type = get_post_type_object($post->post_type);
    $template_uri = get_template_directory_uri();
?>

<?php if(has_term('telework', 'articlecat', $post)): ?>
    <?php get_template_part( 'single-telework' ); ?>
<?php else: ?>


<div class="contents_wrapper">

<?php if (have_posts()) : ?>
<?php while ( have_posts() ) : the_post(); ?>



    <article class="p_singleArticle">
        <div class="p_singleArticle__row">
            <figure class="p_singleArticle__Eyecatch">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail('original_4-3__lrg', array('alt' =>$title, 'title' => $title, 'class' => 'p_singleArticle__eyeImg'));
                    }
                ?>
            </figure>
            <div class="p_singleArticle__header">
            <?php if(has_term('','articlecat')): ?>
            <?php
                $args = array(
                    'orderby' => 'term_order'
                );
                $article_terms = wp_get_object_terms($post->ID, array( 'articlecat'), $args );
                if(!empty($article_terms)){
                        if(!is_wp_error( $article_terms )){
                                foreach($article_terms as $term){
                                        echo '<span class="gf_robotoslab fw700 lt2 fz_13 p_singleArticle__mainterm">'.$term->slug.'</span>';
                                }
                        }
                }
            ?>
            <?php endif; ?>
            <time datetime="<?php the_time('c');?> " class="fz_12 p_singleArticle__date"><?php echo get_post_time('M j, Y'); ?></time>
            <h2 class="fz_30 fw700 p_singleArticle__ttl"><?php the_title();?></h2>
            <?php
                $articletags = get_the_terms($post->ID, 'articletag');
                //タームとURLを出力
                if(!empty($articletags)){
                        if(!is_wp_error( $articletags )){
                                echo '<ul class="fz_13 p_singleArticle__tag">';
                                foreach($articletags as $articletag){
                                        echo '<li><a href="'.get_term_link($articletag->slug, $articletag->taxonomy).'">'.$articletag->name.'</a></li>';
                                }
                                echo '</ul>';
                        }
                }
            ?>
            </div>

            <div class="fz_16 postEntry p_singleArticle__postEntry">
                <?php the_content(); ?>
            </div>
        </div>
    </article>

    <aside class="p_singleArticle__footer">
        <div class="sns_section post">
            <div class="sns_wrap">
                <span id="score-facebook" class="snsbtn count_mode">
                    <div class="fb-like" data-href="<?php echo the_permalink(); ?>" data-send="false" data-layout="box_count" data-show-faces="false" data-share="false"></div>
                </span>
                <span id="score-facebook" class="snsbtn icon_mode facebook">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(the_permalink()); ?>" class="btn" target="_blank">
                        <i class="icn fab fa-facebook-f"></i><span class="txt">シェア</span>
                    </a>
                </span>
                <span id="score-twitter" class="snsbtn icon_mode twitter">
                    <a href="//twitter.com/share?url=<?php echo urlencode(the_permalink()); ?>&amp;text=<?php echo urlencode(bloginfo('name')); ?><?php echo urlencode(the_title()); ?>" class="btn" target="_blank">
                        <i class="icn fab fa-twitter"></i><span class="txt">シェア</span>
                    </a>
                </span>
                <span id="score-google" class="snsbtn icon_mode google">
                    <a href="https://plus.google.com/share?url=<?php echo urlencode(the_permalink()); ?>" class="btn" target="_blank">
                        <i class="icn fab fa-google-plus-g"></i><span class="txt">シェア</span>
                    </a>
                </span>
                <span id="score-line" class="snsbtn icon_mode line">
                    <a href="http://line.me/R/msg/text/?<?php echo urlencode(bloginfo('name')); ?><?php echo urlencode(the_title()); ?><?php echo urlencode(the_permalink()); ?>" class="btn" target="_blank">
                        <i class="icn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/line_wh.svg" width="30" alt="line"></i><span class="txt">シェア</span>
                    </a>
                </span>
            </div>
        </div>
    </aside>


    <?php endwhile; ?>
<?php endif; ?>


</div><!-- contents_wrapper -->

<?php endif; ?>

<?php get_footer(); ?>

