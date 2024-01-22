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
                <p>{{$message->name}}</p>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الايميل</label>
                <p>{{$message->email}}</p>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">العنوان</label>
                <p>{{$message->subject}}</p>
              </div> 
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الموضوع</label>
                <p>{{$message->message}}</p>
              </div>
             <div class="mt-3 submit-buttons">
                @if ($message->is_replied == 0)
                  <a type="button" class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal_1">رد</a>
                @endif
                <a type="submit" class="btn btn-primary" href="{{route('messages.index')}}">رجوع</a>
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
          <form method="post" action="{{route('messages.sendreplay')}}">
          <!-- Use the message ID to display relevant message content -->
          <textarea type="text" class="form-control" name="reply"></textarea>
          <input type="hidden" name="id" value="{{$message->id}}">
          <input type="hidden" name="email" value="{{$message->email}}">
        </div>
        <div class="modal-footer justify-content-start">
            @csrf
            <button type="submit" class="btn btn-primary">ارسال</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">رجوع</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection