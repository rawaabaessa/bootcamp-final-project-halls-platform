<!DOCTYPE html>
<html>
<head>
    <title>رد الاستفسار</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    {{-- <div style="text-align: center;">
        <img src="{{$path}}" width="80" alt="َqaah" srcset="">
    </div> --}}
    {{-- <p style="text-align: center; font-size: 16px;">تم رفض طلبك للانضمام للمنصة</p> --}}
    <p style="text-align: right; font-size: 16px;">{{ $reason }}</p>
    <p style="text-align: right; font-size: 16px;">دمتم بود</p>
    <p style="text-align: right; font-size: 16px;">فريق منصة قاعة</p>
    {{-- <p>{{ $reason }}</p> --}}
</body>
</html>