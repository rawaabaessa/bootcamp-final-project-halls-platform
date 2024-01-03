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
                  <p><i class="fa-solid fa-calendar-days crud-icon"></i> 2-2-2022</p>
                  <p><i class="fa-solid fa-clock crud-icon"></i> 8:00-12:00</p>
                  <p><i class="fa-solid fa-person crud-icon"></i> 400</p>
                  <h4 class="my-3">الخدمات المطلوبة</h4>
                  <p><i class="fa-solid fa-check crud-icon"></i>بروجكتر</p>
                  <p><i class="fa-solid fa-check crud-icon"></i>فريق تنظيم</p>
                  <p><i class="fa-solid fa-check crud-icon"></i>مسؤولة عبايات</p>
                  <p><i class="fa-solid fa-check crud-icon"></i>جهاز تتبع</p>
                </div>
                <div class="col">
                  <div class="image">
                    <img src="{{asset('assets/images/image_1.jpg')}}" width="300" alt="" srcset="" class="border-radius-7">
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <p><i class="bi bi-bank crud-icon"></i>القاعة الملكية - قاعة ريماس للافراح</p>
                      {{-- <p><i class="bi bi-bank crud-icon"></i>قاعة ريماس للافراح</p> --}}
                      <p><i class="fa-solid fa-location-dot crud-icon"></i>غيل باوزير</p>
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
                      <p>5000 رس</p>
                    </div>
                    {{-- الخدمات الاضافية --}}
                    <div class="d-flex justify-content-between">
                      <p>صالة طعام</p>
                      <p>1000 رس</p>
                    </div>
                    <div class="d-flex justify-content-between border-top pt-2">
                      <p>الاجمالي</p>
                      <p>6000 رس</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="">
                  <h4>رفع السند</h4>
                  <input class="form-control" type="file" id="formFileMultiple" multiple>
                  <div id="emailHelp" class="form-text">سيتم ارسال ايميل عند تاكيد حجزك</div>
                </div>
              </div>
              <div class="row d-none">
                <div class="">
                  <h4>السند</h4>
                  <img src="{{asset('assets/images/image_1.jpg')}}" width="300" alt="" srcset="" class="border-radius-7">
                </div>
              </div>
              <div class="mt-3 submit-buttons">
                <button type="submit" class="btn btn-primary">ارسال</button>
                <a type="submit" class="btn btn-primary" href="{{route('tenant.halls.index')}}">رجوع</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection