<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('admin/assets/css/styles.min.css')}}" />
  <link rel="stylesheet" href="{{asset('admin/assets/css/dashboard.css')}}" />
  <link rel="stylesheet" href="{{asset('admin/assets/css/checkbox.css')}}" />
  @if (Route::currentRouteName() === 'tenant.content.service' || 
       Route::currentRouteName() === 'tenant.content.occasion' ||
       Route::currentRouteName() === 'tenant.content.duration')
  <link rel="stylesheet" href="{{asset('assets/css/css/inputtag.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/css/signup.css')}}">
  @endif
  <link rel="stylesheet" href="{{asset('node_modules/bootstrap-icons/font/bootstrap-icons.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  {{-- <link rel="stylesheet" href="{{asset('assets/vendor/')}}.css"> --}}
  <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free-6.4.2-web/css/all.css')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">
<style>
  * {
    font-family: 'Tajawal', sans-serif;
  }
</style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-end">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{asset('admin/assets/images/logos/Blue_&_Red_Overlapping_House_Realtor_Logo_(3)[1].png')}}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar text-right" data-simplebar="">
            <div class="text-right" style="display: flex;justify-content:end">
                <h3>المنصة</h3>
            </div>
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu text-right">الرئيسية</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link @if (Route::currentRouteName() === 'users.create' || Route::currentRouteName() === 'users.edit' || Route::currentRouteName() === 'users.delete' || Route::currentRouteName() === 'users.view') active @endif" href="{{route('users')}}" aria-expanded="false">
                <span class="hide-menu">الرئيسية</span>
                <span>
                  <i class="bi bi-people"></i>
                </span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu text-right">العناوين</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link @if (Route::currentRouteName() === 'users.create' || Route::currentRouteName() === 'users.edit' || Route::currentRouteName() === 'users.delete' || Route::currentRouteName() === 'users.view') active @endif" href="{{route('city.index')}}" aria-expanded="false">
                <span class="hide-menu">العناوين</span>
                <span>
                  <i class="bi bi-people"></i>
                </span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu text-right">الحسابات</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link @if (Route::currentRouteName() === 'users.create' || Route::currentRouteName() === 'users.edit' || Route::currentRouteName() === 'users.delete' || Route::currentRouteName() === 'users.view') active @endif" href="{{route('users')}}" aria-expanded="false">
                <span class="hide-menu">المستخدمين</span>
                <span>
                  <i class="bi bi-people"></i>
                </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link @if (Route::currentRouteName() === 'roles.create' || Route::currentRouteName() === 'roles.edit' || Route::currentRouteName() === 'roles.delete' || Route::currentRouteName() === 'roles.view') active @endif" href="{{route('roles')}}" aria-expanded="false">
                <span class="hide-menu">الادوار</span>
                <span>
                  <i class="fa-solid fa-user-shield"></i>
                </span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">المنشأت</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link @if (Route::currentRouteName() === 'halls.view' || Route::currentRouteName() === 'halls.block') active @endif" href="{{route('halls.index')}}" aria-expanded="false">
                <span class="hide-menu">المنشأت</span>
                <span>
                  <i class="bi bi-bank"></i>
                </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link @if (Route::currentRouteName() === 'halls.view' || Route::currentRouteName() === 'halls.block') active @endif" href="{{route('requests.index')}}" aria-expanded="false">
                <span class="hide-menu">طلبات الانضمام</span>
                <span>
                  <i class="bi bi-bank"></i>
                </span>
              </a>
            </li>
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">الرسائل</span>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link @if (Route::currentRouteName() === 'messages.view' || Route::currentRouteName() === 'messages.delete') active @endif" href="{{route('messages.index')}}" aria-expanded="false">
                <span class="hide-menu">الرسائل</span>
                <span>
                  <i class="bi bi-envelope-paper"></i>
                </span>
              </a>
            </li>
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">المحتوى</span>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link 
              @if (Route::currentRouteName() === 'content.banner' || 
                    Route::currentRouteName() === 'content.logo' ||
                    Route::currentRouteName() === 'content.description' ||
                    Route::currentRouteName() === 'content.about' ||
                    Route::currentRouteName() === 'content.services' ||
                    Route::currentRouteName() === 'content.howregister' ||
                    Route::currentRouteName() === 'content.contact' ||
                    Route::currentRouteName() === 'content.socialmedia'
                  ) active @endif" href="{{route('content.index')}}" aria-expanded="false">
                <span class="hide-menu">المحتوى</span>
                <span>
                  <i class="bi bi-body-text"></i>
                </span>
              </a>
            </li>
            {{-- <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">الاسئلة و الاجوبة</span>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span class="hide-menu">الاسئلة و الاجوبة</span>
                <span>
                  <i class="bi bi-question-circle"></i>
                </span>
              </a>
            </li> --}}
          </ul>
          <div class="text-right" style="display: flex;justify-content:end">
            <h3>المنشأة</h3>
        </div>
      <ul id="sidebarnav">
        <li class="nav-small-cap ">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu text-right">الحسابات</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link @if (Route::currentRouteName() === 'tenant.users.create' || Route::currentRouteName() === 'tenant.users.view' || Route::currentRouteName() === 'tenant.users.edit' || Route::currentRouteName() === 'tenant.users.delete') active @endif" href="{{route('tenant.users')}}" aria-expanded="false">
            <span class="hide-menu">المستخدمين</span>
            <span>
              <i class="bi bi-people"></i>
            </span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link @if (Route::currentRouteName() === 'tenant.role.create' || Route::currentRouteName() === 'tenant.role.edit' || Route::currentRouteName() === 'tenant.role.delete' || Route::currentRouteName() === 'tenant.role.view') active @endif" href="{{route('tenant.role')}}" aria-expanded="false">
            <span class="hide-menu">الادوار</span>
            <span>
              <i class="fa-solid fa-user-shield"></i>
            </span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">القاعات</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link @if (Route::currentRouteName() === 'tenant.halls.view' || Route::currentRouteName() === 'tenant.halls.add' || Route::currentRouteName() === 'tenant.halls.edit' || Route::currentRouteName() === 'tenant.halls.delete') active @endif" href="{{route('tenant.halls.index')}}" aria-expanded="false">
            <span class="hide-menu">القاعات</span>
            <span>
              <i class="bi bi-bank"></i>
            </span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link @if (Route::currentRouteName() === 'tenant.reservations.add' || Route::currentRouteName() === 'tenant.halls.edit' || Route::currentRouteName() === 'tenant.reservations.delete') active @endif" href="{{route('tenant.reservations.index')}}" aria-expanded="false">
            <span class="hide-menu">الحجوزات</span>
            <span>
              <i class="fa-regular fa-calendar-days"></i>
            </span>
          </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">الرسائل</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link @if (Route::currentRouteName() === 'tenant.messages.view' || Route::currentRouteName() === 'tenant.messages.delete') active @endif" href="{{route('tenant.messages.index')}}" aria-expanded="false">
            <span class="hide-menu">الرسائل</span>
            <span>
              <i class="bi bi-envelope-paper"></i>
            </span>
          </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">المحتوى</span>
          </li>
        <li class="sidebar-item">
          <a class="sidebar-link 
              @if (
                  Route::currentRouteName() === 'tenant.content.logo' ||
                  Route::currentRouteName() === 'tenant.content.about' ||
                  Route::currentRouteName() === 'tenant.content.howregister' ||
                  Route::currentRouteName() === 'tenant.content.contact' ||
                  Route::currentRouteName() === 'tenant.content.socialmedia' ||
                  Route::currentRouteName() === 'tenant.content.duration' ||
                  Route::currentRouteName() === 'tenant.content.service' ||
                  Route::currentRouteName() === 'tenant.content.occasion'
                  ) active @endif" href="{{route('tenant.content.index')}}" aria-expanded="false">
            <span class="hide-menu">المحتوى</span>
            <span>
              <i class="bi bi-body-text"></i>
            </span>
          </a>
        </li>
      </ul>
      <div class="text-right" style="display: flex;justify-content:end">

        <h3>المستخدم</h3>
    </div>
  <ul id="sidebarnav">
    <li class="nav-small-cap">
      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
      <span class="hide-menu text-right">الحجوزات</span>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="{{route('user.reservations.index')}}" aria-expanded="false">
        <span class="hide-menu">الحجوزات</span>
        <span>
          <i class="bi bi-people"></i>
        </span>
      </a>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="{{route('user.profile')}}" aria-expanded="false">
        <span class="hide-menu">الملف الشخصي</span>
        <span>
          <i class="bi bi-people"></i>
        </span>
      </a>
    </li>
  </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header" style="box-shadow: 0px 5px 21px -5px #CDD1E1;" dir="rtl">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav" dir="rtl">
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row me-auto align-items-center justify-content-start">
              <!-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a> -->
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{asset('admin/assets/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" dir="rtl" aria-labelledby="drop2">
                  <div class="message-body">
                    {{-- <a href="{{route('front.signup')}}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="bi bi-bank"></i>
                      <p class="mb-0 fs-3">تسجيل منشأة</p>
                    </a> --}}
                    <a href="{{route('user.profile')}}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">الملف الشخصي</p>
                    </a>
                    {{-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a> --}}
                    <form action="{{route('signout')}}" method="post">
                      @csrf
                      <button type="submit" class="btn btn-outline-primary mx-3 mt-2 d-block">تسجيل الخروج</button>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      @yield('content')
    </div>
  </div>
  <!-- popup add user -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" dir="rtl">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">اضافة مستخدم</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">الاسم</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">الايميل</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">كلمة السر</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">الدور</label>
            <!-- <input type="password" class="form-control" id="exampleFormControlInput1" > -->
            <select class="form-control">
              <option>admin</option>
              <option></option>
              <option></option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
          <button type="button" class="btn btn-primary">اضافة</button>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
  {{-- <script src="{{asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script> --}}
  <script src="{{asset('admin/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
  @if (Route::currentRouteName() === 'tenant.content.service' ||  
  Route::currentRouteName() === 'tenant.content.duration')
  <script src="{{asset('assets/js/inputtag.js')}}"></script>
  <script src="{{asset('assets/js/addfield.js')}}"></script>
  @endif
  @if (Route::currentRouteName() === 'tenant.content.occasion')
  <script src="{{asset('assets/js/inputtagOc.js')}}"></script>
  @endif
</body>

</html>