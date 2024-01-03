@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">اضافة حجز</h5>
          <div class="card">
            <div class="card-body">
              <form>
                <div class="row row-cols-1 row-cols-md-3">
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">اسم العميل</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">رقم الهوية</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">القاعة</label>
                    <select name="" id="" class="form-control">
                        <option value="">الاميرات</option>
                        <option value="">الصغرى</option>
                        <option value="">الملكية</option>
                    </select>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">التاريخ</label>
                      <input type="date" class="form-control" id="exampleInputPassword1">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">وقت البداية</label>
                      <input type="time" class="form-control" id="exampleInputPassword1">
                    </div>
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">وقت النهاية</label>
                    <input type="time" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">عدد المدعوين</label>
                    <input type="number" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">نوع المناسبة</label>
                    <select name="" id="" class="form-control">
                        <option value="">زفاف</option>
                        <option value="">مؤتمر</option>
                        <option value="">حفلة تخرج</option>
                    </select>
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">الخدمات المطلوبة</label>
                    
                  </div>
                  <div class="col">
                    <label for="exampleInputPassword1" class="form-label">المبلغ</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                  </div>
                </div>
                <div class="mt-3 submit-buttons">
                  <button type="submit" class="btn btn-primary">اضافة</button>
                  <a type="submit" class="btn btn-primary" href="{{route('tenant.reservations.index')}}">رجوع</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection