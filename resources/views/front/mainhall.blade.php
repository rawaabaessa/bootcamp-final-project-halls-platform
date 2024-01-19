@extends('layouts.site')
@section('content')
<body>
  <section class="ftco-section ftco-property-details mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="property-details">
            {{-- <div class="img" style="background-image: url(images/work-1.jpg);"></div> --}}
            <div class="text text-center">
              <img src="{{asset(('storage/logo/' . $facility->logo))}}" width="150">
              <h2>{{$facility->title}}</h2>
              <span class="subheading">{{$facility->directorate->governorate->name}} - {{$facility->directorate->name}}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 pills">
          <div class="bd-example bd-example-tabs">
            <div class="d-flex justify-content-center">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                <li class="nav-item">
                  <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">الخدمات</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">نبذة عنا</a>
                </li>
                <li class="nav-item">
                  {{-- <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">التواصل</a> --}}
                </li>
              </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                <div class="row" dir="rtl">
                  @foreach ($facility->services as $service)
                  @if ($service->is_free)
                  <div class="col-md-4 d-flex align-items-center justify-content-center" dir="ltr">
                    <ul class="features">
                      <li class="check">{{$service->name}}<span class="ion-ios-checkmark" style="margin-left: 10px;color:#cdac33"></span></li>
                    </ul>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
              <div class="tab-pane fade text-justify" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                <p style="text-align: right">@if(!empty($user->content->discription)) {{ $user->content->discription }} @endif</p>
                {{-- <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p> --}}
              </div>

              {{-- <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                <div class="row">
                   <div class="col-md-7">
                     <h3 class="head">23 Reviews</h3>
                     <div class="review d-flex">
                       <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                       <div class="desc">
                         <h4>
                           <span class="text-left">Jacob Webb</span>
                           <span class="text-right">14 March 2018</span>
                         </h4>
                         <p class="star">
                           <span>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                           </span>
                           <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                         </p>
                         <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                       </div>
                     </div>
                     <div class="review d-flex">
                       <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                       <div class="desc">
                         <h4>
                           <span class="text-left">Jacob Webb</span>
                           <span class="text-right">14 March 2018</span>
                         </h4>
                         <p class="star">
                           <span>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                           </span>
                           <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                         </p>
                         <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                       </div>
                     </div>
                     <div class="review d-flex">
                       <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                       <div class="desc">
                         <h4>
                           <span class="text-left">Jacob Webb</span>
                           <span class="text-right">14 March 2018</span>
                         </h4>
                         <p class="star">
                           <span>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                           </span>
                           <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                         </p>
                         <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-5">
                     <div class="rating-wrap">
                       <h3 class="head">Give a Review</h3>
                       <div class="wrap">
                         <p class="star">
                           <span>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             (98%)
                           </span>
                           <span>20 Reviews</span>
                         </p>
                         <p class="star">
                           <span>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             (85%)
                           </span>
                           <span>10 Reviews</span>
                         </p>
                         <p class="star">
                           <span>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             (70%)
                           </span>
                           <span>5 Reviews</span>
                         </p>
                         <p class="star">
                           <span>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             (10%)
                           </span>
                           <span>0 Reviews</span>
                         </p>
                         <p class="star">
                           <span>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             <i class="ion-ios-star"></i>
                             (0%)
                           </span>
                           <span>0 Reviews</span>
                         </p>
                       </div>
                     </div>
                   </div>
                 </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- <section class="ftco-section ftco-no-pb" id="services">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 heading-section text-center ftco-animate mb-5">
        <span class="subheading">خدماتنا</span>
        <!-- <h2 class="mb-2">The smartest way to buy a home</h2> -->
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-5 justify-content-center">

      <div class="col d-flex align-self-stretch ftco-animate justify-content-center">
        <div class="media block-6 services d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center" style="border: 3px solid #cdac33;border-radius: 50%;height: 40px;width: 40px;font-size: 25px;"><i class="fa-solid fa-check" style="color: #cdac33;"></i></div>
          <div class="media-body py-md-4">
            <p>بروجكتر</p>
          </div>
        </div>      
      </div>
      <div class="col d-flex align-self-stretch ftco-animate justify-content-center">
        <div class="media block-6 services d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center" style="border: 3px solid #cdac33;border-radius: 50%;height: 40px;width: 40px;font-size: 25px;color: #cdac33;"><i class="fa-solid fa-check"></i></div>
          <div class="media-body py-md-4">
            <p>جهاز تتبع</p>
            
          </div>
        </div>      
      </div>
      <div class="col d-flex align-self-stretch ftco-animate justify-content-center">
        <div class="media block-6 services d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center" style="border: 3px solid #cdac33;border-radius: 50%;height: 40px;width: 40px;font-size: 25px;color: #cdac33;"><i class="fa-solid fa-check"></i></div>
          <div class="media-body py-md-4">
            <p>مسؤولة عبايات</p>
            
          </div>
        </div>      
      </div>
      <div class="col d-flex align-self-stretch ftco-animate justify-content-center">
        <div class="media block-6 services d-block text-center" >
          <div class="icon d-flex justify-content-center align-items-center" style="border: 3px solid #cdac33;border-radius: 50%;height: 40px;width: 40px;font-size: 25px;color: #cdac33;"><i class="fa-solid fa-check"></i></div>
          <div class="media-body py-md-4">
            <p>مفتشة جوالات</p>
            
          </div>
        </div>      
      </div>
      <div class="col d-flex align-self-stretch ftco-animate justify-content-center">
        <div class="media block-6 services d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center" style="border: 3px solid #cdac33;border-radius: 50%;height: 40px;width: 40px;font-size: 25px;color: #cdac33;"><i class="fa-solid fa-check"></i></div>
          <div class="media-body py-md-4">
            <p>حارسة</p>
            
          </div>
        </div>      
      </div>
      <div class="col d-flex align-self-stretch ftco-animate justify-content-center">
        <div class="media block-6 services d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center" style="border: 3px solid #cdac33;border-radius: 50%;height: 40px;width: 40px;font-size: 25px;color: #cdac33;"><i class="fa-solid fa-check"></i></div>
          <div class="media-body py-md-4">
            <p>ضيافة</p>
          </div>
        </div>      
      </div>
    </div>
  </div>
</section> --}}
  <section class="ftco-section goto-here" id="halls">
      <div class="container">
          <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">القاعات</span>
          <!-- <h2 class="mb-2">Exclusive Offer For You</h2> -->
        </div>
      </div>
      <div class="row" dir="rtl">
         @foreach ($viewModels as $viewModel)
         <div class="col-md-4">
          <div class="property-wrap ftco-animate">
              <a href="{{route('front.facilities.details',['name'=>$viewModel->hall->name])}}" class="img" style="background-image: url({{asset('storage/images/'.$viewModel->firstImage->path)}});"></a>
              <div class="text text-right" dir="ltr">
                  <p class="price"><span class="orig-price"><span>{{$facility->currency}} {{$viewModel->hall->offer_halls->min('price')}} تبدأ من </span></span></p>
                  <ul class="property_list">
                      {{-- <li><span>3</span><span class="flaticon-bed"></span></li> --}}
                      <li><span>{{$viewModel->hall->people_count}}</span><i class="fa-solid fa-people-group"></i></li>
                      <li><span>{{$viewModel->hall->area}}</span><span class="flaticon-floor-plan"></span></li>
                  </ul>
                  {{-- <form> --}}
                    
                    <h3><a href="{{route('front.facilities.details',['name'=>$viewModel->hall->name])}}" >{{$viewModel->hall->title}}</button></h3>
                  {{-- </form> --}}
                  <span class="location "><a style="color: #666666;">{{$facility->title}}</a></span>
          <span class="location" style="display: block;">{{$facility->directorate->governorate->name}} - {{$facility->directorate->name}}<i class="fa-solid fa-location-dot" style="margin-left: 5px;"></i></span>
                  <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                      <i class="fa-regular fa-bookmark"></i>
                  </a>
              </div>
          </div>
      </div>
         @endforeach
          
          
      </div>
      </div>
  </section>
  <section class="ftco-section ftco-degree-bg services-section img mx-md-5" style="background-image: url({{asset('assets/images/view-luxurious-hotel-interior-space\ \(1\).jpg')}});background-repeat: no-repeat;background-position: right;background-size: 50% 100%;">
      <div class="overlay"></div>
      <div class="container">
          <div class="row justify-content-start mb-5">
        <div class="col-md-6 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">كيفية حجز قاعة</span>
          <!-- <h2 class="mb-3">كيفية الحجز</h2> -->
        </div>
      </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="row">
                  
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>02</span></div>
                      <h3>اختر مدينتك</h3>
                      <p>ابدأ بتحديد المدينة التي ترغب في حجز قاعة فيها، سواء كانت للاجتماعات أو الفعاليات أو أي مناسبة أخرى.
                  </p>
                    </div>
                  </div>      
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>01</span></div>
                      <h3> أنشئ حسابك</h3>
                      <p>قم بالتسجيل في منصتنا عن طريق إنشاء حساب جديد ببضع خطوات بسيطة.
                      </p>
                    </div>
                  </div>      
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>04</span></div>
                      <h3>حدد التاريخ والوقت</h3>
                      <p>حدد التاريخ والوقت الذي ترغب فيه لاستخدام القاعة، وتأكد من توفرها في ذلك الوقت.
                  </p>
                    </div>
                  </div>      
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>03</span></div>
                      <h3>استعرض القاعات المتاحة</h3>
                      <p> تصفح قائمة القاعات المتاحة في المدينة التي اخترتها، واطلع على معلومات القاعات والصور والتفاصيل الأخرى المهمة</p>
                    </div>
                  </div>      
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <section class="ftco-section contact-section " id="contact">
    <div class="container">
      <div class="row d-flex mb-5 contact-info justify-content-center">
          <div class="col-md-8">
            <div class="row mb-5">
              <div class="col-md text-center border-height py-4">
                <div class="icon golden">
                  <i class="fa-solid fa-mobile-screen-button"></i>
                </div>
                <p><span>الهاتف</span> <a href="tel://1234567920">{{$facility->phone}}</a></p>
              </div>
              <div class="col-md text-center py-4">
                <div class="icon golden">
                  <span class="icon-envelope-o"></span>
                </div>
                <p><span>الايميل</span> <a href="mailto:info@yoursite.com">{{$facility->email}}</a></p>
              </div>
              </div>
        </div>
      </div>
      <div class="row block-9 justify-content-center mb-5">
        <div class="col-md-8 mb-md-5">
          <h2 class="text-center">إذا كان لديك أي أسئلة<br>
          من فضلك لا تتردد في ارسال رسالة  لنا</h2>
          <form dir="rtl" action="{{route('tenant.messages.store')}}" method="POST" class="bg-light p-5 contact-form" style="background-color: #fbfaf2 !important">
          @csrf
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="الاسم">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="الايميل">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="العنوان">
          </div>
          <div class="form-group">
            <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="الرسالة"></textarea>
          </div>
          <div class="form-group d-flex justify-content-start">
            <input type="hidden" name="id" value="{{$user->id}}">
            <input type="submit" value="ارسل رسالة" class="btn btn-primary py-3 px-5">
          </div>
          </form>
        
        </div>
        </div>
    </div>
  </section>
  <!-- <section class="ftco-section ftco-degree-bg services-section img mx-md-5" style="background-image: url(images/bg_2.jpg);">
      <div class="overlay"></div>
      <div class="container">
          <div class="row justify-content-start mb-5">
        <div class="col-md-6 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Work flow</span>
          <h2 class="mb-3">How it works</h2>
        </div>
      </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="row">
                      <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>01</span></div>
                      <h3>Evaluate Property</h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                  </div>      
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>02</span></div>
                      <h3>Meet Your Agent</h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                  </div>      
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>03</span></div>
                      <h3>Close the Deal</h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                  </div>      
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>04</span></div>
                      <h3>Have Your Property</h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                  </div>      
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>

  <section class="ftco-section ftco-no-pb">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
                  </div>
                  <div class="col-md-6 wrap-about py-md-5 ftco-animate">
            <div class="heading-section p-md-5">
              <h2 class="mb-4">We Put People First.</h2>

              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
            </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="ftco-counter img" id="section-counter">
      <div class="container">
          <div class="row">
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="305">0</strong>
              <span>Area <br>Population</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="1090">0</strong>
              <span>Total <br>Properties</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="209">0</strong>
              <span>Average <br>House</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text d-flex align-items-center">
              <strong class="number" data-number="67">0</strong>
              <span>Total <br>Branches</span>
            </div>
          </div>
        </div>
      </div>
      </div>
  </section>

  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Testimonial</span>
          <h2 class="mb-3">Happy Clients</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-agent ftco-no-pt">
      <div class="container">
          <div class="row justify-content-center pb-5">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Agents</span>
          <h2 class="mb-4">Our Agents</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-3 ftco-animate">
              <div class="agent">
                      <div class="img">
                          <img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
                      </div>
                      <div class="desc">
                          <h3><a href="properties.html">James Stallon</a></h3>
                              <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
                      </div>
                  </div>
          </div>
          <div class="col-md-3 ftco-animate">
              <div class="agent">
                      <div class="img">
                          <img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
                      </div>
                      <div class="desc">
                          <h3><a href="properties.html">James Stallon</a></h3>
                              <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
                      </div>
                  </div>
          </div>
          <div class="col-md-3 ftco-animate">
              <div class="agent">
                      <div class="img">
                          <img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
                      </div>
                      <div class="desc">
                          <h3><a href="properties.html">James Stallon</a></h3>
                              <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
                      </div>
                  </div>
          </div>
          <div class="col-md-3 ftco-animate">
              <div class="agent">
                      <div class="img">
                          <img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
                      </div>
                      <div class="desc">
                          <h3><a href="properties.html">James Stallon</a></h3>
                              <p class="h-info"><span class="position">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
                      </div>
                  </div>
          </div>
      </div>
      </div>
  </section>


  <section class="ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
          <h2>Recent Blog</h2>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <div class="text">
              <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              <div class="meta mb-3">
                <div><a href="#">July. 24, 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
                </a>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <div class="text">
              <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              <div class="meta mb-3">
                <div><a href="#">July. 24, 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
                </a>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <div class="text">
              <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              <div class="meta mb-3">
                <div><a href="#">July. 24, 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
                </a>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <div class="text">
              <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              <div class="meta mb-3">
                <div><a href="#">July. 24, 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_4.jpg');">
                </a>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>		 -->

  </body>
@endsection