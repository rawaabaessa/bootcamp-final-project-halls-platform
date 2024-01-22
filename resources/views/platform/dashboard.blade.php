@extends('layouts.admin')
<link rel="stylesheet" href="{{asset('admin/assets/css/dashboard.css')}}">
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card p-0">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">اهلا بك</h5>
          <div class="row card-container">
            <div class="card p-0">
              <div class="card-body" style="padding: 20px 10px">
                <div class="row align-items-start">
                  <div class="col-4 d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center">
                      <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center" style="background-color: #cdac33 !important">
                        <i class="fa-solid fa-users fs-4"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-8 d-flex flex-column align-items-center justify-content-center gap-2 p-0">
                    <h5 class="card-title mb-0 fw-semibold">المنشأت</h5>
                    <h4 class="fw-semibold mb-0">{{$facility}}</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="card p-0">
              <div class="card-body" style="padding: 20px 10px">
                <div class="row align-items-start">
                  <div class="col-4 d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center">
                      <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center" style="background-color: #cdac33 !important">
                        <i class="fa-regular fa-calendar-days fs-4"></i>
                        
                        {{-- <i class="fa-solid fa-users"></i> --}}
                      </div>
                    </div>
                  </div>
                  <div class="col-8 d-flex flex-column align-items-center justify-content-center gap-2 p-0">
                    <h5 class="card-title mb-0 fw-semibold">الحجوزات</h5>
                    <h4 class="fw-semibold mb-0">{{$reservation}}</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="card p-0">
              <div class="card-body" style="padding: 20px 10px">
                <div class="row align-items-start">
                  <div class="col-4 d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center">
                      <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center" style="background-color: #cdac33 !important">
                        <i class="bi bi-bank fs-4"></i>
                        {{-- <i class="fa-solid fa-users"></i> --}}
                      </div>
                    </div>
                  </div>
                  <div class="col-8 d-flex flex-column align-items-center justify-content-center gap-2 p-0">
                    <h5 class="card-title mb-0 fw-semibold">العملاء</h5>
                    <h4 class="fw-semibold mb-0">{{$allcustomersUnique}}</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection