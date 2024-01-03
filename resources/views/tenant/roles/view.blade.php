@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">تفاصيل الدور</h5>
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الاسم</label>
                <p>admin</p>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">العنوان</label>
                <p>مدير منصة</p>
              </div> 
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الصلاحيات</label>
                <p><i class="fa-solid fa-check checked"></i>اضافة مستخدم</p>
                <p><i class="fa-solid fa-check checked"></i>تعديل مستخدم</p>
                <p><i class="fa-solid fa-check checked"></i>حذف مستخدم</p>
                <p><i class="fa-solid fa-check checked"></i>تعديل محتوى</p>
              </div>
             <div class="mt-3 submit-buttons">
                <a type="submit" class="btn btn-primary" href="{{route('tenant.role')}}">رجوع</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection