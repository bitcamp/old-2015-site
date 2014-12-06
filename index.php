<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bitcamp 2015</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/index.css">
    <!-- <script src="js/vendor/modernizr-2.8.0.min.js"></script> -->
</head>

<body>
<?php
// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
echo get_client_ip();
?>
    <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <div class="background">
    	<img src="img/day/cloud-1.png" alt="cloud" class="cloud-1">
    	<img src="img/day/cloud-2.png" alt="cloud" class="cloud-2">
        <header>
            <!-- header will be animation container -->
            <div>
                <img src="img/bitcamp/logo.svg" alt="Bitcamp    ">
                <h3>Mark Your Calendars.</h3>
                <h1>April 10-12, 2015</h1>
                <p>We're gearing up for another session of Bitcamp: our classic feel-good vibes with a refined vision of what a hackathon can be. More info coming soon.</p>
                <form action="//bitca.us3.list-manage.com/subscribe/post?u=b41c324d1a706515735344250&amp;id=b8f03b366c" method="post" name="mc-embedded-subscribe-form" novalidate>
                <!-- add target="_blank"? -->
                    <input type="email" name="EMAIL" placeholder="email address">
                    <!-- mailchimp said I should add this for bot protection... -->
                     <div style="position: absolute; left: -5000px;"><input type="text" name="b_b41c324d1a706515735344250_b8f03b366c" tabindex="-1" value=""></div>
                    <input type="submit" value="submit">
                </form>
            </div>
        </header>
    </div>
    <div class="wrapper-main">
        <h2>36-hour hackathon at the University of Maryland.</h2>
        <div class="row">
            <div class>
                <p>Take what you love, fuse it with tech, and build something the world has never seen. Organic health goth art party hashtag, farm-to-table lomo semioti1cs whatever occupy fixie bespoke actually. Squid distillery freegan artisan pork belly stumptown organic ethical.</p>
            </div>
        </div>
        <h2>Sponsors help make this happen.</h2>
        <ul class="sponsors">
            <li>
                <img src="http://placekitten.com/g/500/500" alt="p">
            </li>
            <li>
                <img src="http://placekitten.com/g/500/500" alt="l">
            </li>
            <li>
                <img src="http://placekitten.com/g/500/500" alt="a">
            </li>
            <li>
                <img src="http://placekitten.com/g/500/500" alt="c">
            </li>
            <li>
                <img src="http://placekitten.com/g/500/500" alt="e">
            </li>
            <li>
                <img src="http://placekitten.com/g/500/500" alt="k">
            </li>
            <li>
                <img src="http://placekitten.com/g/500/500" alt="i">
            </li>
            <li>
                <img src="http://placekitten.com/g/500/500" alt="t">
            </li>
            <li>
                <img src="http://placekitten.com/g/500/500" alt="t">
            </li>
            <li>
                <img src="http://placekitten.com/g/500/500" alt="e">
            </li>
            <li>
                <img src="http://placekitten.com/g/500/500" alt="n">
            </li>
            <li>
                <img src="http://placekitten.com/g/500/500" alt="s">
            </li>
        </ul>
        <div class="row">
            <div>
                <h4>These are some of our friends from Bitcamp 2014.
                    <br>Interested in taking part this year?</h4>
                <a class="btn" href="#">become a sponsor</a>
            </div>
        </div>
        <h2 class="social">Get in on the fun.</h2>
        <ul class="social-links">
            <li>
                <a href="https://www.facebook.com/bitcmp" target="_blank">
                    <img src="img/social/facebook.svg" alt="Bitcamp on {facebook}">
                </a>
            </li>
            <li>
                <a href="https://twitter.com/bitcmp" target="_blank">
                    <img src="img/social/twitter.svg" alt="Bitcamp on {twitter}">
                </a>
            </li>
            <li>
                <a href="http://instagram.com/bitcamp" target="_blank">
                    <img src="img/social/instagram.svg" alt="Bitcamp on {instagram}">
                </a>
            </li>
        </ul>
        <ul class="social-feed" id="instafeed">
        </ul>
    </div>

    <footer>
        <hr>
        <ul class="left">
            <small>&copy; Bitcamp 2015</small>
        </ul>
        <ul class="right">
            <ul>
                <a href="#">
                    <li>2014 Website</li>
                </a>
                <a href="#">
                    <li>Vonlunteer</li>
                </a>
                <a href="#">
                    <li>Contact</li>
                </a>
            </ul>
        </ul>
    </footer>
<!-- 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/dist/jquery.min.js"><\/script>')
    </script>
 -->
 	<script src="js/dist/instafeed.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
    </script>
</body>

</html>