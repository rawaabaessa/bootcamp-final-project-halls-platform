<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free-6.4.2-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/css/login.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>signup</title>
</head>
<body>
    <div class="container" id="container" style="min-height: 600px;">
        
        <div class="form-container sign-in">
            <form>
                <h1>التسجيل</h1>
                <!-- <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span> -->
                <input dir="rtl" type="text" placeholder="اسم القاعة">
                <input dir="rtl" type="text" placeholder="هاتف">
                <input dir="rtl" type="text" placeholder="جواز المسؤول">
                <!-- <input dir="rtl" type="text" placeholder="وصف القاعة"> -->
                <input dir="rtl" type="file" placeholder="الرخصة">
                <input dir="rtl" type="text" placeholder="تحديد الموقع">
                <input dir="rtl" type="text" placeholder="الموقع">
                <!-- <input type="password" placeholder="Password"> -->
                <!-- <a href="#">Forget Your Password?</a> -->
                <button>تقديم</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>! مرحبا</h1>
                    <p>قم بادخال المعلومات الرئيسية للقاعة الخاصة بك</p>
                    <!-- <button class="hidden" id="register">Sign Up</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="js/login.js"></script> -->
</body>
</html>