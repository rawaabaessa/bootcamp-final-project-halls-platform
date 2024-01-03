@extends('layouts.site')
@section('content')
<body>
    
      <div class="container">
        <div class="image-grid">
          <img class="image-grid-col-2 image-grid-row-2" src="{{asset('assets/images/halls/IMG-20231226-WA0003.jpg')}}" alt="architecture">
          <img src="{{asset('assets/images/halls/IMG-20231226-WA0000.jpg')}}" alt="architecture">
          <img src="{{asset('assets/images/halls/IMG-20231226-WA0001.jpg')}}" alt="architecture">
          <img src="{{asset('assets/images/halls/IMG-20231226-WA0002.jpg')}}" alt="architecture">
          <div class="more" style="background-image: url(images/1.jpeg);">
              + 3
          </div>
      </div>
      <h2 class="text-right hall-heading mb-3">القاعة الملكية</h2>
    </div>
    <div class="container">
        <div class="row" dir="rtl">
          <div class="col mb-4">
            <div class="detail-div">
                <div class="detail-card" dir="rtl">
                    <i class="fa-solid fa-people-group"></i>
                    <span>300 شخص</span>
                </div>
                <div class="detail-card text-right">
                    <i class="fa-solid fa-coins"></i>
                    <span>400 شخص</span>
                </div>
                <div class="detail-card text-right">
                  <i class="flaticon-floor-plan"></i>
                  <span>1.859 متر</span>
              </div>
                <div class="detail-card text-right">
                    <i class="fa-solid fa-coins"></i>
                    <span>500 رس</span>
                </div>
            </div>
            <div class="mt-4 text-justify">
              <p class="text-bold">وصف القاعة</p>
              <p>تتميز القاعة الملكية بمرافق خاصة للضيوف تتمثل في غرفة خاصة مجهزة بالمرايات في مدخل القاعة كما يحتوي المدخل ايضا على دورات مياه مزودة بالمرايات وتم تزويد القاعة بدورات مياه داخليةكما تحتوي ايضا على جناح للعروس مقسم الى غرفتين وجناح عروس اخر مخصص للتصوير</p>
            </div>
        </div>
            <div class="col">
                <div class="price">
                    <div class="row mb-2" dir="rtl">
                        <div class="col">
                          <span class="d-block mb-2">الفترة</span>
                          <select name="" id="" class="form-control">
                            <option value="">9-3 صباحا</option>
                            <option value="">7-1 مساء</option>
                          </select>
                        </div>
                        <div class="col">
                          <span class="d-block mb-2">التاريخ</span>
                          <input type="date" name="" id="" class="form-control" placeholder="&#xf073;">
                        </div>
                    </div>
                    <div class="row justify-content-end mb-2">
                      <div class="col-6">
                        <span>عدد المدعوين</span>
                        <input type="number" name="" id="" max="200" class="form-control">
                      </div>
                      <div class="col-6">
                        <span>نوع المناسبة</span>
                        <select name="" id="" class="form-control">
                            <option value="">زفاف</option>
                            <option value="">مؤتمر</option>
                            <option value="">حفل تخرج</option>
                        </select>
                      </div>
                    </div>
                    <span class="text-bold mb-2">خدمات اختيارية</span>
                    <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <input type="checkbox">
                            <span>حارسة</span>
                        </div>
                        <!-- <span class="services-price"></span> -->
                    </div>
                    <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <input type="checkbox">
                            <span>فريق تنظيم</span>
                        </div>
                        <span class="services-price"></span>
                    </div>
                    <span class="text-bold mb-2">خدمات اضافية</span>
                    <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <input type="checkbox">
                            <span>صالة طعام</span>
                        </div>
                        <span class="services-price">500 رس</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <input type="checkbox">
                            <span>طاولات</span>
                        </div>
                        <span class="services-price">500 رس</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <!-- <input type="checkbox"> -->
                            <span class="text-bold">الاجمالي</span>
                        </div>
                        <span class="services-price text-bold">500 رس</span>
                    </div>
                    <a type="button" class="btn btn-primary mt-2" href="{{route('user.reservations.index')}}">احجز الان</a>
                </div>
            </div>
        

      </div>
    </div>
      
      
</body>
@endsection

