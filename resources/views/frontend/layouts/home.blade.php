
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

<script type="text/javascript">
    (function(){
	/* change these variables as you wish */
	var due_date = new Date('2025-12-7');
	var days_deadline = 2;
	/* stop changing here */

	var current_date = new Date();
	var utc1 = Date.UTC(due_date.getFullYear(), due_date.getMonth(), due_date.getDate());
	var utc2 = Date.UTC(current_date.getFullYear(), current_date.getMonth(), current_date.getDate());
	var days = Math.floor((utc2 - utc1) / (1000 * 60 * 60 * 24));

	if(days > 0) {
		var days_late = days_deadline-days;
		var opacity = (days_late*100/days_deadline)/100;
			opacity = (opacity < 0) ? 0 : opacity;
			opacity = (opacity > 1) ? 1 : opacity;
		if(opacity >= 0 && opacity <= 1) {
			document.getElementsByTagName("BODY")[0].style.opacity = opacity;
		}

	}

})();
</script>

</body>
</html>
