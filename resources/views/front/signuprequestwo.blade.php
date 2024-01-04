<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free-6.4.2-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/css/signup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/css/inputtag.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/libs/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/styles.min.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">
    <title>login</title>
</head>
<body>
    <div id="container" class="container" dir="rtl">
        <div class="d-flex justify-content-center flex-column align-items-center">
            <div class="row">
                <div class="col">
                    <img src="{{asset('assets/images/Blue & Red Overlapping House Realtor Logo (1).png')}}" width="80">
                </div>
            </div>
            <div class="row">
                <div class="col my-2 ">
                    <h3>طلب انضمام</h3>
                </div>
            </div>
            {{-- <div class="row w-50 mb-3">
                <div class="col steps py-2" style="border-bottom: 3px solid #cdac33">
                    <label for="" class="form-label">المعلومات العامة</label>
                </div>
                <div class="col steps py-2" style="border-bottom: 1px solid #cdac33">
                    <label for="" class="form-label">عن المنشأة</label>  
                </div>
            </div> --}}
            <div class="row align-self-start w-100">
                <div class="col mb-3">
                    <label class="form-label">الخدمات</label>
                    <div class="group">
                        <div class="tags-input" id="services">
                            <ul class="">
                                <input type="text" name="" id="inputTag">
                            </ul>
                        </div>
                        {{-- <div class="removeAll">
                            <button class="btn btn-primary submit-btn">حذف الكل</button>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row align-self-start w-100">
                <div class="col mb-3">
                    <label class="form-label">الخدمات الاضافية</label>
                    <div>
                        <div id="fields-container">
                            <div class="row">
                              {{-- <span class="col-1">
                                1
                              </span> --}}
                              <div class="col-8">
                                <div class="form-group pb-3">
                                  <input type="text" class="form-control" name="title[]" placeholder="أدخل الخدمة الاضافية">
                                </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group pb-3">
                                  <input type="number" class="form-control" name="price[]" placeholder="أدخل السعر">
                                </div>
                              </div>
                            </div>
                          </div>
                          <button onclick="addFields() " class="btn btn-primry add-btn btn-dasSecond" ><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="row align-self-start w-100">
                <div class="col mb-3">
                    <label class="form-label">الفترات</label>
                    <div>
                        <div id="fields-container-dur">
                            <div class="row">
                              <div class="col-8">
                                <div class="form-group pb-3">
                                  <label class="form-label">من</label>
                                  <input type="time" class="form-control" name="title[]" placeholder="من">
                                </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group pb-3">
                                  <label class="form-label">الى</label>
                                  <input type="time" class="form-control" name="price[]" placeholder="الى">
                                </div>
                              </div>
                            </div>
                          </div>
                          <button onclick="addduration() " class="btn btn-primry add-btn btn-dasSecond" ><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="row align-self-start w-100">
                <div class="col mb-3">
                    <label class="form-label">المناسبات</label>
                    <div class="group">
                        <div class="tags-input" id="occasion">
                            <ul class="">
                                <input type="text" name="" id="inputTag">
                            </ul>
                        </div>
                        {{-- <div class="removeAll">
                            <button class="btn btn-primary submit-btn">حذف الكل</button>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row align-self-start w-100">
                <div class="col mb-3">
                    <label class="form-label">نبذة (من نحن)</label>
                    <div >
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="row align-self-start w-100">
                <div class="col mb-3">
                    <label class="form-label">الشعار</label>
                    <div>
                        <input type="file" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="col mb-3">
                    <label class="form-label">العملة</label>
                    <div>
                        <select name="" id="" class="form-control">
                            <option value="">SAR</option>
                            <option value="">USD</option>
                            <option value="">YEM</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row align-self-start w-100">
              <div class="col mb-3">
                  <label class="form-label">الحسابات البنكية</label>
                  <div>
                      <div id="fields-container">
                          <div class="row">
                            {{-- <span class="col-1">
                              1
                            </span> --}}
                            <div class="col-8">
                              <div class="form-group pb-3">
                                <input type="text" class="form-control" name="title[]" placeholder="اسم البنك">
                              </div>
                            </div>
                            <div class="col-4">
                              <div class="form-group pb-3">
                                <input type="text" class="form-control" name="price[]" placeholder="رقم الحساب">
                              </div>
                            </div>
                          </div>
                        </div>
                        <button onclick="addFields() " class="btn btn-primry add-btn btn-dasSecond" ><i class="fa-solid fa-plus"></i></button>
                  </div>
              </div>
          </div>
            <div class="row align-self-start w-100">
                <div class="col mb-3">
                    <label class="form-label">حسابات التواصل الاجتماعي</label>
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col">
                            <label for="" class="form-label">انستجرام</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <label for="" class="form-label">فيسبوك</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <label for="" class="form-label">اكس</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="align-self-start">
                <a type="submit" class="btn btn-primary submit-btn" href="{{route('front.joinerequest')}}">تقديم</a>
                {{-- <button type="submit" class="btn btn-primary">رجوع</button> --}}
              </div>
        </div>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
        <script src="{{asset('assets/js/inputtag.js')}}"></script>
        <script>
        function addFields() {
          var container = document.getElementById("fields-container");

          var newTitleField = document.createElement("div");
          newTitleField.classList.add("form-group");
          newTitleField.innerHTML = `
            <div class="row">
              <div class="col-8">
                <div class="form-group pb-3">
                  <input type="text" class="form-control" name="title[]" placeholder="أدخل الخدمة الاضافية">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group pb-3">
                  <input type="number" class="form-control" name="price[]" placeholder="أدخل السعر">
                </div>
              </div>
            </div>
          `;
          container.appendChild(newTitleField);
        }
        function addduration() {
          var container = document.getElementById("fields-container-dur");

          var newTitleField = document.createElement("div");
          newTitleField.classList.add("form-group");
          newTitleField.innerHTML = `
            <div class="row">
              <div class="col-8">
                <div class="form-group pb-3">
                  <input type="time" class="form-control" name="title[]" placeholder="أدخل الخدمة الاضافية">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group pb-3">
                  <input type="time" class="form-control" name="price[]" placeholder="أدخل السعر">
                </div>
              </div>
            </div>
          `;
          container.appendChild(newTitleField);
        }
        </script>
    </div>
</body>
</html>