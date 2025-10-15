
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" href="images/chain_logo.png">
    <title>{{ setting('site_title', 'global') }}</title>
    <link rel="stylesheet" href="site/css/vendor.bundle.css?ver=210">
    <link rel="stylesheet" href="site/css/style.css?ver=210" id="changeTheme">
    <link rel="stylesheet" href="site/css/theme.css?ver=210">
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
</head>
<body class="nk-body body-wider theme-light">
  <div class="nk-wrap">
     @include('frontend.include.__home_header')

       @yield('content')

     @include('frontend.include.__home_footer')
  </div>



    <script src="site/js/jquery.bundle.js?ver=210"></script>
    <script src="site/js/scripts.js?ver=210"></script>

    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'e56dc6b67b2f3447e1180c66a19e53a414ae909f';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</body>
</html>
