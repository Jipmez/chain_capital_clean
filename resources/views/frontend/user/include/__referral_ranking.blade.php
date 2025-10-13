<div class="row">
    @if(setting('sign_up_referral','permission'))
        <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12">
            <div class="site-card">
                <div class="site-card-header">
                    <h3 class="title">{{ __('Referral URL') }}</h3>
                </div>
                <div class="site-card-body">
                    <div class="referral-link">
                        <div class="referral-link-form">
                            <input type="text" value="{{ $referral->link }}" id="refLink"/>
                            <button type="submit" onclick="copyRef()">
                                <i class="anticon anticon-copy"></i>
                                <span id="copy">{{ __('Copy Url') }}</span>
                                <input id="copied" hidden value="{{ __('Copied') }}">
                            </button>
                        </div>
                        <p class="referral-joined">
                            {{ $referral->relationships()->count() }} {{ __('peoples are joined by using this URL') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
