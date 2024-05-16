$(document).ready(function () {

    AOS.init({
        disable: 'mobile'
    });


    $('.banner').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,

    })
    $('.credit-card').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        items: 4,
        autoplay: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 5
            },
            430: {
                items: 1,
                margin: 5

            },
            768: {
                items: 2
            },
            900: {
                items: 3
            },
            1100: {
                margin: 30,
                items: 4
            }

        }


    })
    $('.debit-card').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        navText: ["<i class='fa fa-angle-left' ></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        mouseDrag: false,
        items: 4,
        autoplay: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 5,
                nav: true,
                mouseDrag: true,

            },
            430: {
                items: 1,
                margin: 5,
                nav: true,
                mouseDrag: true,


            },
            768: {
                items: 2,
                nav: true,
                mouseDrag: true,

            },
            900: {
                items: 3,
                nav: true

            },
            1100: {
                margin: 30,

                items: 4
            }

        }


    })

    $('.covid-updates').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        navText: ["<i class='fa fa-angle-left' ></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        mouseDrag: true,
        items: 3,
        autoplay: true,
        autoplayTimeout: 3000,
        responsiveClass: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                margin: 5,
                nav: false,
                mouseDrag: true,

            },
            430: {
                items: 1,
                margin: 5,
                nav: false,
                mouseDrag: true,


            },
            768: {
                items: 2,
                nav: true,
                mouseDrag: true,

            },
            900: {
                items: 3,
                nav: true

            },
            1100: {
                margin: 10,
                items: 3
            }

        }


    })


    function addCarousel() {
        if ($(window).width() < 800) {
            $('#credit').addClass('owl-carousel');
            $('#credit-mastercard').addClass('owl-carousel');
            $('#debit').addClass('owl-carousel');
            $('#discount-carousel').addClass('owl-carousel');
            $('#discount-carousel-2').addClass('owl-carousel');
            $('.aplha').addClass('item');
            $('#credit').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                navText: ["<i class='fa fa-angle-left' ></i>", "<i class='fa fa-angle-right'></i>"],
                dots: false,
                items: 4,
                autoplay: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        margin: 5,

                    },
                    430: {
                        items: 1,
                        margin: 5,


                    },
                    768: {
                        items: 2,

                    },



                }


            })
            $('#credit-mastercard').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                navText: ["<i class='fa fa-angle-left' ></i>", "<i class='fa fa-angle-right'></i>"],
                dots: false,
                items: 4,
                autoplay: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        margin: 5,

                    },
                    430: {
                        items: 1,
                        margin: 5,


                    },
                    768: {
                        items: 2,

                    },



                }


            })
            $('#debit').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                navText: ["<i class='fa fa-angle-left' ></i>", "<i class='fa fa-angle-right'></i>"],
                dots: false,
                items: 4,
                autoplay: false,
                responsiveClass: true,


                responsive: {
                    0: {
                        items: 1,
                        margin: 5,

                    },
                    430: {
                        items: 1,
                        margin: 5,


                    },
                    768: {
                        items: 2,

                    },



                }


            })
            $('#discount-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                navText: ["<i class='fa fa-angle-left' ></i>", "<i class='fa fa-angle-right'></i>"],
                dots: false,
                items: 4,
                autoplay: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        margin: 5,

                    },
                    430: {
                        items: 1,
                        margin: 5,


                    },
                    768: {
                        items: 2,

                    },



                }


            })
            $('#discount-carousel-2').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                navText: ["<i class='fa fa-angle-left' ></i>", "<i class='fa fa-angle-right'></i>"],
                dots: false,
                items: 4,
                autoplay: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        margin: 5,

                    },
                    430: {
                        items: 1,
                        margin: 5,


                    },
                    768: {
                        items: 2,

                    },



                }


            })
        }

    }
    addCarousel();

    function addCollapse() {
        if ($(window).width() < 990) {
            $('.dropbtn1').attr("data-toggle", "collapse");

        }

    }
    addCollapse();
    var app = document.getElementById("typed");
    var typewriter = new Typewriter(app, {
        loop: false,
        delay: 75,
    });

    typewriter
        .pauseFor(100)
        .typeString(
            'Why <strong><span style="color: #a40046;">Bank</span></strong> With Us'
        )
        .pauseFor(2500)
        .start();




    var silkbank = document.getElementById("silkbank");
    var silkbanktypewriter = new Typewriter(silkbank, {
        loop: false,
        delay: 75,
    });
    silkbanktypewriter
        .pauseFor(100)
        .typeString(
            '<strong><span style="color: #a40046;">Silkbank </span></strong> Cards'
        )
        .pauseFor(2500)
        .start();


    var treasury = document.getElementById("treasury");
    var treasurytypewriter = new Typewriter(treasury, {
        loop: false,
        delay: 75,
    });
    treasurytypewriter
        .pauseFor(100)
        .typeString(
            '<strong><span style="color: #a40046;">Treasury</span></strong>'
        )
        .pauseFor(2500)
        .start();





    $('#cookie-btn').on('click', function () {
        $('.footer-copyright').remove();
        document.querySelector('.copyright').style.display = 'block';
    })


    // function openCity(evt, cityName) {
    //     var i, tabcontent, tablinks;
    //     tabcontent = document.getElementsByClassName("tabcontent");
    //     for (i = 0; i < tabcontent.length; i++) {
    //         tabcontent[i].style.display = "none";
    //     }
    //     tablinks = document.getElementsByClassName("tablinks");
    //     for (i = 0; i < tablinks.length; i++) {
    //         tablinks[i].className = tablinks[i].className.replace(" active", "");
    //     }
    //     document.getElementById(cityName).style.display = "block";
    //     evt.currentTarget.className += " active";
    // }
    // document.getElementById("defaultOpen").click();

    function clickTab() {
        var pageURL = $(location).attr("href");
        var hash = pageURL.substring(pageURL.indexOf('#') + 1);
        if (hash) {
            $(`a[href="#${hash}"]`).trigger('click');
        }
    }
    clickTab()


    function removeAccordion() {


        if ($(window).width() < 800) {
            $('.accords div').removeClass('accordion card card-header collapse show');
            $('.acc-btn').removeAttr('data-toggle');
            $('.acc-btn').addClass('btn-heading');

        } else {
            console.log("dropdown");
        }
    }
    removeAccordion();




    // $(".dropdown-content a").click(function(e) {
    //     e.preventDefault()
    //     console.log("hi")
    //     let url = $(this).attr('href');
    //     var hash = url.substring(url.indexOf('#') + 1);
    //     if (hash) {
    //         $(`a[href="#${hash}"]`).trigger('click');
    //     }
    // });

    // $(".current-account-dropdown a").click(function(e) {
    //     e.preventDefault()
    //     let url = $(this).attr('href');
    //     $(`a[href="#${url}"]`).trigger('click');
    //     console.log(url)
    // });

    $("#pills-tabContent a").click(function (e) {
        var pageURL = $(this).attr("href");
        var hash = pageURL.substring(pageURL.indexOf('#') + 1);
        if (hash) {
            // console.log(hash);
            $(`a[href="#${hash}"]`).trigger('click');
        }
    });
    $("#tab-data a").click(function (e) {
        var pageURL = $(this).attr("href");
        var hash = pageURL.substring(pageURL.indexOf('#') + 1);
        if (hash) {
            // console.log(hash);
            $(`a[href="#${hash}"]`).trigger('click');
        }


    });

    // jQuery(function () {

    //     var minimized_elements = $('p.minimize');

    //     minimized_elements.each(function () {
    //         var t = $(this).text();
    //         if (t.length < 100) return;

    //         $(this).html(
    //             t.slice(0, 100) + '<span>...<br><br> </span><a  href="#" class="more  primary-color roboto-bold">More</a>' +
    //             '<span style="display:none;">' + t.slice(100, t.length) + ' <a href="#" class="less primary-color roboto-bold">Less</a></span>'
    //         );

    //     });

    //     $('a.more', minimized_elements).click(function (event) {
    //         event.preventDefault();
    //         $(this).hide().prev().hide();
    //         $(this).next().show();
    //         $(this).css("transition", "all 0.5s ease");
    //     });

    //     $('a.less', minimized_elements).click(function (event) {
    //         event.preventDefault();
    //         $(this).parent().hide().prev().show().prev().show();
    //         $(this).css("transition", "all 0.5s ease");

    //     });

    // });


    // jQuery(function () {

    //     var minimized_elements = $('.minimize-text');

    //     minimized_elements.each(function () {
    //         var t = $(this).text();
    //         if (t.length < 100) return;

    //         $(this).html(
    //             t.slice(0, 0) + '<a style="background-color:#a40046; border-radius:20px; border:1px solid #a40046; color:#fff; padding:5px 20px;" href="#" class="more">See More</a>' +
    //             '<div style="display:none; color:#808080 !important;  font-size:13px;">' + t.slice(0, t.length) + ' <a href="#" class="less primary-color roboto-bold">See Less</a></div>'
    //         );

    //     });

    //     $('a.more', minimized_elements).click(function (event) {
    //         event.preventDefault();
    //         $(this).hide().prev().hide();
    //         $(this).next().show();
    //         $(this).css("transition", "all 0.5s ease");
    //     });

    //     $('a.less', minimized_elements).click(function (event) {
    //         event.preventDefault();
    //         $(this).parent().hide().prev().show().prev().show();
    //         $(this).css("transition", "all 0.5s ease");
    //     });

    // });

    $(function () {
        var more = "… More", //  &hellip;, &nbsp;
            less = " Less"; // &nbsp;
        $('.minimize').each(function () {
            $(this).css({
                'height': "3.5em",
                'overflow': 'hidden'
                
                
            }).after('<a href="#" class="See_Moretoggle"><span>' + more + '</span></a>')
        })
        $('a.See_Moretoggle span').click(function () {
            var mode = $(this).text()
            if (mode === more) {
                $(this).parent().prev().css('height', "")
                $(this).text(less)
            } else {
                $(this).parent().prev().css('height', "3.5em")
                $(this).text(more)
            }
            return false
        })
    })





})