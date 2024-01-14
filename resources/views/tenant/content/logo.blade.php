@extends('layouts.admin')

@section('content')
<div class="container-fluid" dir="rtl">
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">الشعار</h5>
            @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
              @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              @endif
            <form action="{{route('tenant.content.editlogo')}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">الشعار الحالي</label>
                        <div>
                          <img src="{{ asset('storage/logo/' . $facility->logo) }}" width="80" alt="" srcset="">                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">الشعار الجديد</label>
                        <div>
                            <input class="form-control" name="logo" type="file" id="formFileMultiple" required>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="id" value="{{$facility->id}}">
                    <input type="hidden" class="form-control" name="name" value="{{$facility->name}}">
                    <div class="mt-3 submit-buttons">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                        <a class="btn btn-primary" href="{{route('tenant.content')}}">رجوع</a>
                      </div>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection