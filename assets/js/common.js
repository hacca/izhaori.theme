(function($) {
    $(function(){

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

        // スムーズスクロール
        var notList = 'a[href^="#content"], #togmenu a[href^="#"], a.remodal-close,a[href^="#0"]';
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


        //header fix
        if($('#fixnav').length){
            var nav = $('#fixnav');
            var navheight = nav.height();
            var navTop = nav.offset().top + navheight;
            var showFlag = false;
        }
        $(window).scroll(function () {
            var windowTop = $(this).scrollTop();
            if (windowTop >= navTop) {
                if (showFlag == false) {
                    showFlag = true;
                    nav.addClass('fixed');
                    nav.removeClass('fade');
                }
            } else if (windowTop < navTop) {
                if (showFlag) {
                    showFlag = false;
                    nav.removeClass('fixed');
                    nav.addClass('fade');
                }
            }
        })



        //sidrメニュー
        $('#drawer_trigger').sidr({
            name: 'drawer',
            source: '#drawer_menu',
            side: 'left',
            renaming: false,
            displace: false,
            onOpen: function() {
                $('#drawer_trigger').addClass('open');
                $('#drawer_triggerBtn').addClass('active');
                $('#drawer_cover').fadeIn(300);
                $('.sidr_slide__close').show();
                $("meta[name='viewport']").attr('content','width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no');
            },
            onClose: function() {
                $('#drawer_trigger').removeClass('open');
                $('#drawer_triggerBtn').removeClass('active');
                $('#drawer_cover').fadeOut(300);
                $('.sidr_slide__close').hide();
                $("meta[name='viewport']").attr('content','width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=yes');
            }
        });
        $('#drawer_cover').on("click", function () {
            $.sidr('close', 'drawer');
        });
        $('.sidr_slide__close').on("click", function () {
            $.sidr('close', 'drawer');
        });
        $(window).touchwipe({
            wipeRight: function() {
            $.sidr('close', 'drawer');
            },
            // wipeLeft: function() {
            //  $.sidr('open', 'drawer');
            // },
            preventDefaultEvents: false
        });

        //ツアーページナビ
        $('#pnavList li a').on("click", function () {
            $('#pnavList li a').removeClass('current');
            $(this).toggleClass('current');
        });






        //ツアーtoggle
        // $('.tour_list__detail').hide();
        // $('.detail_open').on("click", function () {
        //     $(this).toggleClass('open');
        //     $(this).parents().children('.tour_list__detail').slideToggle('fast');
        //     $(this).parents().children('.tour_list__thumb').toggleClass('open');
        // });


    });
})(jQuery);

