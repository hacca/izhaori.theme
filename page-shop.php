<?php get_header(); ?>


<main class="contents_wrapper" id="contents" role="main">


    <?php if (have_posts()) : ?>
        <div class="md_pg__wrap typo_static">
            <div class="l_row pd_side">
                <section class="pg_shop">
                    <!-- <div class="pg_shop__announce">
                        <p class="fz_16 fw700 ttl"><i class="fas fa-info-circle"></i>［浸水被害による床・壁修繕工事による休業のお知らせ］</p>
                        <div class="fz_14 cont">
                            <p>去る８月末の奈良市周辺の集中豪雨により、当店は床下浸水被害を受けました。これにより以下の期間は床および壁の修繕工事のため休業させていただきます。お客様には大変ご迷惑をお掛け致しますが何卒ご理解賜りますよう、よろしくお願いいたします。</p>
                            <p class="fw700">工事期間：2019年9月20日(金)〜30日(月)<br>店舗再開予定：2019年10月4日(金)</p>
                            <p>尚、近隣の方々には騒音等ご迷惑をお掛けいたしますが、合わせてご理解のほどよろしくお願い申し上げます。</p>
                        </div>
                    </div> -->
                    <div class="innr">
                        <div class="pg_shop__info">
                            <h1 class="fz_18 fw700 ttl">SHOP</h1>
                            <div class="fz_15 pg_shop__infoDeetail">
                                <p>〒630-8381<br>奈良市福智院町1-2 福智院町バス停前<a href="https://goo.gl/maps/iBYwxrRyVkHfymo58" class="googlemap" target="new" rel="noopener noreferrer nofollow"><i class="fas fa-map-marker-alt"></i></a></p>
                                <p>PHONE : 080-3786-8700</p>
                                <p>営業日：金・土・日・月（2月、8月は休業）</p>
                                <p>営業時間：11:00〜日没</p>
                            </div>
                        </div>
                        <div class="pg_shop__img">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/pg_shop01.jpg" data-fancybox="shop"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_shop01_t.jpg" alt="SHOPイメージ"></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/pg_shop02.jpg" data-fancybox="shop"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_shop02_t.jpg" alt="SHOPイメージ"></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/pg_shop03.jpg" data-fancybox="shop"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_shop03_t.jpg" alt="SHOPイメージ"></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/pg_shop04.jpg" data-fancybox="shop"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_shop04_t.jpg" alt="SHOPイメージ"></a>
                        </div>
                        <div class="pg_shop__mapFlame">
                            <div class="innr">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d476.0493509745889!2d135.8347866498774!3d34.6772240989855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001398cdfa6e6fd%3A0x5552811299504778!2z44CSNjMwLTgzODEg5aWI6Imv55yM5aWI6Imv5biC56aP5pm66Zmi55S677yR4oiS77yS!5e0!3m2!1sja!2sjp!4v1559529775618!5m2!1sja!2sjp" width="100%" height="100%" scrolling="no" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif; ?>


</main><!--.contents_wrapper-->


<?php get_footer(); ?>
