@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">حذف قاعة</h5>
          <div class="card">
            <div class="card-body">
             <p>هل انت متاكد ؟</p>
             <div class="mt-3 submit-buttons">
                <button type="submit" class="btn btn-primary">حذف</button>
                <a type="submit" class="btn btn-primary" href="{{route('tenant.halls.index')}}">رجوع</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection