(function($) {
    "use strict";
    var HT = {};


    /* MAIN VARIABLE */

    var $window = $(window),
        $active_menu = $('.hd-menu-item'),
        $btn_modal = $('.btn-modal-general'),
        $num = $('.num'),
        $count_down = $('.countdown'),
        $chart = $('.chart-max'),
        $active_accordion = $('.active-accordion'),
        $document = $(document);


    // Count down

    HT.countdown = function() {
        $count_down.each(function() {
            let _this = $(this);
            let date = _this.attr('data-start');
            date = new Date(date).getTime();

            let x = setInterval(function() {
                let now = new Date().getTime();
                let distance = date - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                let html = '';
                html = html + '<div class="countdown_time ">';
                html = html + '<div class="days">' + days + '</div>';
                html = html + '<div class="hours">' + hours + '</div>';
                html = html + '<div class="minutes">' + minutes + '</div>';
                html = html + '<div class="seconds">' + seconds + '</div>';
                html = html + '</div>';

                _this.html(html);
            }, 1000)
        })
    }


    // active accordion

    HT.activeAcordion = function() {
        if ($active_accordion.elExists) {
            $('.uk-accordion-title').click(function() {
                let _this = $(this);
                console.log(_this.find($active_accordion).text());
                if (_this.find($active_accordion).text() == '+') {
                    _this.find($active_accordion).text('-')
                } else if (_this.find($active_accordion).text() == '-') {
                    _this.find($active_accordion).text('+')

                }
            })
        }
    }




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

    // Nice select

    HT.niceSelect = function() {
        $('select').niceSelect();
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


    // Number


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


    // Chart line


    HT.autoLine = function(start, dataMax, display) {
        display.css({ "width": start });
        let count = '1%';
        let c = parseFloat(count);
        var d = typeof c;
        console.log(c)
        start = start + c;
        console.log(start);
        if (start <= dataMax) {
            setTimeout(function() {
                // HT.autoLine(start, dataMax, display)
            }, 50)
        }
    }

    HT.chart = function() {
        if ($chart.elExists) {
            $chart.each(function(e) {
                let _this = $(this);
                let dataMax = _this.attr('data-max');
                console.log(dataMax);
                let display = _this.css({ "width": dataMax })
                    // let width = $('.chart').width();
                    // console.log(width);
                    // // let display = _this.css({ 'width': 'calc(dataMax * width)' });
                console.log(display)
                var b = parseFloat(dataMax)
                var a = typeof b;
                console.log(b)
                let start = '0';
                HT.autoLine(start, dataMax, display)
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
            // HT.chart(),
            HT.activeAcordion(),
            HT.countUp(),
            HT.niceSelect(),
            HT.slideWCU(),
            HT.countdown(),
            HT.modal_review(),
            HT.active_menu();

    });

})(jQuery);