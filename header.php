<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php if(is_home()){ echo 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#'; }else{ echo 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#'; } ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width initial-scale=1, user-scalable=yes">
    <?php get_template_part( '_modules_meta' ); ?>
    <?php get_template_part( '_modules_ogp' ); ?>
    <?php wp_deregister_script('jquery'); ?>
    <?php wp_head();?>
    <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/default.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Noto+Serif+JP" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css?20190605" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130009474-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-130009474-1');
    </script>
</head>

<body>

    <div class="wrapper" id="top">

    <?php if (is_home()): ?>
        <header class="md_header" data-role="header" id="fixnav">
            <div class="md_head__navWrap">
                <h1 class="md_head__logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/iz_logo.svg" alt="IZ" width="60"></a>
                </h1>
                <nav class="fz_20 lt1 gf_ptsans md_glnav">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/itemcat/haori/">HAORI</a></li>
                        <li><a href="<?php echo home_url(); ?>/itemcat/juban/">JUBAN</a></li>
                        <li><a href="<?php echo home_url(); ?>/itemcat/obi/">OBI</a></li>
                        <li><a href="<?php echo home_url(); ?>/concept/">CONCEPT</a></li>
                        <li><a href="<?php echo home_url(); ?>/shop/" class="shop">SHOP</a></li>
                    </ul>
                </nav>
            </div><!-- md_head__navWrap -->
        </header>

        <div class="md_glnavi__triger" id="drawer_trigger">
            <span></span><span></span><span></span>
        </div>

    <?php else:?>
        <header class="md_header__common" data-role="header" id="fixnav">
            <div class="navWrap">
                <h1 class="md_head__logoCommon">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/iz_logo.svg" alt="IZ" width="60"></a>
                </h1>
                <div class="md_glnavi__trigerCommon" id="drawer_trigger">
                    <span></span><span></span><span></span>
                </div>
            </div><!-- md_head__navWrap -->
        </header>

    <?php endif;?>

        <nav class="md_drawer__nav" id="md_drawer__nav">
            <div class="innr">
                <ul class="lt1 gf_ptsans md_drawer__navList">
                    <li><a href="<?php echo home_url(); ?>/itemcat/haori/">HAORI</a></li>
                    <li><a href="<?php echo home_url(); ?>/itemcat/juban/">JUBAN</a></li>
                    <li><a href="<?php echo home_url(); ?>/itemcat/obi/">OBI</a></li>
                    <li><a href="<?php echo home_url(); ?>/concept/">CONCEPT</a></li>
                    <li>
                        <a href="<?php echo home_url(); ?>/shop/" class="shop">SHOP</a>
                    </li>
                    <li>
                        <a href="https://izhaori.official.ec/" target="new" class="cart" rel="noopener noreferrer">ONLINE STORE</a>
                    </li>
                    <li class="flex">
                        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/encryption_c.js"></script>
                        <a href="https://www.facebook.com/izhaori/" target="new" class="snsicon" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/izhaori8635/" target="new" class="snsicon" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <div class="md_drawer__close" id="md_drawer__close"></div>
            </div>
        </nav>













