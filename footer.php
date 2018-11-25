
<footer>
    <div class="md_footer" role="contentinfo">


        <nav class="gf_ptsans fw700 fz_14 md_footer__cont">
            <ul>
                <li><span>osaka,Japan</span></li>
                <li><script src="<?php echo get_template_directory_uri(); ?>/assets/js/encryption.js"></script></li>
                <li><a href="">shopping site</a></li>
                <li><span>古物商許可証番号 第123456789123号</span></li>
            </ul>
        </nav>
        <p class="fz_12 md_copyright">2018 &copy; iz</p>
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
