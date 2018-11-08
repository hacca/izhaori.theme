<?php get_header(); ?>


<main class="contents_wrap" role="main">

    <div class="md_page__head contact">
        <h2 class="fz_30 md_page__headTtl">
            <em class="gf_raleway">BOOKING & CONTACT</em><span class="gf_sawarabi lt1 txt">ご予約とお問い合わせ</span>
        </h2>
    </div>

    <section class="md_page__sec contact_sec">
        <h2 class="fz_30 fw600 md_page__secTtl ">
            <em class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon16.svg" alt="オンライン" width="90"></em><span class="gf_sawarabi lt1 txt">オンラインでのご予約</span>
        </h2>
        <h3 class="fz_24 fw600 pg_contact__index">ご予約は、「楽天トラベル」のシステムを採用しております。<br>下記のオンライン予約からご予約ください。</h3>
        <div class="pg_contact__summary">
            <ul class="fz_15 pg_contact__note">
                <li>・満室の場合は、お電話にてお問い合わせください。</li>
                <li>・カードご利用できません。ご利用の場合は、お電話かホームページからのご予約をお願いいたします。</li>
                <li>・朝食は朝７時〜9時までです。</li>
                <li>・チェクインが、ご都合で夜10時を過ぎる場合は、お電話をお願いします。</li>
                <li>・禁煙室希望のお客様は禁煙室希望とご記入ください。ご希望に添えない場合も御座いますのでご了承願います。</li>
                <li>・領収書は宿泊施設現地での発行となります。 詳細は宿泊施設まで直接お問い合わせください。</li>
                <li>・キャンセル料は以下の通り頂戴いたします。<br>（キャンセルポリシーは宿泊対象によって異なる場合がございます。）<br>連絡なしの不泊・不着：宿泊料金の100％<br>当日：宿泊料金の100％<br>前日：宿泊料金の 50％</li>
            </ul>
        </div>
        <div class="pg_contact__reservation">
            <h2 class="fz_24 fw600 pg_contact__index tac">オンラインでのご予約はこちら</h2>
            <a href="https://hotel-hanaya.rwiths.net/r-withs/tfi0010a.do" target="new" class="fz_20 fw700 lt1"><span>宿泊プラン一覧<i class="fas fa-chevron-right arrow"></i></span></a>
        </div>
    </section>

        <section class="md_page__sec contact_sec">
            <h2 class="fz_30 fw600 md_page__secTtl ">
                <em class="iconfont"><i class="fas fa-phone"></i></em><span class="gf_sawarabi lt1 txt">電話でのご予約</span>
            </h2>
            <div class="pg_contact__phone">
                <p class="fz_15">お急ぎの場合、大変お手数ですがお電話にてご連絡下さい。</p>
                <a href="tel:0739-22-3877"><i class="fas fa-phone icon"></i><em>0739-22-3877</em></a>
            </div>
        </section>

        <section class="md_page__sec contact_sec__dark">
            <h2 class="fz_30 fw600 md_page__secTtl ">
                <em class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon17.svg" alt="フォーム" width="80"></em><span class="gf_sawarabi lt1 txt">お問い合わせ</span>
            </h2>
            <div class="fz_16 pg_contact__privacy">
                <p>ビジネスホテル花屋へのお問い合わせはこちらから承っております。<br>ご意見・ご感想・ご質問等ご自由にご記入下さい。<br>なお、お客さまの個人情報、お問い合わせ内容は厳重に取り扱いいたします。</p>
                <p class="link"><a href="<?php echo home_url(); ?>/privacypolicy/">PRIVACY POLICY ></a></p>
                <p>以下のフォームに必要事項をご入力の上、送信してください。<br>なお、内容によっては、ご連絡までお時間がかかるものがございますので、あらかじめご了承ください。</p>
            </div>

            <?php if(have_posts()) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="pg_contact__form">
                        <?php remove_filter('the_content', 'wpautop'); ?>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </section>



</main><!-- contents_wrap -->



<?php get_footer(); ?>
