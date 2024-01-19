@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">اضافة قاعة</h5>
          <div class="card">
            <div class="card-body">
              @if ($durations->count() > 0)
              <form action="{{route('tenant.hall.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row row-cols-1 row-cols-md-3">
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">اسم القاعة</label>
                      <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('title')
                        <small style="color: red">
                            {{ $message }}
                        </small>
                      @enderror
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">اسم القاعة (بالانجليزي)</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('name')
                        <small style="color: red">
                            {{ $message }}
                        </small>
                      @enderror
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">عدد الاشخاص</label>
                      <input name="people_count" type="text" class="form-control" id="exampleInputPassword1">
                      @error('people_count')
                        <small style="color: red">
                            {{ $message }}
                        </small>
                      @enderror
                    </div>
                  </div>
                  {{-- <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">عدد الاشخاص (بدون الطاولات)</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                  </div> --}}
                  {{-- <div class="col">
                    <label for="exampleInputPassword1" class="form-label">سعر القاعة</label>
                    <div class="input-group mb-3" dir="ltr">
                      <span class="input-group-text price-sr">رس/ س</span>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      
                    </div>
                  </div> --}}
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">مساحة القاعة</label>
                    <div class="input-group mb-3" dir="ltr">
                      <span class="input-group-text price-sr">متر</span>
                      <input name="area" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            
                      {{-- <span class="input-group-text">.00</span> --}}
                    </div>
                    @error('area')
                        <small style="color: red">
                            {{ $message }}
                        </small>
                    @enderror
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">وصف القاعة</label>
                    <input name="discription" type="text" class="form-control" id="exampleInputPassword1">
                      @error('discription')
                        <small style="color: red">
                            {{ $message }}
                        </small>
                      @enderror
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">صور القاعة</label>
                    <div class="mb-3">
                      {{-- <label for="formFileMultiple" class="form-label">Multiple files input example</label> --}}
                      <input class="form-control" type="file" name="image[]" id="formFileMultiple" multiple required>
                      <div id="emailHelp" class="form-text">يجب رفع 4 صور على الأقل</div>
                      @error('image')
                          <small style="color: red">
                              {{ $message }}
                          </small>
                      @enderror
                    </div>
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">فترات القاعة</label>
                    <div class="mb-3">
                      @foreach ($durations as $duration)
                        <div class="input-group mb-3" dir="ltr">
                          <input dir="rtl" type="text" class="form-control"  name="prices[{{ $duration->id }}]" placeholder="السعر" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                          <span class="input-group-text price-sr" id="basic-addon2">{{$duration->from()}} - {{$duration->to()}}</span>
                        </div>
                      @endforeach
                      {{-- <label for="formFileMultiple" class="form-label">Multiple files input example</label> --}}
                      {{-- <input type="hidden" name="facility_id" value="{{}}"> --}}
                    </div>
                  </div>
                </div>
                <div class="mt-3 submit-buttons">
                  <button type="submit" class="btn btn-primary">اضافة</button>
                  <a type="submit" class="btn btn-primary" href="{{route('tenant.hall')}}">رجوع</a>
                </div>

              </form>
              @else
                  <div class="d-flex align-items-center justify-content-center">
                    <p style="color: red">يجب اكمال فترات المنشأة لتتمكن من اضافة قاعة</p>
                  </div>
              @endif
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection