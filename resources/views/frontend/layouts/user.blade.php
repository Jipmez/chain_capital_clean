<!DOCTYPE html><head><meta name="viewport" content="width=1100px, initial-scale=1, user-scalable=yes" /></head>
<html lang="en">
@include('frontend.include.__head')
<body class="{{ session()->get('site-color-mode') ?? 'dark-theme' }}">
<!-- <x:notify-messages/> -->
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
