@extends('frontend.layouts.auth')
@section('title')
    {{ __('Verify Email') }}
@endsection
@section('content')
    <section class="section-style site-auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-8 col-md-12">
                    <div class="auth-content" align="center">
                        <div align="center">
                            <a href="{{ route('home')}}"><img src="images/chain_logo.png" width="120px" align="center"/></a><hr>
                        </div>
                        <div class="title">
                            <h4>VERIFY E-MAIL</h4></div>
                            <p>Welcome Aboard!<br>Congratulations your success journey just started.<br><b>ONE MORE STEP TO GET STARTED<br> You need to verify your email address for full access</b><br>{{ __('verify your email address by clicking on the verify email below') }}</p>
                        </div>
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ __('A verification link has been sent to the email address you provided during registration.') }}
                            </div>

                        @endif
                        <div class="site-auth-form">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <button type="submit" class="site-btn grad-btn w-100">
                                    {{ __('Verify Email') }}
                                </button>
                            </form><br>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="site-btn grad-btn w-100">
                                    {{ __('Log Out') }}
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
