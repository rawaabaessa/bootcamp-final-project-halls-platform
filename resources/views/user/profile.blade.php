@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">الملف الشخصي</h5>
          <div class="card">
            <div class="card-body">
              <form>
                <div class="row row-cols-1 row-cols-md-3">
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">الاسم الكامل</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">رقم الهاتف</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                  </div>
                </div>
                <div class="mt-3 submit-buttons">
                  <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                  <a type="submit" class="btn btn-primary" href="{{route('tenant.reservations.index')}}">رجوع</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection