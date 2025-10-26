<div class="side-nav">
    <div class="mb-0 side-wallet-box default-wallet">
        <div class="user-balance-card">
            <div class="wallet-name">
                <div class="name">{{ __('Account Balance') }}</div>
                <div class="default">{{ __('Wallet') }}</div>
            </div>
            <div class="wallet-info">
                <div class="wallet-id"><i icon-name="wallet"></i>{{ __('Main Wallet') }}</div>
                <div class="balance">{{ setting('currency_symbol','global').$user->balance }}</div>
            </div>
            <div class="wallet-info">
                <div class="wallet-id"><i icon-name="landmark"></i>{{ __('Profit Wallet') }}</div>
                <div class="balance">{{ setting('currency_symbol','global').$user->profit_balance }}</div>
            </div>
        </div>

        <style>
.ex {background:#2C5364;color:white;border:solid 1px #2C5364;border-radius:5px;padding:10px 15px}
.ex:hover {background:#95bdfc;color:white;border:solid 1px #fff;border-radius:5px;padding:10px 15px}
</style>

        <hr><a href="{{ route('user.wallet-exchange') }}" class="user-sidebar-btn" style="color:#0c243c;"><div class="ex" align="center"><i
                    class="anticon anticon-credit-card"></i> {{ __('WALLET EXCHANGE') }}</div></a><hr>
        <div class="actions">
            <a href="{{ route('user.deposit.amount') }}" class="user-sidebar-btn"><i
                    class="anticon anticon-file-add"></i>{{ __('Deposit') }}</a>
            <a href="{{ route('user.schema') }}" class="user-sidebar-btn red-btn"><i
                    class="anticon anticon-export"></i>{{ __('Invest Now') }}</a>
        </div>
    </div>
    <div class="side-nav-inside">
        <ul class="side-nav-menu">
            <li class="side-nav-item {{ isActive('user.dashboard') }}">
                <a href="{{route('user.dashboard')}}"><i
                        class="anticon anticon-appstore"></i><span>{{ __('Dashboard') }}</span></a>
            </li>

            <li class="side-nav-item {{ isActive('user.schema*') }}">
                <a href="{{route('user.schema')}}"><i
                        class="anticon anticon-check-square"></i><span>{{ __('Investment Plans') }}</span></a>
            </li>
            <li class="side-nav-item {{ isActive('user.invest*') }}">
                <a href="{{ route('user.invest-logs') }}"><i
                        class="anticon anticon-copy"></i><span>{{ __('Investment History') }}</span></a>
            </li>

            <li class="side-nav-item @if( Route::currentRouteName() != 'user.deposit.log') {{ isActive('user.deposit*') }} @endif">
                <a href="{{ route('user.deposit.amount') }}"><i
                        class="anticon anticon-file-add"></i><span>{{ __('Deposit') }}</span></a>
            </li>
            <li class="side-nav-item {{ isActive('user.deposit.log') }}">
                <a href="{{ route('user.deposit.log') }}"><i
                        class="anticon anticon-folder-add"></i><span>{{ __('Deposit History') }}</span></a>
            </li>

            <li class="side-nav-item @if( Route::currentRouteName() != 'user.withdraw.log') {{ isActive('user.withdraw*') }} @endif">
                <a href="{{ route('user.withdraw.view') }}"><i
                        class="anticon anticon-bank"></i><span>{{ __('Withdraw') }}</span></a>
            </li>
            <li class="side-nav-item {{ isActive('user.withdraw.log') }}">
                <a href="{{ route('user.withdraw.log') }}"><i
                        class="anticon anticon-credit-card"></i><span>{{ __('Withdraw History') }}</span></a>
            </li>


            <li class="side-nav-item {{ isActive('user.transactions*') }}">
                <a href="{{ route('user.transactions') }}"><i
                        class="anticon anticon-inbox"></i><span>{{ __('All Transactions') }}</span></a>
            </li>


            @if(setting('sign_up_referral','permission'))
                <li class="side-nav-item {{ isActive('user.referral') }}">
                    <a href="{{ route('user.referral') }}"><i
                            class="anticon anticon-usergroup-add"></i><span>{{ __('Referral') }}</span></a>
                </li>
            @endif

            <li class="side-nav-item {{ isActive('user.setting*') }}">
                <a href="{{ route('user.setting.show') }}"><i
                        class="anticon anticon-setting"></i><span>{{ __('Settings') }}</span></a>
            </li>
            <li class="side-nav-item {{ isActive('user.ticket*') }}">
                <a href="{{ route('user.ticket.index') }}"
                ><i class="anticon anticon-tool"></i><span>{{ __('Support Tickets') }}</span></a
                >
            </li>
            <li class="side-nav-item">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="site-btn grad-btn w-100">
                        <i class="anticon anticon-logout"></i><span>{{ __('Logout') }}</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
