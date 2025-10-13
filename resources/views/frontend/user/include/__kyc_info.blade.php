@if($user->kyc != \App\Enums\KYCStatus::Verified->value)
    <div class="row">
        <div class="col">
            <div class="alert site-alert fade show" role="alert">
                <div class="content">
                    <div class="icon"><i class="anticon anticon-warning"></i></div>
                    @if($user->kyc == \App\Enums\KYCStatus::Pending->value)
                        <strong>{{ __('KYC Pending') }}</strong>
                    @else
                        <strong>{{ __('Submit KYC') }}</strong>
                    @endif
                </div><br>
                @if($user->kyc != \App\Enums\KYCStatus::Pending->value)
                    <div class="">
                        <a href="{{ route('user.kyc') }}" class="site-btn-sm grad-btn"><i
                                class="anticon anticon-info-circle"></i>{{ __('Submit Now') }}</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif
