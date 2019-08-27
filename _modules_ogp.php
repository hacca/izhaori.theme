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
<meta property="og:title" content="IZ HAORI" />
<meta property="og:description" content="絹織物を中心とした日本の高品質の着物を素材として、コートやガウンのようなHAORIを中心に、新たなデザインに作り変えています。一品一品素材である着物そのものの形状美や雰囲気を損なわずに、新たな息吹を吹き込んで作っています。"/>
<?php else: ?>
<meta property="og:title" content="<?php bloginfo('name'); ?> <?php the_title(); ?>" />
<meta property="og:description" content="<?php bloginfo('name'); ?>の<?php the_title(); ?>ページです。<?php echo mb_substr($desc, 0, 160); ?>"/>
<?php endif; ?>
<meta property="og:site_name" content="IZ HAORI" />
<meta property="fb:app_id" content="618071618595688" />


