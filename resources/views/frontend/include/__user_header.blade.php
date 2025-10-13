<div class="panel-header">
    <div class="logo" style="font-size: 20px; color: #fff; align-items: center; display: flex; justify-content: center;" id="mb">
        <a href="{{route('home')}}">
            <img class="logo-unfold" src="/images/chain_logo.png" width="120px" height="120px" alt="Logo"/>
            <img class="logo-fold" src="/images/chain_logo.png" width="120px" height="120px" alt="Logo"/>
        </a>
        ChainCore Capital
    </div>
    <div class="nav-wrap">
        <div class="nav-left">

            <button class="sidebar-toggle"><script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script><style>
.container {
  display: inline-block;
  cursor: pointer;
  border:1px solid white;
  border-radius:5px;
  padding:2px 8px;
}

.bar1, .bar2, .bar3 {
  width: 20px;
  height: 1.5px;
  background-color: #fff;
  margin: 5px 0;
  transition: 0.4s;
}

.change .bar1 {
  transform: translate(0, 5.5px) rotate(-45deg);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  transform: translate(0, -5.5px) rotate(45deg);
}
</style><div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button>
        </div>
        <div class="nav-right">
            <div class="single-nav-right">

                <div class="single-right">
                    <div class="color-switcher">
                    </div>
                </div>
                <div class="single-right">
                    <div id="pc"><a href="/"><img class="logo-fold" src="/images/chain_logo.png" alt="Logo" width="100px" style="margin-right:10px;"/></a></div>
                </div>
                <div class="single-right">
                    <button
                        type="button"
                        class="item"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="anticon anticon-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="{{ route('user.setting.show') }}" class="dropdown-item" type="button"><i
                                    class="anticon anticon-setting"></i>{{ __('Settings') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('user.change.password') }}" class="dropdown-item" type="button">
                                <i class="anticon anticon-lock"></i>{{ __('Change Password') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.ticket.index') }}" class="dropdown-item" type="button">
                                <i class="anticon anticon-customer-service"></i>{{ __('Support Tickets') }}
                            </a>
                        </li>
                        <li class="logout">
                            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                @csrf
                                <a href="{{ url('logout') }}" class="dropdown-item"
                                   onclick="event.preventDefault(); localStorage.clear();  $('#logout-form').submit();"><i
                                        class="anticon anticon-logout"></i>{{ __('Logout') }}</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        // Color Switcher
        $(".color-switcher").on('click', function () {
            "use strict"
            $("body").toggleClass("dark-theme");
            var url = '{{ route("mode-theme") }}';
            $.get(url)
        });
    </script>
@endpush
<style>@media only screen and (min-width: 1000px) {
  #pc {
    display: none;
  }
}</style>
<style>@media only screen and (max-width: 1000px) {
  #mb {
    display: none;
  }
}</style>
