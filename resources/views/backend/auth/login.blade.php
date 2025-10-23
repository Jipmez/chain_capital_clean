@extends('backend.auth.index')
@section('title')
    {{ __('Login') }}
@endsection
@section('auth-content')
    <div class="login">
        <div
            class="side-img primary-overlay"
            style="
            background: url({{ asset(setting('login_bg','global')) }}) no-repeat center center;">
            <div class="title">
                <h3>{{ __('Admin Login') }}</h3>
            </div>
        </div>
        <div class="login-content">
            <div class="auth-content" align="center">
                        <div align="center">
                            <a href="{{ route('home')}}"><img src="/images/chain_logo.png" width="120px" align="center"/></a><hr>
                        </div>
                        <div class="title">
                            <h4>WELCOME BACK! SIGN IN</h4></div>

            <div class="auth-body" align="left">

                <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <div class="single-box">
                        <label for="" class="box-label">{{ __('Admin Email') }}</label>
                        <input
                            type="email"
                            name="email"
                            class="box-input"
                            placeholder="Admin Email"
                            required
                        />
                    </div>
                    <div class="single-box">
                        <label for="" class="box-label">{{ __('Password') }}</label>
                        <input
                            type="password"
                            name="password"
                            class="box-input"
                            placeholder="Password"
                            required
                        />
                    </div>
                    <div class="single-box">
                        <button class="site-btn primary-btn" type="submit">{{ __('Admin Login') }}</button>
                        <a href="{{route('admin.forget.password.now')}}"
                           class="mt-2 link">{{ __('Forget Password?') }}</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
