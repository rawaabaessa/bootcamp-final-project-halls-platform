<!DOCTYPE html>
<html>
<head>
    <title>الغاء الحجز</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <p style="text-align: center; font-size: 16px;color:black">تم الغاء حجزك بنجاح</p>
    <table style="width: 100%" dir="rtl">
        <tr>
            <td>حالة الحجز</td>
            <td>{{$info->state->title}}</td>
        </tr>
        <tr>
            <td>تاريخ الحجز</td>
            <td>{{$info->date}}</td>
        </tr>
        <tr>
            <td>فترة الحجز</td>
            <td>{{$info->offerHall->duration->from()}} - {{$info->offerHall->duration->to()}}</td>
        </tr>
        <tr>
            <td>القاعة</td>
            <td>{{$info->hall->title}} - {{$info->hall->facility->title}}</td>
        </tr>
        
    </table>
    <p>منصة قاعة</p>
    {{-- <p style="text-align: center; font-size: 16px;color:black">لرؤية المزيد من التفاصيل يرجى تسجيل الدخول</p> --}}
    
    {{-- <div style="text-align: center;margin-bottom:50px;margin-top:20px">
        <a href="{{route('signin')}}" style="padding: 10px 25px;margin-left:30px;border-radius:50px;background-color:#cdac33;border:2px solid #cdac33;color:white;text-decoration: none">الدخول</a>

    </div> --}}
</body>
</html>