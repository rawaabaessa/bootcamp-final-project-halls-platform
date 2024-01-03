@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">اضافة مستخدم</h5>
          <div class="card">
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">المنطقة</label>
                  <input type="المنطقة" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                
                <div class="mt-3 submit-buttons">
                  <button type="submit" class="btn btn-primary">اضافة</button>
                  <button type="submit" class="btn btn-primary">رجوع</button>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
@endsection