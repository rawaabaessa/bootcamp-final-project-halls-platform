@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{asset('admin/assets/css/pagination.css')}}">
<div class="container-fluid" dir="rtl">
    <!--  Row 1 -->
    {{-- <div class="mb-3">
      <a type="button" class="btn btn-outline-primary m-1" href="{{route('roles.create')}}"><i class="bi bi-person-add"></i> إضافة دور</a>
    </div> --}}
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">طلبات الانضمام</h5>
            <div class="table-responsive">
              @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
              @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              @endif
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">#</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">اسم المنشئة</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">الايميل</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">حالة الطلب</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $counter = 1;
                  @endphp
                  @foreach ($requests as $request)
                  <tr>
                    <td class=""><h6 class="fw-semibold mb-0">{{$counter}}</h6></td>
                    <td class="">
                      <p class="mb-0 fw-normal">{{$request->title}}</p>
                    </td>
                    <td class="">
                      <p class="mb-0 fw-normal">{{$request->email}}</p>
                    </td>
                    @if ($request->state == 'step1')
                    <td class="">
                      <p class="mb-0 fw-normal">جديد</p>
                    </td>
                    @elseif ($request->state == 'complete')
                    <td class="">
                      <p class="mb-0 fw-normal">مكتمل</p>
                    </td>
                    @elseif ($request->state == 'approved')
                    <td class="">
                      <p class="mb-0 fw-normal">تمت الموافقة</p>
                    </td>
                    @elseif ($request->state == 'reject')
                    <td class="">
                      <p class="mb-0 fw-normal">تم الرفض</p>
                    </td>
                    @endif
                    <td>
                        <a href="{{route('requests.view',['name'=>$request->name])}}" class="crud-icon"><i class="fa-regular fa-eye"></i></a>
                        {{-- <a href="{{route('roles.edit')}}" class="crud-icon"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="{{route('roles.delete')}}" class="crud-icon"><i class="fa-solid fa-trash"></i></a> --}}
                    </td>
                  </tr>  
                  @php
                    $counter++;
                  @endphp
                  @endforeach
                  
                </tbody>
              </table>
              @include('common.pagination', ['paginator' => $requests])
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