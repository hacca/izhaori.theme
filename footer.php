
<footer>
    <div class="md_footer" role="contentinfo">

        <?php if(!is_page('hanaiori')): ?>
        <section class="md_footer__booking">
            <h2 class="gf_raleway fz_36 fw600 md_footer__bookingTtl">BOOKING</h2>
            <div class="md_footer__bookingRes">
                <a href="https://hotel-hanaya.rwiths.net/r-withs/tfi0010a.do" target="new" class="fz_15 lt1" onClick="gtag('event', 'click', {'event_category': 'ボタン','event_label': 'footer_reservation', 'value': 1});"><span>ご予約はこちら<i class="fas fa-chevron-right arrow"></i></span></a>
            </div>
            <div class="fz_16 md_footer__bookingTel">
                <p>お電話でのご予約</p>
                <p><a href="tel:0739-22-3877"><i class="fas fa-phone icon"></i><em>0739-22-3877</em></a></p>
            </div>
        </section>
        <?php endif; ?>

        <section class="md_footer__cont">
            <h2 class="md_footer__logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_wh.svg" alt="ホテル花屋" width="100" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_hotel__wh.svg" alt="ホテル" width="100" class="hotel">
                </a>
            </h2>
            <ul class="fz_14 md_footer__address">
                <li><i class="fas fa-home icon"></i><span>ホテル花屋</span></li>
                <li><i class="fas fa-map-marker-alt icon"></i><span>〒646-0028　和歌山県田辺市高雄１丁目２番５３号（JR紀伊田辺駅より徒歩３分）</span></li>
                <li><i class="fas fa-phone icon reverse"></i>: <span>TEL：0739-22-3877</span><span>FAX：0739-25-1400</span></li>
                <li><i class="fas fa-envelope icon"></i><span>E-mail: info@hotel-hanaya.com</span></li>
            </ul>
            <div class="md_footer__aside">
                <p class="fbicon"><a href="https://www.facebook.com/%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9%E3%83%9B%E3%83%86%E3%83%AB%E8%8A%B1%E5%B1%8B-Hotel-Hanaya-272838719485086/"><i class="fab fa-facebook-f"></i></a></p>
                <p class="gf_raleway fz_14 privacy"><a href="<?php echo home_url(); ?>/privacypolicy/">PRIVACY POLICY</a></p>
                <p class="fz_13 rtravel">楽天トラベルの予約システムを利用しています。</p>
                <p class="fz_12 copy">※ 熊野の写真提供：公益社団法人和歌山県観光連盟、熊野本宮観光協会</p>
                <p class="hanaiori"><a href=""<?php echo home_url(); ?>/hanaiori/" onClick="gtag('event', 'click', {'event_category': 'ボタン','event_label': 'footer_hanaiori__img', 'value': 1});"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_hanaan__wh.svg" alt="ゲストハウス花庵花庵" width="150"></a></p>
            </div>
        </section>
        <p class="fz_12 md_copyright">&copy; HANAYA HOTEL ALL RIGHT RESERVED</p>
    </div>
</footer>

</div><!-- .wrapper-->



<!-- .sidr-->
<div class="md_drawer__cover" id="drawer_cover"></div>
<div id="drawer_menu" class="md_drawer__menu">
    <div class="md_drawer__contents">
        <div class="sidr_slide__close"><span></span><span></span></div>
        <div class="md_slide__nav">
            <h2 class="md_slide__navLogo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_with.svg" alt="ホテル花屋" width="200"></a></h2>
            <ul class="fz_15 md_slide__navColumn">
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li><a href="<?php echo home_url(); ?>/about/">ホテル花屋について</a></li>
                <li><a href="<?php echo home_url(); ?>/roomtype/">客室のご案内</span></a></li>
                <li><a href="<?php echo home_url(); ?>/access/">交通アクセス</a></li>
                <li><a href="<?php echo home_url(); ?>/sightseeing/">周辺情報・観光案内</a></li>
                <li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
            </ul>
            <div class="md_slide__navOther">
                <a href="<?php echo home_url(); ?>/hanaiori/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_hanaan.svg" alt="花庵" width="150"></a>
            </div>
        </div>
        <div class="md_slide__navFooter">
            <p class="fz_13">〒646-0028 <br>和歌山県田辺市高雄１丁目２番５３号</p>
            <p class="fz_13">TEL：0739-22-3877FAX：0739-25-1400</p>
            <p class="fz_13">info@hotel-hanaya.com</p>
            <p class="fz_13 md_slide__navSub"><a href="<?php echo home_url(); ?>/privacypolicy/">Privacy Policy</a></p>
            <div class="fz_13 md_slide__navSns">
                <a href="https://www.facebook.com/%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9%E3%83%9B%E3%83%86%E3%83%AB%E8%8A%B1%E5%B1%8B-Hotel-Hanaya-272838719485086/"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- .sidr-->

<?php wp_footer(); ?>





<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sidr.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.touchwipe.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>

<?php if(is_home() || is_page(array('access','hanaiori'))): ?>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCHvGKe1x90L9LLcRw1AuAs-ku82oNdscY"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gmap.js"></script>
<?php endif; ?>

<?php if(is_home() || is_page('information')): ?>
    <script>
        (function($) {
            $(function(){
                var mySwiper = new Swiper ('.swiper-container', {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    centeredSlides : true,
                    autoplay : 4000,
                    speed : 2000,
                    effect:  'fade',
                    parallax : true,
                    pagination: '.swiper-pagination',
                    breakpoints: {
                        960: {
                        }
                    }
                })
            });
        })(jQuery);
    </script>
<?php endif; ?>

<?php if(is_page('contact')): ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<?php if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
  wpcf7_enqueue_scripts();
  wpcf7_enqueue_styles();
}?>
<script>
(function($) {
    $(function(){
          $('#zip').keyup(function(){
            AjaxZip3.zip2addr(this, '', 'pref', 'address');
          })
        //checkbox
        $("#accept input[type='checkbox']").change(function(){
            if($(this).is(":checked")){
                $(this).next('span').children('.chk_target').addClass("c_on");
            }else{
                $(this).next('span').children('.chk_target').removeClass("c_on");
            }
        });
    });
})(jQuery);
</script>
<?php endif; ?>


<script>
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>
