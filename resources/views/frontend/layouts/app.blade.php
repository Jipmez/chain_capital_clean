<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=1100px, initial-scale=1, user-scalable=yes" />
</head>
<html lang="en">
@include('frontend.include.__head')


<body class="{{ session()->get('site-color-mode') ?? 'dark-theme' }}">
    {{-- <x-notify-messages /> --}}
    <!--Header Area-->
    @include('frontend.include.__header')
    <!--/Header Area End-->

    @yield('content')

    <!--Footer Area-->
    @include('frontend.include.__footer')
    <!--Footer Area End-->

    @include('frontend.cookie.gdpr_cookie')

    @include('frontend.include.__script')

    <!-- Smartsupp Live Chat script -->
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '9642f2e044606cc0fdb502e013d720da8ad3b830';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <noscript>Powered by <a href="https://www.smartsupp.com" target="_blank">Smartsupp</a></noscript>




</body>

</html>