@extends('frontend.layouts.auth')
@section('title')
    {{ __('Forgot password') }}
@endsection
@section('content')
    <!-- Login Section -->
    <section class="section-style site-auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-8 col-md-12">
<div class="auth-content" align="center">
                        <div align="center">
                            <a href="{{ route('home')}}"><img src="https://brownsteincapital.com/account/public/resources/views/frontend/auth/Blue-Minimal-Corporate-Logo-300-x-150-px-1d.png" width="120px" align="center"/></a><hr>
                        </div>
                        <div class="title">
                            <h4>PASSWORD RESET</h4></div>
                        @if ($errors->any())
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                @foreach($errors->all() as $error)
                                    <strong>{{$error}}</strong>
                                @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('status'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ session('status') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif


                        <div class="site-auth-form">


                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->

                                <div class="single-field">
                                    <label class="box-label" for="email">{{ __('Email') }}</label>
                                    <input
                                        class="box-input"
                                        type="text"
                                        name="email"
                                        placeholder="Enter your email address"
                                        required
                                        value="{{ old('email') }}"
                                    />
                                </div>


                                <button type="submit" class="site-btn grad-btn w-100">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </form>

                            <div class="singnup-text">
                                <p>{{ __('Already have an account?') }} <a
                                        href="{{ route('login') }}">{{ __('Login') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->
@endsection


