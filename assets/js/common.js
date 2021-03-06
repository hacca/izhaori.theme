(function($) {
    $(function(){
        //ナビ
        if($('#md_drawer__nav').length){
            $('#drawer_trigger').on("click", function () {
                $('#md_drawer__nav').toggleClass('active');
                $('#drawerclose').toggleClass('active');
            });
            $('#md_drawer__close').on("click", function () {
                $('#md_drawer__nav').removeClass('active');
                $('#drawerclose').removeClass('active');
            });
            $('#drawerclose').on("click", function () {
                $('#md_drawer__nav').removeClass('active');
                $('#drawerclose').removeClass('active');
            });
        }

        // タイポスクロール
        if($('#fixnav').length){
            $(window).scroll(function(){
                var typo = $('.typo');
                var wh = $(window).height();
                var dh = $(document).height();
                var st = $(document).scrollTop();
                if ( dh > wh ){
                    $('.typo').css('backgroundPosition', '50% ' + ~~(st/(dh-wh)*10000) / 100 + '%');
                }
            });
        }

        //size chart
        if($('.md_item__sizeUnit span').length){
            $('.md_item__sizeUnit span.cm').on("click", function () {
                $('.md_item__sizeUnit span').removeClass('active');
                $(this).addClass('active');
                $(this).parents('.md_item__sizeWrap').find('.unit').hide();
                $(this).parents('.md_item__sizeWrap').find('.cm').show();
            });
            $('.md_item__sizeUnit span.inch').on("click", function () {
                $('.md_item__sizeUnit span').removeClass('active');
                $(this).addClass('active');
                $(this).parents('.md_item__sizeWrap').find('.unit').hide();
                $(this).parents('.md_item__sizeWrap').find('.inch').show();
            });
        }


        // スムーズスクロール
        var notList = 'a[href^="#item"], #togmenu a[href^="#"], a.remodal-close,a[href^="#0"]';
        $('a[href^="#"]').not(notList).click(function(){
            var speed = 300;
            if($('#fixnav').length){
                var nav = $('#fixnav');
                var navheight = nav.height();
            } else {
                var navheight = 0;
            }
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top - navheight;
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;
        });
        var url = $(location).attr('href');
        if (url.indexOf("?id=") == -1) {
        }else{
            var url_sp = url.split("?id=");
            var hash   = '#' + url_sp[url_sp.length - 1];
            var tgt    = $(hash);
            var pos    = tgt.offset().top;
            $("html, body").animate({scrollTop:pos}, 300, "swing");
        }

    });
})(jQuery);

