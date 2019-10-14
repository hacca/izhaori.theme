
<footer>
    <div class="md_footer" role="contentinfo">
        <nav class="gf_ptsans fw700 fz_14 md_footer__cont">
            <ul>
                <li><span>osaka,Japan</span></li>
                <li><script src="<?php echo get_template_directory_uri(); ?>/assets/js/encryption.js"></script></li>
                <li><a href="<?php echo home_url(); ?>/shop/" class="shop">SHOP</a></li>
                <li><a href="https://izhaori.official.ec/" target="new" rel="noopener noreferrer">ONLINE STORE</a></li>
                <li><span>古物商許可証番号 第621220182615号</span></li>
            </ul>
        </nav>
        <p class="fz_12 md_copyright">2018 &copy; iz</p>
    </div>
</footer>

</div><!-- .wrapper-->

<div class="close_wrap" id="drawerclose"></div>

<?php wp_footer(); ?>



<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js?20191011"></script>



<?php if(is_home() || is_archive('item') || is_tax('itemcat')): ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modaal.js"></script>



<script>
    (function($) {
        $(function(){
            $(document).ready(function() {
                $('.modaal').modaal({
                    background_scroll: false,
                    hide_close : false,
                });

            });
            AOS.init({
                offset: 200,
                duration: 2500,
                easing: 'ease-out-back',
                    //disable: 'mobile'
                });
            $(document).on("click", ".slide_img__child figure", function() {
                var class_name = $(this).attr("class");
                var num = class_name.slice(5);
                $(this).parents().find('.slide_img__parent').removeClass('active');
                $('.item' + num).addClass('active');
            });
        });
    })(jQuery);
</script>
<?php endif; ?>

</body>
</html>
