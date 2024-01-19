@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">تفاصيل الرسالة</h5>
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الاسم</label>
                <p>{{$record->name}}</p>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الايميل</label>
                <p>{{$record->email}}</p>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">العنوان</label>
                <p>{{$record->subject}}</p>
              </div> 
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الموضوع</label>
                <p>{{$record->message}}</p>
                {{-- <p><i class="fa-solid fa-check checked"></i>تعديل </p> --}}
                {{-- <p><i class="fa-solid fa-check checked"></i>حذف مستخدم</p> --}}
                {{-- <p><i class="fa-solid fa-check checked"></i>تعديل محتوى</p> --}}
              </div>
             <div class="mt-3 submit-buttons">
                <a type="button" class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal_1">رد</a>
                <a type="button"  class="btn btn-primary" href="{{route('tenant.messages.index')}}" >رجوع</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div dir="rtl" class="modal fade" id="exampleModal_1" tabindex="-1" aria-labelledby="exampleModalLabel_1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel_1">ارسال رد</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tenant.messages.sendreplay')}}">
            @csrf
          <!-- Use the message ID to display relevant message content -->
          <textarea type="text" class="form-control" name="reply"></textarea>
        </div>
        <div class="modal-footer justify-content-start">
            <button type="submit" class="btn btn-primary">ارسال</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">رجوع</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection