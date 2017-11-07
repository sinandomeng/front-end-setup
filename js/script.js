jQuery.fn.exists = function () { return this.length > 0; }

$(document).ready(function () {

    // check if user is on monile
    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    if (isMobile.any()) $('.navbar-left li').last().remove(); $('.section').addClass('pp-scrollable');

    // playing the video again 
    var vid = document.getElementById("myVideo");
    if (vid != null) {
        vid.playbackRate = 2.0;
    }

    $('.select2').select2();

    if ($('#creatives-home').exists()) {
        $('#creatives-home').pagepiling({
            anchors: ['hero', 'gradient', 'what-we-do', 'stand-out', 'personnel', 'blog', 'contact'],
            direction: 'vertical',
            verticalCentered: false,
            navigation: false,
            onLeave: function (index, nextIndex, direction) {
                // replay the video
                if (index != 1) {
                    vid.pause();
                    vid.currentTime = 0;
                    vid.load();
                    vid.playbackRate = 2.0;
                }

                // set the animation for navbar
                if (!isMobile.any()) $('.default-navbar').css({ opacity: 0 });

                // to change navbar appearance
                if (nextIndex == 1) { 
                    // for desktop
                    if (!isMobile.any()) {
                        // back to original navbar
                        var oldSrc = 'img/logo-teal.png';
                        var image = $('.navbar-brand img');

                        $('.default-navbar').removeClass('scrolled').find('.navbar-brand img');
                        image.attr('src', oldSrc);
                    }
                } else {
                    // change the original navbar
                    var newSrc = 'img/logo-white.png';
                    var image = $('.navbar-brand img');

                    $('.default-navbar').addClass('scrolled').find('.navbar-brand img');
                    image.attr('src', newSrc);
                }

                // to prevent flicker of navbar in all slides expect the first one
                if (direction == 'down' && nextIndex != 2) {
                    $('.default-navbar').css({ opacity: 1 });
                } else if (direction == 'up' && nextIndex != 1) {
                    if (nextIndex == 1) {

                    }
                    // $('.default-navbar').css({ opacity: 1 });
                } else {
                    $('.default-navbar').animate({ opacity: 1 });
                }

                // enable counter in what we do section
                if (nextIndex == 3) {
                    if ($('.count').exists()) {
                        $('.count').each(function () {
                            $(this).prop('Counter', 0).animate({
                                Counter: $(this).text()
                            }, {
                                    duration: 3000,
                                    easing: 'swing',
                                    step: function (now) {
                                        $(this).text(Math.ceil(now));
                                    }
                                });
                        });
                    }
                }
            },
            afterLoad: function (anchorLink, index) {
                $('#' + anchorLink + ' .toAnimateFadeDown').addClass('fadeInDown animated');
                $('#' + anchorLink + ' .toAnimateFadeLeft').addClass('fadeInLeft animated');
                $('#' + anchorLink + ' .toAnimate').addClass('fadeIn animated');
            },
            afterRender: function () {
                if (isMobile.any()) {
                    // change the original navbar
                    var newSrc = 'img/logo-white.png';
                    var image = $('.navbar-brand img');

                    $('.default-navbar').addClass('scrolled').find('.navbar-brand img');
                    image.attr('src', newSrc);
                }
            }
        });
    }

    // material input classes
    $('.group input[type=text], .group textarea').blur(function () {
        if ($(this).val()) {
            $(this).addClass('used');
        } else {
            $(this).removeClass('used');
        }
    });

    // navbar li class on hover
    $('.navbar-left li').hover(
        function () {
            $(this).nextAll('li').prevAll('li').removeClass('hover');
            $(this).addClass('hover');
        }, function () {
            $(this).addClass('hover');
            $(this).nextAll('li').prevAll('li').removeClass('hover');
        }
    );

});