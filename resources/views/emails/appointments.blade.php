@component('mail::message')
    # {{$name}}

    Your arrival date has been postponed :{{$appointment}}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent

