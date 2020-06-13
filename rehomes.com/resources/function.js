(function($) {
    "use strict";
    var HT = {};


    /* MAIN VARIABLE */

    var $window = $(window),
        $active_menu = $('.hd-menu-item'),
        $btn_modal = $('.btn-modal-general'),
        $num = $('.num'),
        $document = $(document);



    // active menu

    HT.active_menu = function() {
        if ($active_menu.elExists) {



            $active_menu.mouseenter(function() {
                let _this = $(this);
                $active_menu.removeClass('active');
                _this.addClass('active');
            })
            $active_menu.mouseleave(function() {
                let _this = $(this);
                $active_menu.removeClass('active');
                _this.addClass('active');
            })




        }
    }

    // Check if element exists
    $.fn.elExists = function() {
        return this.length > 0;
    };

    HT.modal_review = function() {
        if ($btn_modal.elExists) {
            let data_modal = '';
            $btn_modal.click(function() {
                let _this = $(this);
                data_modal = _this.attr('href');
                console.log(data_modal)
                $(data_modal).addClass('enable');
            })
            $('.modal').add($('.modal-close')).add($('.btn-cancel')).click(function() {
                $(data_modal).removeClass('enable');
            })

            $('.modal-content-review').click(function(e) {
                e.stopPropagation();
            })
        }

    }

    HT.carousel = function() {
        $('.owl-carousel').each(function() { // --> Lặp qua tất cả các cấu trúc DOM nào có dạng là .owl-slide .owl-carousel
            let _this = $(this); // --> Khai báo cái phần tử mà vòng lặp đang chạy tới.
            let data_owl = _this.attr('data-owl'); // Lấy ra dữ liệu được setup phía html (ở dạng base64)
            let data_disabled = _this.attr('data-disabled');
            data_owl = window.atob(data_owl); // Decode dữ liệu dạng base64
            data_owl = JSON.parse(data_owl); // Decode dữ liệu dạng JSON --> trở về dạng object

            if (data_disabled == 0) {
                _this.owlCarousel(data_owl); // --> Truyền cái đối tượng đã được decode vào hàm slide
            }

        });


    }


    // Slideshow banner slide why choose us

    HT.slideWCU = function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel();
        // Listen to owl events:
        owl.on('changed.owl.carousel', function(event) {
            let active_slide = $('.owl-item.active .wrap-wcu').attr('dataslide');

            $('.img-banner-wcu img').attr('src', active_slide);
            $('.img-banner-wcu img').addClass('block')
        })


    }

    HT.sum = function(start, dataCount, display) {
        display.text(start);
        start += 1;
        if (start <= dataCount) {
            setTimeout(function() {
                HT.sum(start, dataCount, display)
            }, 50)
        }
    }

    HT.countUp = function() {
        if ($num.elExists) {
            $num.each(function(e) {
                let _this = $(this)
                let dataCount = _this.attr('data-count');
                let display = _this.text(dataCount);
                let start = 1;
                HT.sum(start, dataCount, display)
            })


        }
    }

    HT.tabs = function() {
        $('ul.tabs li').click(function() {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        })
    }

    // Document ready functions
    $document.on('ready', function() {
        HT.carousel(),
            HT.tabs(),
            HT.countUp(),
            HT.slideWCU(),
            HT.modal_review(),
            HT.active_menu();

    });

})(jQuery);