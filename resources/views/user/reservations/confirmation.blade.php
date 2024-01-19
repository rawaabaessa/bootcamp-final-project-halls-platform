@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">تأكيد الحجز</h5>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h4 class="fw-bold mb-3">تفاصيل الحجز</h4>
                  <p><i class="fa-solid fa-calendar-days crud-icon"></i>{{$reservation->date}}</p>
                  <p><i class="fa-solid fa-clock crud-icon"></i>{{$reservation->offerHall->duration->from()}} - {{$reservation->offerHall->duration->to()}}</p>
                  <p><i class="fa-solid fa-person crud-icon"></i>{{$reservation->poeple_count}}</p>
                  {{-- <h4 class="my-3">الخدمات المطلوبة</h4> --}}
                  <h4 class="my-3">الخدمات المطلوبة</h4>
                  @foreach ($reservation->orders as $order)
                    @if ($order->service->is_free)
                      <p><i class="fa-solid fa-check crud-icon"></i>{{$order->service->name }}</p>
                    @endif
                  @endforeach
                  {{-- <p><i class="fa-solid fa-check crud-icon"></i>فريق تنظيم</p>
                  <p><i class="fa-solid fa-check crud-icon"></i>مسؤولة عبايات</p>
                  <p><i class="fa-solid fa-check crud-icon"></i>جهاز تتبع</p> --}}
                </div>
                <div class="col">
                  <div class="image">
                    <img src="{{asset('storage/images/'.$image->path)}}" width="300" alt="" srcset="" class="border-radius-7">
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <p><i class="bi bi-bank crud-icon"></i>{{$reservation->hall->title}} - {{$reservation->hall->facility->title}}</p>
                      {{-- <p><i class="bi bi-bank crud-icon"></i>قاعة ريماس للافراح</p> --}}
                      <p><i class="fa-solid fa-location-dot crud-icon"></i>{{$reservation->hall->facility->directorate->governorate->name}} - {{$reservation->hall->facility->directorate->name}}</p>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col">
                  <h4 class="my-3">الفاتورة</h4>
                  <div class="">
                    <div class="d-flex justify-content-between">
                      <p>القاعة</p>
                      <p>{{$reservation->hall_price}} {{$reservation->hall->facility->currency}}</p>
                    </div>
                    @php
                      $totalPrice = $reservation->hall_price; // تعيين القيمة الابتدائية للسعر الإجمالي بقيمة سعر القاعة
                    @endphp
                    {{-- الخدمات الاضافية --}}
                    @foreach ($reservation->orders as $order )
                    @if (!$order->service->is_free)
                      <div class="d-flex justify-content-between">
                        <p>{{$order->service->name}}</p>
                        <p>{{$order->service->price}} {{$reservation->hall->facility->currency}}</p>
                      </div>
                      @php
                        $totalPrice += $order->service->price; // إضافة سعر الخدمة إلى السعر الإجمالي
                      @endphp
                    @endif
                    @endforeach
                    <div class="d-flex justify-content-between border-top pt-2">
                      <p>الاجمالي</p>
                      <p>{{$totalPrice}} {{$reservation->hall->facility->currency}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <h4>الحسابات البنكية</h4>
                @foreach ($reservation->hall->facility->payments as $payment)
                <p><i class="fa-solid fa-check crud-icon"></i>{{$payment->name}} : {{$payment->number}}</p>
                @endforeach
              </div>
              @if ($reservation->state->name == 'unconfirmed')
              <div class="row">
                <div class="">
                  <form action="{{route('user.reservation.upload',['id'=>$reservation->id])}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <h4>رفع السند</h4>
                  <input class="form-control" type="file" id="formFileMultiple" name="voucher">
                  <div id="emailHelp" class="form-text">سيتم ارسال ايميل عند تاكيد حجزك</div>
                </div>
              </div>
              @endif
              @if ($reservation->state->name == 'confirmed' || $reservation->state->name == 'under_review' )
              <div class="row">
                <div class="">
                  <h4>السند</h4>
                  <img src="{{asset('storage/reservation/'.$voucher->path)}}" width="300" alt="" srcset="" class="border-radius-7">
                </div>
                <input type="hidden" name="id" value="{{$reservation->id}}">
              </div>
              @endif
              <div class="mt-3 submit-buttons">
                @if ($reservation->state->name == 'unconfirmed')
                <button type="submit" class="btn btn-primary">ارسال</button>
                @endif
                <a type="submit" class="btn btn-primary" href="{{route('user.reservation')}}">رجوع</a>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection