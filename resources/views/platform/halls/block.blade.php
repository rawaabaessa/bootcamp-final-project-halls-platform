@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">حظر منشأة</h5>
          <div class="card">
            <div class="card-body">
             <p>هل انت متاكد ؟</p>
             <div class="mt-3 submit-buttons">
                <button type="submit" class="btn btn-primary">حظر</button>
                <button type="submit" class="btn btn-primary">رجوع</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection