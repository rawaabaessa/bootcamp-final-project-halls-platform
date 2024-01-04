@extends('layouts.admin')

@section('content')
<div class="container-fluid" dir="rtl">
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">المناسبات</h5>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <label class="form-label">المناسبات</label>
                    <div class="group">
                        <div class="tags-input" id="occasion">
                            <ul class="">
                                <input type="text" name="" id="inputTag">
                            </ul>
                        </div>
                        {{-- <div class="removeAll">
                            <button class="btn btn-primary submit-btn">حذف الكل</button>
                        </div> --}}
                    </div>
                    <div class="mt-3 submit-buttons">
                        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                        <a type="submit" class="btn btn-primary" href="{{route('tenant.content.index')}}">رجوع</a>
                    </div>
                </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection