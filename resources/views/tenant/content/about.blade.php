@extends('layouts.admin')

@section('content')
<div class="container-fluid" dir="rtl">
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4"> من نحن</h5>
            @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <form action="{{route('tenant.content.editabout')}}" method="post">
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">الوصف</label>
                        <div>
                            <textarea required class="form-control" name="about" id="" rows="10">{{$about}}</textarea>
                        </div>
                        @error('about')
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
                    </form>
                </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection