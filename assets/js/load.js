(function($) {
    $(function(){
        //ロード
        if($.cookie('access')){
            $('.md_mv__img, .md_header, .md_glnavi__triger').addClass('active');
        } else {
            $.cookie('access', 'access');
            $('.md_mv__img, .md_header, .md_glnavi__triger').addClass('animate');
        }
    });
})(jQuery);

