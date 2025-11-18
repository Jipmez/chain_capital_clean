
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

        <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element'
            );
        }
    </script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

<script src="//code.jivosite.com/widget/zAfVk6Avfk" async></script>


</body>
</html>
