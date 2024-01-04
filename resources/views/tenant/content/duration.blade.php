@extends('layouts.admin')

@section('content')
<div class="container-fluid" dir="rtl">
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">الفترات</h5>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <label class="form-label mt-3 "></label>
                    <div>
                        <div id="fields-container">
                            <div class="row">
                              {{-- <span class="col-1">
                                1
                              </span> --}}
                              <div class="col-8">
                                <div class="form-group pb-3">
                                  <input type="time" class="form-control" name="title[]">
                                </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group pb-3">
                                  <input type="time" class="form-control" name="price[]">
                                </div>
                              </div>
                            </div>
                          </div>
                          <button onclick="addduration() " class="btn btn-primry add-btn btn-dasSecond" ><i class="fa-solid fa-plus"></i></button>
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