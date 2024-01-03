@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">تفاصيل المستخدم</h5>
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الاسم</label>
                <p>روعة باعيسى</p>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الايميل</label>
                <p>rawaabaessa@gmail.com</p>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الباسوورد</label>
                <p>12344555</p>
              </div> 
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الادوار</label>
                <p><i class="fa-solid fa-check checked"></i>مستخدم</p>
                {{-- <p><i class="fa-solid fa-check checked"></i>تعديل </p> --}}
                {{-- <p><i class="fa-solid fa-check checked"></i>حذف مستخدم</p> --}}
                {{-- <p><i class="fa-solid fa-check checked"></i>تعديل محتوى</p> --}}
              </div>
             <div class="mt-3 submit-buttons">
                <a type="submit" class="btn btn-primary" href="{{route('users')}}">رجوع</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection