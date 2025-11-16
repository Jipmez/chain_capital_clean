<!DOCTYPE html><head><meta name="viewport" content="width=1100px, initial-scale=1, user-scalable=yes" /></head>
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
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="4fd5fdbf-d137-4dbd-b19d-92f55f593ec5";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>



</body>
</html>
