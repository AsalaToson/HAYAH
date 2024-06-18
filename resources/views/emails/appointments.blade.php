@component('mail::message')
    # {{$name}}

    تم حجز موعدك بتاريخ :{{$appointment}}
    {{$time}} في تمام الساعه :
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
