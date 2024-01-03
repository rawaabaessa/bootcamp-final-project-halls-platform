@extends('layouts.admin')

@section('content')
<div class="container-fluid" dir="rtl">
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">إدارة المحتوى</h5>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="row">
                        <div class="col fw-semibold">
                             الشعار 
                        </div>
                        <div class="col text-start">
                            <a href="{{route('content.logo')}}"><i class="fa-regular fa-pen-to-square crud-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="row">
                        <div class="col fw-semibold">
                            صورة البنر
                        </div>
                        <div class="col text-start">
                            <a href="{{route('content.banner')}}"><i class="fa-regular fa-pen-to-square crud-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="row">
                        <div class="col fw-semibold">
                             الوصف
                        </div>
                        <div class="col text-start">
                            <a href="{{route('content.description')}}"><i class="fa-regular fa-pen-to-square crud-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="row">
                        <div class="col fw-semibold">
                            من نحن 
                        </div>
                        <div class="col text-start">
                            <a href="{{route('content.about')}}"><i class="fa-regular fa-pen-to-square crud-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="row">
                        <div class="col fw-semibold">
                            الخدمات 
                        </div>
                        <div class="col text-start">
                            <a href="{{route('content.services')}}"><i class="fa-regular fa-pen-to-square crud-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="row">
                        <div class="col fw-semibold">
                            القاعات الاكثر شيوعا  
                        </div>
                        <div class="col text-start">
                            <a href="#"><i class="fa-regular fa-pen-to-square crud-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="row">
                        <div class="col fw-semibold">
                             كيفية تسجيل منشئة 
                        </div>
                        <div class="col text-start">
                            <a href="{{route('content.howregister')}}"><i class="fa-regular fa-pen-to-square crud-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="row">
                        <div class="col fw-semibold">
                              تواصل معنا
                        </div>
                        <div class="col text-start">
                            <a href="{{route('content.contact')}}"><i class="fa-regular fa-pen-to-square crud-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 20px">
                    <div class="row">
                        <div class="col fw-semibold">
                            حسابات التواصل الاجتماعي 
                        </div>
                        <div class="col text-start">
                            <a href="{{route('content.socialmedia')}}"><i class="fa-regular fa-pen-to-square crud-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    {{-- <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
    </div> --}}
  </div>
@endsection