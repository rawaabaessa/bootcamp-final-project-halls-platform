@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">تعديل دور</h5>
          <div class="card">
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">الاسم</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">العنوان</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3" style="display: flex;flex-direction:column">
                    <label class="form-label">الصلاحيات</label>
                </div>
                <div class="group">
                  <div class="list">
                      <input type="checkbox" class="checkbox" id="checkbox_1">
                      <label class="item" for="checkbox_1">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-plus logo-type"></i>
                          <h2>اضافة قاعة</h2>
                      </label>
          
                      <input type="checkbox" class="checkbox" id="checkbox_2">
                      <label class="item" for="checkbox_2">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-plus logo-type"></i>
                          <h2>اضافة مستخدم</h2>
                      </label>
          
                      <input type="checkbox" class="checkbox" id="checkbox_3">
                      <label class="item" for="checkbox_3">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-pencil logo-type"></i>
                          <h2>تعديل مستخدم</h2>
                      </label>
          
                      <input type="checkbox" class="checkbox" id="checkbox_4">
                      <label class="item" for="checkbox_4">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-check logo-type"></i>
                          <h2>تاكيد الحجز</h2>
                      </label>
          
                      <input type="checkbox" class="checkbox" id="checkbox_5">
                      <label class="item" for="checkbox_5">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-plus logo-type"></i>
                          <h2>اضافة حجز</h2>
                      </label>
                      <input type="checkbox" class="checkbox" id="checkbox_5">
                      <label class="item" for="checkbox_5">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-plus logo-type"></i>
                          <h2>اضافة دور</h2>
                      </label>
                      <input type="checkbox" class="checkbox" id="checkbox_5">
                      <label class="item" for="checkbox_5">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-pencil logo-type"></i>
                          <h2>تعديل دور</h2>
                      </label>
                      <input type="checkbox" class="checkbox" id="checkbox_5">
                      <label class="item" for="checkbox_5">
                          <div class="check">
                              <i class="fa-regular fa-circle"></i>
                              <i class="fa-solid fa-circle-check"></i>
                          </div>
                          <i class="fa-solid fa-delete-left logo-type"></i>
                          <h2>حذف دور</h2>
                      </label>
                      <label class="item" for="checkbox_5">
                        <div class="check">
                            <i class="fa-regular fa-circle"></i>
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <i class="fa-solid fa-pencil logo-type"></i>
                        <h2>تعديل المحتوى</h2>
                    </label>
                  </div>
                </div>
                <div class="mt-3 submit-buttons">
                  <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                  <a type="submit" class="btn btn-primary" href="{{route('tenant.role')}}">رجوع</a>
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