@extends('layouts.admin')

@section('content')
<div class="container-fluid" dir="rtl">
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">تعديل الشعار</h5>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">الشعار الحالي</label>
                        <div>
                            <img src="{{asset('assets/images/Blue & Red Overlapping House Realtor Logo (1).png')}}" width="80" alt="" srcset="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">الشعار الجديد</label>
                        <div>
                            <input class="form-control" type="file" id="formFileMultiple">
                        </div>
                    </div>
                    <div class="mt-3 submit-buttons">
                        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                        <a type="submit" class="btn btn-primary" href="{{route('content.index')}}">رجوع</a>
                      </div>
                </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection