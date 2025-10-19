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
<script src="//code.jivosite.com/widget/zAfVk6Avfk" async></script>


</body>
</html>
