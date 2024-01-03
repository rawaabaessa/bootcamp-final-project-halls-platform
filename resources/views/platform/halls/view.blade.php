@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">تفاصيل المنشأة</h5>
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">اسم المنشئة</label>
                <p>قاعة ريماس للمناسبات</p>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">اسم مالك المنشئة</label>
                <p>خالد العطيشي</p>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">رقم التواصل</label>
                <p>12344555</p>
              </div> 
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الايميل</label>
                <p>rawaabaessa@gmail.com</p>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">عدد القاعات</label>
                <p>2</p>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">المدينة</label>
                <p>غيل باوزير</p>
              </div> 
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">عنوان المنشئة</label>
                <p>شارع بونمي</p>
              </div> 
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">صورة الترخيص</label>
                <p>صورة</p>
              </div> 
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">خريطة العنوان</label>
                <p>خريطة</p>
              </div>
             <div class="mt-3 submit-buttons">
                <a type="submit" class="btn btn-primary" href="{{route('halls.index')}}">رجوع</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection