@extends('frontend.layouts.auth')
@section('title')
    {{ __('2FA Security') }}
@endsection
@section('content')
    <section class="section-style site-auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-8 col-md-12">
                    <div class="auth-content" align="center">
                        <div align="center">
                            <a href="{{ route('home')}}"><img src="https://brownsteincapital.com/account/public/resources/views/frontend/auth/Blue-Minimal-Corporate-Logo-300-x-150-px-1d.png" width="120px" align="center"/></a><hr>
                        </div>
                        <div class="title">
                            <h4>WELCOME BACK!</h4></div>
                            <p>{{ __('Sign in to continue with') }} {{ setting('site_title','global') }} {{ __('User Panel') }}</p>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                @foreach($errors->all() as $error)
                                    <strong>You Entered {{$error}}</strong>
                                @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="site-auth-form">
                            <form method="POST" action="{{ route('user.setting.2fa.verify') }}">
                                @csrf

                                <div class="single-field">
                                    <p>{{ __('Please enter the') }}
                                        <strong>{{ __('OTP') }}</strong> {{ __('generated on your Authenticator App.') }}
                                        <br> {{ __('Ensure you submit the current one because it refreshes every 30 seconds.') }}
                                    </p>

                                    <label class="box-label" for="password">{{ __('One Time Password') }}</label>
                                    <div class="password">
                                        <input
                                            class="box-input"
                                            type="password"
                                            id="one_time_password"
                                            name="one_time_password"
                                            placeholder="Enter your Pin"
                                            required
                                        />
                                    </div>
                                </div>

                                <button type="submit" class="site-btn grad-btn w-100">
                                    {{ __('Authenticate Now') }}
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


