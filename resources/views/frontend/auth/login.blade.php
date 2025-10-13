@extends('frontend.layouts.auth')

@section('title')
    {{ __('Login') }}
@endsection
@section('content')

    <!-- Login Section -->
    <section class="section-style site-auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-8 col-md-12">
                    <div class="auth-content" align="center">
                        <div align="center">
                            <a href="{{ route('home')}}"><img src="images/chain_logo.png" width="120px" align="center"/></a><hr>
                        </div>
                        <div class="title">
                            <h4>WELCOME BACK! SIGN IN</h4></div>
                        @if ($errors->any())
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                @foreach($errors->all() as $error)
                                    <strong>{{$error}}</strong>
                                @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif


                        <div class="site-auth-form" align="left">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="single-field">
                                    <label class="box-label" for="email">{{ __('Email Or Username') }}</label>
                                    <input
                                        class="box-input"
                                        type="text"
                                        name="email"
                                        placeholder="Enter your email address or username"
                                        required
                                    />
                                </div>
                                <div class="single-field">
                                    <label class="box-label" for="password">{{ __('Password') }}</label>
                                    <div class="password">
                                        <input
                                            class="box-input"
                                            type="password"
                                            name="password"
                                            placeholder="Enter your password"
                                            required
                                        />
                                    </div>
                                </div>

                                @if($googleReCaptcha)
                                    <div class="mb-3 g-recaptcha" id="feedback-recaptcha"
                                         data-sitekey="{{ json_decode($googleReCaptcha->data,true)['google_recaptcha_key'] }}">
                                    </div>
                                @endif

                                <div class="single-field">
                                    <input
                                        class="form-check-input check-input"
                                        type="checkbox"
                                        name="remember"
                                        id="flexCheckDefault"
                                    />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('Remember me') }}
                                    </label>
<hr>
                                    @if (Route::has('password.request'))
                                        <div class=""><a
                                                href="{{ route('password.request') }}">{{ __('Forget Password') }}</a></div>
                                    @endif
                                </div>
                                <button type="submit" class="site-btn grad-btn w-100">
                                    {{ __('Account Login') }}
                                </button>
                            </form>
                            <div class="singnup-text">
                                <p>
                                    {{ __("Don't have an account?") }}
                                    <a href="{{route('register')}}">{{ __('Signup for free') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->
@endsection
@section('script')
    @if($googleReCaptcha)
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
@endsection
