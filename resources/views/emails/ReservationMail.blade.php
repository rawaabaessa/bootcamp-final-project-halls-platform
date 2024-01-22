<!DOCTYPE html>
<html>
<head>
    <title>قبول الحجز</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <p style="text-align: center; font-size: 16px;color:black">تم قبول حجزك بنجاح</p>
    <p style="text-align: right">تفاصيل الحجز</p>
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
    <p style="text-align: right">الفاتورة</p>
    <table style="width: 100%" dir="rtl">
        <tr>
            <td>الخدمة</td>
            <td>السعر</td>
        </tr>
        <tr>
            <td>القاعة</td>
            <td>{{$info->hall_price}} {{$info->hall->facility->currency}}</td>
        </tr>
        @php
            $totalPrice = $info->hall_price; 
        @endphp
        @foreach ($info->orders as $order)
        @if (!$order->service->is_free)
        <tr>
            <td>{{$order->service->name}} </td>
            <td>{{$order->service->price}} {{$info->hall->facility->currency}}</td>
        </tr>
        @php
        $totalPrice += $order->service->price; 
        @endphp
        @endif
        @endforeach
        <tr>
            <td>الاجمالي</td>
            <td>{{$totalPrice}} {{$info->hall->facility->currency}}</td>
        </tr>
    </table>
    <p style="text-align: center; font-size: 16px;color:black">لرؤية المزيد من التفاصيل يرجى تسجيل الدخول</p>
    
    <div style="text-align: center;margin-bottom:50px;margin-top:20px">
        <a href="{{route('signin')}}" style="padding: 10px 25px;margin-left:30px;border-radius:50px;background-color:#cdac33;border:2px solid #cdac33;color:white;text-decoration: none">الدخول</a>

    </div>
</body>
</html>