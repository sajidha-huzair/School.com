@component('mail::message')
    Hello{{ $user->name }},<br>
    <p>We received a request to reset your password. If you did not make this request, simply ignore this email. Otherwise,
        you can reset your password using this link:</p>
    @component('mail::button', ['url' => url('reset/', $user->remember_token)])
        Reset Password
    @endcomponent

    <p>In case you have any issues, please contact us </p>
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
