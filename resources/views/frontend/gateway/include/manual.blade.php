<div class="col-xl-12 col-md-12">
    <div class="frontend-editor-data"><br>
        {!! $paymentDetails !!}
    </div>
</div>
@foreach( json_decode($credentials, true) as $key => $credential)

    @if($credential['type'] == 'file')
        <div class="col-xl-12 col-md-12">
           <br> <div class="body-title">{{ $credential['name'] }}</div>
            <div class="wrap-custom-file">
                <input
                    type="file"
                    name="manual_data[{{$credential['name']}}]"
                    id="{{ $key }}"
                    accept=".gif, .jpg, .png"
                    @if($credential['validation'] == 'required') required @endif
                />
                <label for="{{ $key }}">
                    <img
                        class="upload-icon"
                        src="{{ asset('global/materials/upload.svg') }}"
                        alt=""
                    />
                    <span>Click to upload (jpg/png only)</span>
                </label>
            </div>
        </div>
    @elseif($credential['type'] == 'textarea')
    
        <div class="col-xl-12 col-md-12" stlye="padding-bottom:25px;"> <div class="referral-link">
                    <div class="referral-link-form">
                            <input type="text" value="{{ $credential['name'] }}" id="copl"/>
                            <button type="submit" onclick="copyRef()">
                                <i class="anticon anticon-copy"></i>
                                <span id="copy">{{ __('COPY') }}</span>
                                <input id="copied" hidden value="{{ __('Copied') }}">
                            </button>
                        </div></div><br>
                   
                    <script>
        function copyRef() {
            /* Get the text field */
            var copyApi = document.getElementById("copl");
            /* Select the text field */
            copyApi.select();
            copyApi.setSelectionRange(0, 999999999); /* For mobile devices */
            /* Copy the text inside the text field */
            document.execCommand('copy');
            $('#copy').text($('#copied').val())

        }
    </script>
            
            
        </div><hr>
    @else
        <div class="col-xl-12 col-md-12">
            <label for="exampleFormControlInput1" class="form-label">{{ $credential['name'] }}</label>
            <div class="input-group">
                <input type="text" name="manual_data[{{$credential['name']}}]"
                       @if($credential['validation'] == 'required') required @endif class="form-control"
                       aria-label="Amount" id="amount" aria-describedby="basic-addon1">
            </div>
        </div>
    @endif

@endforeach

