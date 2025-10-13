<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=1400px, user-scalable=yes" />
@include('frontend.include.__head')
<body>
{{-- <x-notify-messages /> --}}


@yield('content')

@include('frontend.include.__script')

</body>
</html>
