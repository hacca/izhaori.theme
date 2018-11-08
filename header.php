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
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127427872-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-127427872-1');
    </script>

</head>

<body<?php if(is_home() || is_page(array('access','hanaiori'))){ echo ' onload="initialize();"'; } ?>>
    <?php if(!is_page('hanaiori')): ?>
        <div class="wrapper" id="top">
            <header class="md_header" data-role="header" id="fixnav">
                <div class="md_head__navWrap">
                    <h1 class="dnon">ホテル花屋</h1>
                    <div class="md_glnavi__triger" id="drawer_trigger">
                        <span></span><span></span>
                    </div>
                    <div class="md_head__logo">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_with.svg" alt="ホテル花屋" width="100"></a>
                    </div>
                    <nav class="fz_15 gf_sawarabi lt1 md_glnav">
                        <ul>
                            <li class="pri_low"><a href="<?php echo home_url(); ?>">ホーム</a></li>
                            <li class="pri_high"><a href="<?php echo home_url(); ?>/about/"<?php if(is_page('about')){ echo ' class="current"'; } ?>>ホテル花屋について</a></li>
                            <li><a href="<?php echo home_url(); ?>/roomtype/"<?php if(is_page('roomtype')){ echo ' class="current"'; } ?>>客室<span class="pri_low__txt">のご案内</span></a></li>
                            <li><a href="<?php echo home_url(); ?>/access/"<?php if(is_page('access')){ echo ' class="current"'; } ?>><span class="pri_low__txt">交通</span>アクセス</a></li>
                            <li class="pri_mid"><a href="<?php echo home_url(); ?>/sightseeing/"<?php if(is_page('sightseeing')){ echo ' class="current"'; } ?>>周辺情報・観光案内</a></li>
                            <li><a href="<?php echo home_url(); ?>/contact/"<?php if(is_page('contact')){ echo ' class="current"'; } ?>>お問い合わせ</a></li>
                            <li class="pri_res"><a href="<?php echo home_url(); ?>/hanaiori/"<?php if(is_page('hanaiori')){ echo ' class="current"'; } ?> onClick="gtag('event', 'click', {'event_category': 'ボタン','event_label': 'header_hanaiori__txt', 'value': 1});">花庵</a></li>
                        </ul>
                    </nav>
                    <nav class="md_head__hlogo">
                        <a href="<?php echo home_url(); ?>/hanaiori/" onClick="gtag('event', 'click', {'event_category': 'ボタン','event_label': 'header_hanaiori__img', 'value': 1});"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_hanaan.svg" alt="ゲストハウス花庵" width="150"></a>
                    </nav>
                    <nav class="md_head__cta">
                        <a href="https://hotel-hanaya.rwiths.net/r-withs/tfi0010a.do" target="new" class="fz_14 fw600 lt1 cta_btn" onClick="gtag('event', 'click', {'event_category': 'ボタン','event_label': 'header_reservation', 'value': 1});">ご予約<span>はこちら</span></a>
                        <a href="https://www.kumano-travel.com/index/en/action_ContentsDetail_Detail/id119" target="new" class="fz_14 gf_raleway fw600 lt1 cta_btn lang" onClick="gtag('event', 'click', {'event_category': 'ボタン','event_label': 'header_english', 'value': 1});">EN<span>GLISH</span></a>
                    </nav>
                </div><!-- md_head__navWrap -->
            </header>
        <?php else: ?>
            <div class="wrapper hanaiori" id="top">
            <div class="md_glnavi__triger lp" id="drawer_trigger">
                <span></span><span></span>
            </div>
        <?php endif; ?>



