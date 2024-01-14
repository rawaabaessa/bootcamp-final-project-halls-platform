@extends('layouts.admin')

@section('content')
<div class="container-fluid" dir="rtl">
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4"> معلومات التواصل </h5>
            @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
            <div class="card">
                <div class="card-body" style="padding: 20px">
                  <form action="{{route('tenant.content.editcontact')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">الايميل</label>
                        <div>
                            <input required class="form-control" type="email" name="email" id="" value="{{$facility->email}}">
                        </div>
                        @error('email')
                        <small style="color: red">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">رقم التواصل</label>
                        <div>
                            <input required class="form-control" type="text" name="phone" id="" value="{{$facility->phone}}">
                        </div>
                        @error('email')
                        <small style="color: red">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <input type="hidden" class="form-control" name="id" value="{{$facility->id}}">
                      <input type="hidden" class="form-control" name="name" value="{{$facility->name}}">
                    <div class="mt-3 submit-buttons">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                        <a class="btn btn-primary" href="{{route('tenant.content')}}">رجوع</a>
                    </div>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection