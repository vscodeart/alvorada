<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>
@if(isset($content))
    @if(isset($content['name']))
        <p><b>{{ __('Name') }}</b>: {{  $content['name']  }}</p>
    @endif
    @if(isset($content['phone_number']))
        <p><b>{{ __('Phone') }}</b>: {{  $content['phone_number']  }}</p>
    @endif
    @if(isset($content['service']))
        <p><b>{{ __('Service') }}</b>: {{  $content['service']  }}</p>
    @endif
    @if(isset($content['message']))
        <p><b>{{ __('Message') }}</b>: {{  $content['message']  }}</p>
    @endif
@endif

</body>
</html>
