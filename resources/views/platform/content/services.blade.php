@extends('layouts.admin')

@section('content')
<div class="container-fluid" dir="rtl">
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">تعديل قسم خدماتنا</h5>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">العنوان الرئيسي</label>
                        <div>
                            <input class="form-control" type="text" name="" id="" value="حجز القاعات بسهولة">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">الوصف</label>
                        <div>
                            <textarea class="form-control" name="" id="">....</textarea>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">العنوان الرئيسي</label>
                        <div>
                            <input class="form-control" type="text" name="" id="" value="معلومات شاملة">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">الوصف</label>
                        <div>
                            <textarea class="form-control" name="" id="">....</textarea>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">العنوان الرئيسي</label>
                        <div>
                            <input class="form-control" type="text" name="" id="" value="دعم ممتاز">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">الوصف</label>
                        <div>
                            <textarea class="form-control" name="" id="">....</textarea>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">العنوان الرئيسي</label>
                        <div>
                            <input class="form-control" type="text" name="" id="" value="تقييمات ومراجعات العملاء">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">الوصف</label>
                        <div>
                            <textarea class="form-control" name="" id="">....</textarea>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="mt-3 submit-buttons">
                <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                <a type="submit" class="btn btn-primary" href="{{route('content.index')}}">رجوع</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection