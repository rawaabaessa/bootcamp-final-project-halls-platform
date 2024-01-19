<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free-6.4.2-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/css/login.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet"> --}}
    <!-- <link rel="stylesheet" href=""> -->
    <title>login</title>
</head>
<body> 
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="" method="post">
                @csrf
                <h1 class="mb-10">انشاء حساب</h1>
                <input type="text" placeholder="الاسم الكامل" name="name" dir="rtl" id="">
                @error('name')
                    <small>{{$message}}</small>
                @enderror
                <input type="email" placeholder="البريد الالكتروني" name="email" dir="rtl">
                @error('email')
                    <small>{{$message}}</small>
                @enderror
                <input type="text" placeholder="رقم الهاتف" dir="rtl">
                <div class="" style="display: flex;gap:4px">
                    <input type="password" placeholder="كلمة السر" dir="rtl" name="password">
                    <input type="password" placeholder="تاكيد كلمة السر" dir="rtl" name="password_confirmation">
                </div>
                @error('password')
                    <small>{{$message}}</small>
                @enderror
                <div class="radio-group">
                    <input type="radio" name="role" value="customer" id="role1">
                    <label for="role1" class="radio-label label1">مالك المنشئة <div class="done d-none"><i class="fa-solid fa-check"></i></div></label>
                    <input type="radio" name="role" value="admin" id="role2">
                    <label for="role2" class="radio-label label2">مستخدم <div class="done d-none"><i class="fa-solid fa-check"></i></div></label>
                </div>
                @error('role')
                    <small>{{$message}}</small>
                @enderror
                <button>تسجيل</button>
                <p>لديك حساب بالفعل ؟ <a href="#" class="forget">تسجيل الدخول</a></p>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="{{route('signin')}}" method="post">
                @csrf
                <h1 class="mb-10">تسجيل الدخول</h1>
                <input type="email" name="email" placeholder="البريد الالكتروني" dir="rtl">
                @error('email')
                    <small style="color:red;align-self:end">{{$message}}</small>
                @enderror
                <input type="password" name="password" placeholder="كلمة السر" dir="rtl">
                @error('password')
                    <small style="color:red;align-self:end">{{$message}}</small>
                @enderror
                {{-- <div class="forget-remmeber">
                    <div class="remmeber">
                        <input type="checkbox" name="remmeber" id="">
                        <label for="remmeber">تذكرني</label>
                    </div>
                    <a href="#" class="forget">هل نسيت كلمة السر ؟</a>
                </div> --}}
                <button type="submit">تسجيل الدخول</button>
                <p class="d-none">ليس لديك حساب ؟ <a href="{{route('signup.view')}}" class="forget">تسجيل</a></p>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>! مرحبا بعودتك</h1>
                    <p>ادخل معلوماتك الشخصية لاستخدام خصائص الموقع</p>
                    <button class="hidden" id="login">تسجيل الدخول</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>! مرحبا </h1>
                    <p>قم تسجيل معلوماتك الشخصية لاستخدام خصائص الموقع</p>
                    <a class="click" id="register" style="border:1px solid white" href="{{route('signup.view')}}">التسجيل</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/vendor/jquery-3.7.1.min.js')}}"></script>
    {{-- <script src="{{asset('assets/js/login.js')}}"></script> --}}
</body>
</html>