@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">تفاصيل المنشأة</h5>
          <div class="card">
            <div class="card-body">
              {{-- <div class="d-flex justify-content-center"> --}}
                {{-- <img style="border: 1px solid black;border-radius:50%" width="120" src="{{asset('storage/logo/' . $viewModel->Facility->logo)}}" alt=""> --}}
              {{-- </div> --}}
              <div class="row row-cols-1 row-cols-md-3">
                <div class="col">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">اسم المنشئة</label>
                    <p>{{$viewModel->Facility->title}}</p>
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">اسم مالك المنشئة</label>
                    <p>{{$viewModel->user->name}}</p>
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">رقم التواصل</label>
                    <p>{{$viewModel->Facility->phone}}</p>
                  </div> 
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">الايميل</label>
                    <p>{{$viewModel->Facility->email}}</p>
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">المحافظة</label>
                    <p>{{$viewModel->Governorate->name}}</p>
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">المديرية</label>
                    <p>{{$viewModel->Directorate->name}}</p>
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">عنوان المنشئة</label>
                    <p>{{$viewModel->Facility->address}}</p>
                  </div> 
                </div>
                <div class="col">

                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">صورة الترخيص</label>
                <div>
                  <img width="500" src="{{asset('storage/license/' . $viewModel->Facility->license)}}" alt="">
                </div>
              </div>
              
              @if ($viewModel->Facility->state == 'step1')
                <div class="mt-3 submit-buttons">
                <form method="post" action="{{route('requests.confirm',['name'=>$viewModel->Facility->name])}}">
                  @csrf
                  <button type="submit" class="btn btn-primary">قبول</button>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_{{ $viewModel->Facility->id }}">رفض</button>
                </form>
                </div>
                
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div dir="rtl" class="modal fade" id="exampleModal_{{ $viewModel->Facility->id }}" tabindex="-1" aria-labelledby="exampleModalLabel_{{ $viewModel->Facility->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel_{{ $viewModel->Facility->id }}">رفض طلب الانضمام</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('requests.reject',['name'=>$viewModel->Facility->name])}}">
          @csrf
        <div class="modal-body">
          <!-- Use the message ID to display relevant message content -->
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">سبب الرفض</label>
            <textarea required name="reason" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>
        </div>
        <div class="modal-footer justify-content-start">
            <button type="submit" class="btn btn-primary">رفض</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">اغلاق</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection