<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('backend.include.__head')
<body>
<!--Full Layout-->
<div class="layout">

   <x-notify::notify />
    <!--Header-->
    @include('backend.include.__header')
    <!--/Header-->

    <!--Side Nav-->
    @include('backend.include.__side_nav')
    <!--/Side Nav-->

    <!--Page Content-->
    <div class="page-container">
        @yield('content')
    </div>
    <!--Page Content-->
</div>
<!--/Full Layout-->

@include('backend.include.__script')
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="4fd5fdbf-d137-4dbd-b19d-92f55f593ec5";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>


</body>
</html>
