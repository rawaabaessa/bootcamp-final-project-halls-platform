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
                  <label for="exampleInputEmail1" class="form-label">الايميل</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">الاسم</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3" style="display: flex;flex-direction:column">
                    <label class="form-label">الادوار</label>
                </div>
                <div class="group">
                  {{-- <h1>Choose your favorites</h1> --}}
                  <div class="list">
                      <input type="checkbox" class="checkbox" id="checkbox_1">
                      <label class="item" for="checkbox_1">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-user-tie logo-type"></i>
                          <h2>ادمن المنصة</h2>
                      </label>
          
                      <input type="checkbox" class="checkbox" id="checkbox_2">
                      <label class="item" for="checkbox_2">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-building-columns logo-type"></i>
                          <h2>مدير القاعة</h2>
                      </label>
          
                      <input type="checkbox" class="checkbox" id="checkbox_3">
                      <label class="item" for="checkbox_3">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-pencil logo-type"></i>
                          <h2>مدير المحتوى</h2>
                      </label>
          
                      <input type="checkbox" class="checkbox" id="checkbox_4">
                      <label class="item" for="checkbox_4">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-user logo-type"></i>
                          <h2>العميل</h2>
                      </label>
          
                      <input type="checkbox" class="checkbox" id="checkbox_5">
                      <label class="item" for="checkbox_5">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-bell-concierge logo-type"></i>
                          <h2>الاستقبال</h2>
                      </label>
                  </div>
              
          
                </div>
                {{-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
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