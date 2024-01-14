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
<body class="card-center">
    <div>
        <div id="container" class="container" dir="rtl">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <div class="row align-self-start w-100">
                   <div class="col d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/images/Blue & Red Overlapping House Realtor Logo (1).png')}}" width="80" alt="" srcset="">
                   </div>
                </div>
                <div class="row align-self-start w-100">
                    <div class="col d-flex align-items-center justify-content-center text-center my-3 fs-16">
                        طلبك قيد المراجعة 
                    </div>
                 </div>
                <div class="row align-self-start w-100">
                    <div class="col d-flex align-items-center justify-content-center text-center">
                        <a type="submit" class="return-home" href="{{route('front.home')}}">الرجوع للصفحة الرئيسية</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>