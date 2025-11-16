<!DOCTYPE html><head><meta name="viewport" content="width=1100px, initial-scale=1, user-scalable=yes" /></head>
<html lang="en">
@include('frontend.include.__head')
<body class="{{ session()->get('site-color-mode') ?? 'dark-theme' }}">
<x-notify::notify />
<!--Full Layout-->
<div class="panel-layout">
    <!--Header-->
    @include('frontend.include.__user_header')
    <!--/Header-->

    <!--Side Nav-->
    @include('frontend.include.__user_side_nav')
    <!--/Side Nav-->

    <div class="page-container">
        <div class="main-content">
            <div class="section-gap">
                <div class="container-fluid">
                    @if(setting('kyc_verification','permission'))
                        {{--Kyc Info --}}
                        @include('frontend.user.include.__kyc_info')
                    @endif
                    <!--Page Content-->
                    @yield('content')
                    <!--Page Content-->
                </div>
            </div>
        </div>
    </div>


    <!-- Automatic Popup -->
    @if(Session::get('signup_bonus'))
        @include('frontend.user.include.__signup_bonus')
    @endif

    <!-- /Automatic Popup End -->
</div>
<!--/Full Layout-->

@include('frontend.include.__script')



<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="4fd5fdbf-d137-4dbd-b19d-92f55f593ec5";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

</body>
</html>
