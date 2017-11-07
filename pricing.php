<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AND Creatives - Home</title>
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css">
    <link rel="stylesheet" href="css/font-face.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- SCRIPTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.full.min.js" defer></script>
</head>

<body id="pricing">

    <?php include 'partials/navigation.php'; ?>

    <div class="our-pricing">
        <div class="pricing-title">
            <h4 class="heading subtitle">Rates</h4>
            <h1 class="heading title">Our Pricing</h1>
        </div>

        <div class="pricing-chart">
            <div class="price">
                <span class="only">Only</span>
                <h1 class="amount">USD 115</h1>
                <span class="per-week">per week</span>
                <p class="regional">Regional Offices</p>
                <p>Per dedicated full time employee <br /> plus their full time salary</p>
            </div>

            <div class="content">
                <ul class="check-list">
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No long-term contracts
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        Fixed monthly rate
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No mark-up ever on employee salaries
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="staffing-solutions">
        <div class="solutions">
            <h4 class="heading subtitle">Solutions</h4>
            <h1 class="heading title">Our Dedicated Staffing Solutions Include</h1>

            <div class="list-container">
                <ul class="check-list">
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No long-term contracts
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        Fixed monthly rate
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No mark-up ever on employee salaries
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No long-term contracts
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        Fixed monthly rate
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No mark-up ever on employee salaries
                    </li>
                </ul>

                <ul class="check-list">
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No long-term contracts
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        Fixed monthly rate
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No mark-up ever on employee salaries
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No long-term contracts
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        Fixed monthly rate
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No mark-up ever on employee salaries
                    </li>
                </ul>

                <ul class="check-list">
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No long-term contracts
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        Fixed monthly rate
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No mark-up ever on employee salaries
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No long-term contracts
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        Fixed monthly rate
                    </li>
                    <li>
                        <span class="fa fa-fw fa-check"></span>
                        No mark-up ever on employee salaries
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'partials/contact.php'; ?>
    <?php include 'partials/footer.php'; ?>
    
    <script type="text/javascript">
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
            
            if (isMobile.any()) {
                $('.navbar-left li').last().remove();
                $('.section').addClass('pp-scrollable');

                // change the original navbar
                var newSrc = 'img/logo-white.png';
                var image = $('.navbar-brand img');

                $('.default-navbar').addClass('scrolled').find('.navbar-brand img');
                image.attr('src', newSrc);
            } else {
                $(window).on('scroll', function (e) {
                    var scrollPos = $(document).scrollTop();

                    if (scrollPos >= 150) {
                        $('.default-navbar').animate({ opacity: 1 });

                        // change the original navbar
                        var newSrc = 'img/logo-white.png';
                        var image = $('.navbar-brand img');

                        $('.default-navbar').addClass('scrolled').find('.navbar-brand img');
                        image.attr('src', newSrc);
                    } else {
                        // set the animation for navbar
                        $('.default-navbar').css({ opacity: 0 });

                        // back to original navbar
                        var oldSrc = 'img/logo-teal.png';
                        var image = $('.navbar-brand img');

                        $('.default-navbar').removeClass('scrolled').find('.navbar-brand img');
                        image.attr('src', oldSrc);
                    }
                });
            }
            
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
    </script>

</body>

</html>
