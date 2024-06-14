@component('mail::message')
    # {{$name}}

    برجاء تغيير موعد الحجز هذا للاسف الدكتور غير متاح في هذا الموعد :{{$appointment}}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
