
<footer>
    <div class="md_footer" role="contentinfo">
        <nav class="gf_ptsans fw700 fz_14 md_footer__cont">
            <ul>
                <li><span>osaka,Japan</span></li>
                <li><script src="<?php echo get_template_directory_uri(); ?>/assets/js/encryption.js"></script></li>
                <li><a href="">shopping site</a></li>
                <li><span>古物商許可証番号 第621220182615号</span></li>
            </ul>
        </nav>
        <p class="fz_12 md_copyright">2018 &copy; iz</p>
    </div>
</footer>

</div><!-- .wrapper-->



<?php wp_footer(); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>


<?php if(is_home() || is_archive('item') || is_tax('itemcat')): ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
<script>
    (function($) {
        $(document).ready(function() {
            $('[data-fancybox]').fancybox();
        });
        $(function(){
            AOS.init({
                offset: 200,
                duration: 2500,
                easing: 'ease-out-back',
                    //disable: 'mobile'
                });
            $('.slide_img__child figure').click(function(){
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
