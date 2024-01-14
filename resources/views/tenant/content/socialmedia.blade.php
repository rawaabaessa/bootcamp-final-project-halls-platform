@extends('layouts.admin')

@section('content')
<div class="container-fluid" dir="rtl">
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">معلومات حسابات التواصل الاجتماعي</h5>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">انستجرام</label>
                        <div>
                            <input class="form-control" type="email" name="" id="" placeholder="https://www.instagram.com/rawaa_mhmd/" value="https://www.instagram.com/rawaa_mhmd/">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">فيسبوك</label>
                        <div>
                            <input class="form-control" type="text" name="" id="" value="https://www.facebook.com/rawaa">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">اكس</label>
                        <div>
                            <input class="form-control" type="text" name="" id="" value="https://www.x.com/rawaa">
                        </div>
                    </div>
                    <div class="mt-3 submit-buttons">
                        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                        <a type="submit" class="btn btn-primary" href="{{route('tenant.content')}}">رجوع</a>
                      </div>
                </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection