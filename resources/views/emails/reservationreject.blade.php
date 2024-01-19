<!DOCTYPE html>
<html>
<head>
    <title>رفض الحجز</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    {{-- <div style="text-align: center;">
        <img src="{{asset('assets/images/Blue & Red Overlapping House Realtor Logo (1).png')}}" width="80" alt="" srcset="">
    </div> --}}
    <p style="text-align: center; font-size: 16px;">تم رفض حجزك</p>
    <p style="text-align: right; font-size: 16px;">سبب الرفض : {{ $reason }}</p>
    {{-- <p>{{ $reason }}</p> --}}
</body>
</html>