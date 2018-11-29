
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



<?php wp_footer(); ?>





<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>

<?php if(is_home() || is_page(array('access','hanaiori'))): ?>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCHvGKe1x90L9LLcRw1AuAs-ku82oNdscY"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gmap.js"></script>
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
