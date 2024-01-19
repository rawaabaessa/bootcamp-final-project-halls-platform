@extends('layouts.page')
@section('content')
<body>
    @php
          $user = Auth::user();
    @endphp
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	  <div class="container">
		<div class="collapse navbar-collapse" id="ftco-nav">
		  <ul class="navbar-nav ml-auto">
			@auth
				@if ($user->roles->contains('name', 'customer'))
				<li class="nav-item"><a href="{{route('user.reservation')}}" class="nav-link">لوحة التحكم</a></li>
				@elseif ($user->roles->contains('name', 'admin'))
				<li class="nav-item"><a href="{{route('tenant.hall')}}" class="nav-link">لوحة التحكم</a></li>
				@elseif ($user->roles->contains('name', 'super-admin'))
				<li class="nav-item"><a href="{{route('platform.facility')}}" class="nav-link">لوحة التحكم</a></li>
				@endif
			@else
			<li class="nav-item">
				<!-- <button type="button" class="login-btn nav-link">التسجيل</button> -->
				<li class="li-login"><a class="getstarted" href="{{route('signin')}}">دخول</a></li>
			  </li>
			@endauth
		  
			<!-- <li class="nav-item"><a href="agent.html" class="nav-link">Agent</a></li> -->
			<!-- <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li> -->
			<!-- <li class="nav-item"><a href="properties.html" class="nav-link">Properties</a></li> -->
			<!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
			{{-- <li class="nav-item"><a href="#contact" class="nav-link">تسجيل خروج</a></li> --}}
			<li class="nav-item"><a href="#contact" class="nav-link">تواصل معنا</a></li>
			<li class="nav-item"><a href="#halls" class="nav-link">القاعات</a></li>
			<li class="nav-item"><a href="#services" class="nav-link">خدماتنا</a></li>
			<li class="nav-item"><a href="#aboutus" class="nav-link">من نحن</a></li>
			<li class="nav-item"><a href="index.html" class="nav-link">الصفحة الرئيسية</a></li>
			<li class="nav-item">
			<!-- <button type="button" class="login-btn nav-link mr-2">تسجيل الدخول</button> -->
		  </li>
		  
		  </ul>
		</div>
	  <a class="navbar-brand" href="{{route('front.home')}}"><img src="{{asset('assets/images/Blue & Red Overlapping House Realtor Logo (1).png')}}" width="80" alt="" srcset=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="oi oi-menu"></span> القائمة
		</button>
	  </div>
	</nav>
  <!-- END nav -->
  
  <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{asset('assets/images/2150683405.jpg')}}');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text justify-content-center align-items-center">
		<div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
			<div class="text text-center">
			  <h1 class="mb-4">اكتشف مجموعة واسعة<br> من أجمل صالات المناسبات في المدينة</h1>
			  <!-- <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p> -->
			  <form action="{{route('front.facilities')}}" class="search-location mt-md-5" method="post">
				@csrf
					  <div class="row justify-content-center">
						  <div class="col-lg-10 align-items-end">
							  <div class="form-group">
								<div class="form-field" dir="rtl">
					<input type="text" name="search" list="datalistOptions" class="form-control" placeholder="ادخل المدينة" required>
					  {{-- <datalist id="datalistOptions">
						@foreach ($Directorates as $Directorate)
						<option value="{{$Directorate->name}}" name="{{$Directorate->id}}">
						@endforeach
					  </datalist> --}}

					  {{-- <select name="directorate" id="datalistOptions">
						@foreach ($options as $key => $value)
						  <option value="{{$key}}">{{$value}}</option>
						@endforeach
					  </select> --}}
							<button type="submit" class="search-hero"><span class="ion-ios-search"></span></button>
							</div>
						</div>
						  </div>
					  </div>
				  </form>
		  </div>
		</div>
	  </div>
	</div>
	<div class="mouse">
			  <a href="#" class="mouse-icon">
				  <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
			  </a>
		  </div>
  </div>


  <section class="ftco-section ftco-no-pb my-3" dir="rtl" id="aboutus">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('assets/images/view-luxurious-hotel-interior-space\ \(1\).jpg')}});">
			</div>
			<div class="col-md-6 wrap-about py-md-5 ftco-animate">
	  <div class="heading-section p-md-5">
		<h2 class="mb-4">نحن نجعل حجز القاعات اسهل</h2>

		<p>
		
نحن منصة قاعة نسعى لتيسير عملية حجز القاعات بطريقة سهلة ومريحة. نقدم منصة شاملة للقاعات للتسجيل فيها وعرض خدماتها بشكل مباشر للعملاء المحتملين. نفهم أهمية القاعات كمرافق حيوية للفعاليات والمناسبات المختلفة، ولذلك نسعى لتوفير تجربة مميزة وموثوقة للعملاء الذين يبحثون عن القاعة المثالية.

من خلال منصتنا، يمكن لأصحاب القاعات تسجيل ملفاتهم والترويج لخدماتهم بشكل شامل. لدينا مجموعة واسعة من القاعات التي تناسب مختلف الأحداث مثل الحفلات، والمؤتمرات والمناسبات الخاصة. نحرص على توفير معلومات مفصلة وصور جذابة للقاعات، بالإضافة إلى التقييمات والتعليقات من العملاء السابقين لمساعدة العملاء في اتخاذ قرار مستنير.

نحن نعتبر سهولة الحجز والتواصل بين العملاء وأصحاب القاعات أمرًا بالغ الأهمية. لذا، نوفر واجهة مستخدم سهلة الاستخدام وخيارات مرنة للحجز وتخصيص الخدمات المطلوبة. نهتم بتجربة العملاء ونسعى لتحقيق رضاهم التام.

انضم إلى منصتنا اليوم واحصل على فرصة لتسجيل قاعتك والوصول إلى شبكة واسعة من العملاء المحتملين. دعنا نساعدك في نجاح فعالياتك وتوفير القاعة المثالية لاحتياجات عملائك. انضم إلينا واستمتع بتجربة فريدة في تسهيل حجز القاعات.
	  </p>
	  </div>
			</div>
		</div>
	</div>
</section>
{{-- <section class="ftco-counter img" id="section-counter" dir="rtl">
  <div class="container">
	<div class="row">
	  <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
		<div class="block-18 py-4 mb-4">
		  <div class="text text-border d-flex align-items-center">
			<span>عدد <br> القاعات</span>
			<strong class="number" data-number="305">0</strong>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
		<div class="block-18 py-4 mb-4">
		  <div class="text text-border d-flex align-items-center">
			<span>عدد <br> الحجوزات</span>
			<strong class="number" data-number="1090">0</strong>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
		<div class="block-18 py-4 mb-4">
		  <div class="text text-border d-flex align-items-center">
			<span>عدد <br> المنشأت</span>
			<strong class="number" data-number="209">0</strong>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
		<div class="block-18 py-4 mb-4">
		  <div class="text d-flex align-items-center">
			<span>عدد <br>العملاء</span>
			<strong class="number" data-number="67">0</strong>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section> --}}

  <section class="ftco-section ftco-no-pb" id="services" dir="rtl">
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-md-12 heading-section text-center ftco-animate mb-5">
			<span class="subheading">خدماتنا</span>
		  <!-- <h2 class="mb-2">The smartest way to buy a home</h2> -->
		</div>
	  </div>
	  <div class="row d-flex">
		<div class="col-md-3 d-flex align-self-stretch ftco-animate">
		  <div class="media block-6 services d-block text-center">
			  <div class="icon d-flex justify-content-center align-items-center"><span class="bi bi-calendar-check"></span></div>
			<div class="media-body py-md-4">
			  <h3>حجز القاعات بسهولة</h3>
			  <p>قم بحجز القاعات للفعاليات والاجتماعات والتجمعات الاجتماعية بسهولة عبر منصة قاعة</p>
			</div>
		  </div>      
		</div>
		<div class="col-md-3 d-flex align-self-stretch ftco-animate">
		  <div class="media block-6 services d-block text-center">
			  <div class="icon d-flex justify-content-center align-items-center"><span class="bi bi-file-earmark-richtext"></span></div>
			<div class="media-body py-md-4">
			  <h3>معلومات شاملة</h3>
			  <p> احصل على معلومات شاملة ومفصلة عن القاعات المتاحة، بما في ذلك المساحة والتجهيزات والخدمات المتوفرة. </p>
			</div>
		  </div>      
		</div>
		<div class="col-md-3 d-flex align-self-stretch ftco-animate">
		  <div class="media block-6 services d-block text-center">
			  <div class="icon d-flex justify-content-center align-items-center"><span class="bi bi-chat-left-text"></span></div>
			<div class="media-body py-md-4">
			  <h3>دعم ممتاز</h3>
			  <p> يقدم فريق الدعم الخاص بنا الدعم والمساعدة على مدار الساعة. ستحصل على الدعم اللازم في حالة وجود أي استفسارات  </p>
			</div>
		  </div>      
		</div>
		<div class="col-md-3 d-flex align-self-stretch ftco-animate">
		  <div class="media block-6 services d-block text-center">
			  <div class="icon d-flex justify-content-center align-items-center"><span class="bi bi-list-stars"></span></div>
			<div class="media-body py-md-4">
			  <h3>تقييمات ومراجعات العملاء</h3>
			  <p>استعرض تقييمات ومراجعات العملاء السابقين للقاعات والفعاليات لمساعدتك في اتخاذ قرار مستنير</p>
			</div>
		  </div>      
		</div>
	  </div>
	</div>
  </section>

  <section class="ftco-section goto-here" id="halls">
	  <div class="container">
		  <div class="row justify-content-center">
		<div class="col-md-12 heading-section text-center ftco-animate mb-5">
			<span class="subheading">القاعات</span>
		  <!-- <h2 class="mb-2">Exclusive Offer For You</h2> -->
		</div>
	  </div>
	  <div class="row">
		@foreach ($viewModels as $viewModel)
		<div class="col-md-4">
			<div class="property-wrap ftco-animate">
				<a href="{{route('front.facilities.main',['name'=>$viewModel->facility->name])}}" class="img" style="background-image: url({{asset('storage/images/'.$viewModel->firstImage->path)}});"></a>
				<div class="text text-right">
					<p class="price"><span class="orig-price"><span>{{$viewModel->facility->currency}} {{$viewModel->facility->halls->first()->getMinimumOfferPrice()}} تبدأ من</span></span></p>
					{{-- <ul class="property_list"> --}}
						{{-- <li><span>3</span><span class="flaticon-bed"></span></li> --}}
						{{-- <li><span>300</span><i class="fa-solid fa-people-group"></i></li>
						<li><span>1.857 متر</span><span class="flaticon-floor-plan"></span></li>
					</ul> --}}
					<h3><a href="{{route('front.facilities.main',['name'=>$viewModel->facility->name])}}">{{$viewModel->facility->title}}</a></h3>
					{{-- <span class="location "><a href="#" style="color: #666666;">قاعة ريماس للمناسبات</a></span> --}}
			<span class="location" style="display: block;">{{$viewModel->facility->directorate->governorate->name}} - {{$viewModel->facility->directorate->name}}<i class="fa-solid fa-location-dot" style="margin-left: 5px;"></i></span>
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
			<span class="subheading">كيفية تسجيل منشئة</span>
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
					  <h3>اضف قاعاتك</h3>
					  <p>قم بتعريف قاعات منشأتك وتفاصيلها بشكل واضح وجذاب قم بتحميل صور عالية الجودة للقاعات ووصفها بشكل شامل
				  </p>
					</div>
				  </div>      
				</div>
			<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
				  <div class="media block-6 services services-2">
					<div class="media-body py-md-4 text-center">
						<div class="icon mb-3 d-flex align-items-center justify-content-center"><span>01</span></div>
					  <h3> أنشئ حسابك</h3>
					  <p>قم بتسجيل حسابك على منصتنا كصاحب منشأة بعد تقديم طلب التسجيل، سيتم مراجعته والموافقة عليه من قبل فريقنا. بمجرد الموافقة، ستحصل على وصول كامل إلى منصتنا
				  </p>
					</div>
				  </div>      
				</div>
			<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
				  <div class="media block-6 services services-2">
					<div class="media-body py-md-4 text-center">
						<div class="icon mb-3 d-flex align-items-center justify-content-center"><span>04</span></div>
					  <h3>أدر حجوزاتك</h3>
					  <p>توفر منصتنا نظاما يسهل عليك تنظيم الأحداث والحجوزات. يمكنك تحديد الأوقات المتاحة وتحديث التقويم بسهولة

				  </p>
					</div>
				  </div>      
				</div>
			<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
				  <div class="media block-6 services services-2">
					<div class="media-body py-md-4 text-center">
						<div class="icon mb-3 d-flex align-items-center justify-content-center"><span>03</span></div>
					  <h3>حدد الاوقات المتاحة</h3>
					  <p>قم بتحديد التواريخ الشاغرة والفترات الزمنية المتاحة للعملاء لحجز القاعات يمكنك أيضًا ضبط سياسات الحجز والإلغاء 
				  </p>
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
				  <p><span>الهاتف</span> <a href="tel://1234567920">739665833</a></p>
				</div>
				<div class="col-md text-center py-4">
					<div class="icon golden">
						<span class="icon-envelope-o"></span>
					</div>
				  <p><span>الايميل</span> <a href="mailto:info@yoursite.com">qaah@gmail.com</a></p>
				</div>
			  </div>
		</div>
	  </div>
	  <div class="row block-9 justify-content-center mb-5">
		<div class="col-md-8 mb-md-5">
			<h2 class="text-center">إذا كان لديك أي أسئلة<br>
			من فضلك لا تتردد في ارسال رسالة  لنا</h2>
		  <form dir="rtl" action="{{route('messages.store')}}" method="POST" class="bg-light p-5 contact-form" style="background-color: #fbfaf2 !important">
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
  {{-- <script>
	document.addEventListener('DOMContentLoaded', function() {
	  var searchBtn = document.querySelector('.search-hero');
	  searchBtn.addEventListener('click', function(e) {
		e.preventDefault(); // منع إرسال النموذج
  
		var selectedOption = document.querySelector('#directorate-input').value; // الحصول على القيمة المحددة
		var optionsList = document.querySelectorAll('#datalistOptions option');
		var selectedId = '';
  
		// البحث عن الهوية المقابلة للقيمة المحددة
		optionsList.forEach(function(option) {
		  if (option.value === selectedOption) {
			selectedId = option.getAttribute('name');
		  }
		});
  
		// إرسال البيانات المحددة إلى المسار باستخدام AJAX
		var xhr = new XMLHttpRequest();
		xhr.open('POST', '/facilities/' + selectedId, true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.onload = function() {
		  if (xhr.status === 200) {
			// التعامل مع الاستجابة من المسار
			// يمكنك توجيه المستخدم إلى صفحة جديدة أو تحديث الصفحة الحالية بالبيانات المسترجعة
		  } else {
			// التعامل مع الخطأ
		  }
		};
		xhr.onerror = function() {
		  // التعامل مع الخطأ
		};
		xhr.send();
	  });
	});
  </script> --}}
  </body>
@endsection
    