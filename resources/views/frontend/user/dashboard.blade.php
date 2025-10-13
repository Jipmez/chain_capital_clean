@extends('frontend.layouts.user')
@section('title')
    {{ __('Dashboard') }}
@endsection
@section('content')
<div style="margin-left:-12px;margin-right:-12px;margin-top:-7px;background:#020C12;color:#2C5364;border:solid 1px #2C5364;border-radius:5px;padding:15px" align="left"><h2 style="color:#2C5364;text-transform:uppercase;"><table width="100%"><tr><td width="100%" style="padding-left:0px;"><b>WELCOME! {{ $user->username }}</b><br><div style="font-size:16px;color:white;" align="left">your main balance:<span style="font-size:16px;color:#95bdfc;" align="left"> {{ setting('currency_symbol','global').$user->balance }}</span></div></td></tr></table></h2><div style="background:#2C5364;color:#020C12;border:solid 1px #2C5364;border-radius:5px;padding:15px"><font color="white"> UTC Time:</font>
<span id="Lagos_z01d" style="font-size:14px"></span>
<script src="//widget.time.is/en.js"></script>
<script>
time_is_widget.init({Lagos_z01d:{template:"TIME | DATE", time_format:"12hours:minutes:secondsAMPM", date_format:"dayname, monthname dnum, year"}});
</script></div>
 </div></div><br>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="overflow:scroll ;" align="center">
  <div id="tradingview_d352b" align="center"></div>
  <div class="tradingview-widget-copyright" align="center"><a href="https://www.tradingview.com/symbols/BTCEUR/?exchange=COINBASE" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 1000,
  "height": 400,
  "symbol": "COINBASE:BTCEUR",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "3",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "withdateranges": true,
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "save_image": false,
  "details": true,
  "hotlist": true,
  "studies": [
    "CCI@tv-basicstudies"
  ],
  "container_id": "tradingview_d352b"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->		<hr>
    {{-- User Card--}}
    @include('frontend.user.include.__user_card')

    {{--Recent Transactions--}}
    @include('frontend.user.include.__recent_transaction')

    {{--Referral and Ranking --}}
    @include('frontend.user.include.__referral_ranking')<div style="font-size:16px;align:center;color:#fff;background:#020C12;padding-bottom:25px;padding-top:25px;margin-bottom:-50px;margin-right:-10px;margin-left:-10px;" align='center'>All Rights Reserved © Chaincorecapital 2025</div>
@endsection
@section('script')
    <script>
        function copyRef() {
            /* Get the text field */
            var copyApi = document.getElementById("refLink");
            /* Select the text field */
            copyApi.select();
            copyApi.setSelectionRange(0, 999999999); /* For mobile devices */
            /* Copy the text inside the text field */
            document.execCommand('copy');
            $('#copy').text($('#copied').val())

        }
    </script>
@endsection
