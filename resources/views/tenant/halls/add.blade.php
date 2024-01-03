@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">اضافة قاعة</h5>
          <div class="card">
            <div class="card-body">
              <form>
                <div class="row row-cols-1 row-cols-md-3">
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">اسم القاعة</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">عدد الاشخاص (مع الطاولات)</label>
                      <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">عدد الاشخاص (بدون الطاولات)</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">سعر القاعة</label>
                    <div class="input-group mb-3" dir="ltr">
                      <span class="input-group-text price-sr">رس/ س</span>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      
                    </div>
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">مساحة القاعة</label>
                    <div class="input-group mb-3" dir="ltr">
                      <span class="input-group-text price-sr">متر</span>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      {{-- <span class="input-group-text">.00</span> --}}
                    </div>
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">وصف القاعة</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">صور القاعة</label>
                    <div class="mb-3">
                      {{-- <label for="formFileMultiple" class="form-label">Multiple files input example</label> --}}
                      <input class="form-control" type="file" id="formFileMultiple" multiple>
                      <div id="emailHelp" class="form-text">يجب رفع 4 صور على الاقل</div>
                    </div>
                  </div>
                  
                </div>
                <div class="mt-3 submit-buttons">
                  <button type="submit" class="btn btn-primary">اضافة</button>
                  <a type="submit" class="btn btn-primary" href="{{route('tenant.halls.index')}}">رجوع</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection