<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=1400px, user-scalable=yes" />
@include('frontend.include.__head')
<body>
{{-- <x-notify-messages /> --}}


@yield('content')

@include('frontend.include.__script')

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="4fd5fdbf-d137-4dbd-b19d-92f55f593ec5";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>


</body>
</html>
