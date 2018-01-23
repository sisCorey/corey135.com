<!DOCTYPE HTML>
<html>
    <head>
        <title>CoreySee -- @yield('title')</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body class="">
        <!-- Main -->
        <div id="main">
            <!-- Header -->
            <header id="header">
                <h1>CoreySee</h1>
                <p>记录生命点滴 ~.~ <a href="http://coreysee.com">coreysee.com</a></p>
            </header>
            <!-- Thumbnail -->
            <section id="thumbnails">
                @yield('menus')
            </section>

            <section id="form">
                @yield('form')
            </section>
            <!-- Footer -->
            <footer id="footer">
                <ul class="copyright">
                    <li>&copy; Corey.</li><li> Design: <a href="http://www.coreysee.com">COREY SEE</a></li>
                </ul>
            </footer>
        </div>

        <!-- Scripts -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/admin/photo.js"></script>

    </body>
</html>