@component('mail::message')
    # {{$name}}

    برجاء تغيير موعد الحجز هذا للاسف الدكتور غير متاح في هذا الموعد :{{$appointment}}
    {{$time}} في تمام الساعه :
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
