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

<body id="contact">

    <?php include 'partials/navigation.php'; ?>
    <?php include 'partials/contact.php'; ?>
    <?php include 'partials/footer.php'; ?>
    
    <script type="text/javascript">
        $(document).ready(function () {

            $('.select2').select2();
            
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
