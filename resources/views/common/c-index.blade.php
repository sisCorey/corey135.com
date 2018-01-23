<!DOCTYPE HTML>
<html>
<head>
    <title>CoreySee -- @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,700" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-loading-0 is-loading-1 is-loading-2">

    <!-- For WechatShare -->
    <div class="hide"><img src="assets/image/share_icon.jpg"></div>

    <!-- Main -->
    <div id="main">

        <!-- Header -->
        <header id="header">
            <h1>CoreySee</h1>
            <p>记录生命点滴 ~.~ <a href="/">coreysee.com</a></p>
            <ul class="icons">
                <li><a href="http://zqcore.lofter.com/" class="icon fa-envelope-o" target="_blank"><span class="label">Lofter</span></a></li>
                <li><a href="https://instagram.com/zqcore/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
                <li><a href="https://twitter.com/corey_vision" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/corey.lueng" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
                <li><a href="javascript:icon_show('wechar')" class="icon fa-wechat" target="_blank"><span class="label">Wechat</span></a></li>
            </ul>
        </header>

        <!-- Thumbnail -->
        <section id="thumbnails">
            @yield('photos')
        </section>

        <!-- Footer -->
        <footer id="footer">
            <ul class="copyright">
                <li>&copy; Corey.</li><li> Design: <a href="/">COREY SEE</a></li>
            </ul>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dragReSize.js"></script>

</body>
</html>