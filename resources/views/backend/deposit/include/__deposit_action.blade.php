<h3 class="mb-4 title">
    {{ __('Deposit Approval Action') }}
</h3>

<ul class="mb-4 list-group">

    @foreach( json_decode($data) as $key => $value)
        <li class="list-group-item">
            {{ $key }}:

            @if($value != new stdClass())
                @if( file_exists('assets/'.$value))
                    <img src="{{ '/assets/'.$value }}" alt=""/>
                @else
                    <strong>{{ $value }}</strong>
                @endif
            @endif
        </li>
    @endforeach
</ul>

<form action="{{ route('admin.deposit.action.now') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $id }}">

    <div class="site-input-groups">
        <label for="" class="box-input-label">{{ __('Details Message(Optional)') }}</label>
        <textarea name="message" class="mb-0 form-textarea" placeholder="Details Message"></textarea>
    </div>

    <div class="action-btns">
        <button type="submit" name="approve" value="yes" class="site-btn-sm primary-btn me-2">
            <i icon-name="check"></i>
            {{ __('Approve') }}
        </button>
        <button type="submit" name="reject" value="yes" class="site-btn-sm red-btn">
            <i icon-name="x"></i>
            {{ __('Reject') }}
        </button>
    </div>

</form>
<script>
    'use strict';
    lucide.createIcons();
</script>
