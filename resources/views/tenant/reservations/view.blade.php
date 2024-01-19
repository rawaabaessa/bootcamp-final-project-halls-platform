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
                  <h4 class="fw-bold mb-3">معلومات العميل</h4>
                  <p><i class="fa-solid fa-user crud-icon"></i>{{$user->name}}</p>
                  <p><i class="fa-solid fa-phone crud-icon"></i>{{$user->phone}}</p>
                  {{-- <p><i class="fas fa-envelope crud-icon"></i></p> --}}
                  <p><i class="fas fa-envelope crud-icon"></i>{{$user->email}}</p>
                  <h4 class="fw-bold mb-3">تفاصيل الحجز</h4>
                  <p><i class="fa-solid fa-calendar-days crud-icon"></i>{{$reservation->date}}</p>
                  <p><i class="fa-solid fa-clock crud-icon"></i>{{$reservation->offerHall->duration->from()}} - {{$reservation->offerHall->duration->to()}}</p>
                  <p><i class="fa-solid fa-person crud-icon"></i>{{$reservation->poeple_count}}</p>
                  <h4 class="my-3">الخدمات المطلوبة</h4>
                  @foreach ($reservation->orders as $order)
                    @if ($order->service->is_free)
                      <p><i class="fa-solid fa-check crud-icon"></i>{{$order->service->name }}</p>
                    @endif
                  @endforeach
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
                      <p>{{$reservation->hall_price}} رس</p>
                    </div>
                    {{-- الخدمات الاضافية --}}
                    @php
                      $totalPrice = $reservation->hall_price; // تعيين القيمة الابتدائية للسعر الإجمالي بقيمة سعر القاعة
                    @endphp
                    {{-- الخدمات الاضافية --}}
                    @foreach ($reservation->orders as $order )
                    @if (!$order->service->is_free)
                      <div class="d-flex justify-content-between">
                        <p>{{$order->service->name}}</p>
                        <p>{{$order->service->price}} رس</p>
                      </div>
                      @php
                        $totalPrice += $order->service->price; // إضافة سعر الخدمة إلى السعر الإجمالي
                      @endphp
                    @endif
                    @endforeach
                    <div class="d-flex justify-content-between border-top pt-2">
                      <p>الاجمالي</p>
                      <p>{{ $totalPrice }} رس</p>
                    </div>
                  </div>
                </div>
              </div>
              @if($voucher)
              <div class="row">
                <div class="">
                  <h4>السند</h4>
                  <img src="{{asset('storage/reservation/'.$voucher->path)}}" width="300" alt="" srcset="" class="border-radius-7">
                </div>
              </div>
              @endif
              <div class="mt-3 submit-buttons">
                @if($reservation->state->name == 'under_review')
                <form action="{{ route('tentant.reservation.confirming') }}" method="post" style="display: inline-block">
                  @csrf
                  <input type="hidden" name="id" value="{{$reservation->id}}">
                  <button type="submit" class="btn btn-primary">تاكيد</button>
                </form>
                <form  style="display: inline-block">
                  @csrf
                  {{-- <input type="hidden" name="id" value="{{$reservation->id}}"> --}}
                  <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal_1">رفض</button>
                </form>
                @endif
                <a type="submit" class="btn btn-primary" href="{{ route('tentant.reservation.list',['name'=> $reservation->hall->name])}}">رجوع</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div dir="rtl" class="modal fade" id="exampleModal_1" tabindex="-1" aria-labelledby="exampleModalLabel_1" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="{{route('tentant.reservation.reject')}}"> 
        @csrf     
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel_1">الغاء حجز</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Use the reservation ID to display relevant message content -->
                <label class="form-label">سبب الرفض</label>
                <textarea class="form-control" type="text" name="reason"></textarea>
            </div>
            <div class="modal-footer justify-content-start">
                    <input type="hidden" value="{{$reservation->id}}" name="id">
                    <button type="submit" class="btn btn-primary">رفض</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">رجوع</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection