@extends('layouts.admin')

@section('content')
<div class="container-fluid" dir="rtl">
    <!--  Row 1 -->
    <div class="mb-3">
      <a class="btn btn-outline-primary m-1" href="{{route('tenant.reservations.add')}}"><i class="bi bi-person-add"></i> إضافة حجز</a>
    </div>
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">الحجوزات</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">#</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">اسم العميل</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">القاعة</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">التاريخ</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">الوقت</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">حالة الحجز</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0"></h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class=""><h6 class="fw-semibold mb-0">1</h6></td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">روعة باعيسى</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">القاعة الملكية</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">2-2-2023</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">8:00 - 12:00</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                      <p class="mb-0 fw-normal">مأكد</p>
                    </td>
                    
                    <td>
                        <a href="{{route('tenant.reservations.view')}}" class="crud-icon"><i class="fa-regular fa-eye"></i></a>
                        {{-- <a href="{{route('tenant.reservations.edit')}}" class="crud-icon"><i class="fa-regular fa-pen-to-square"></i></a> --}}
                        <a href="{{route('tenant.reservations.delete')}}" class="crud-icon"><i class="fa-solid fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class=""><h6 class="fw-semibold mb-0">2</h6></td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">فاطمة بكران</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">القاعة الصغرى</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">2-2-2023</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">8:00 - 12:00</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                      <p class="mb-0 fw-normal">قيد المراجعة</p>
                    </td>
                    
                    <td>
                        <a href="{{route('tenant.reservations.view')}}" class="crud-icon"><i class="fa-regular fa-eye"></i></a>
                        {{-- <a href="{{route('tenant.reservations.edit')}}" class="crud-icon"><i class="fa-regular fa-pen-to-square"></i></a> --}}
                        <a href="{{route('tenant.reservations.delete')}}" class="crud-icon"><i class="fa-solid fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class=""><h6 class="fw-semibold mb-0">3</h6></td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">رغد العطاس</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">قاعة الاميرات</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">2-2-2023</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">8:00 - 12:00</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                      <p class="mb-0 fw-normal">ملغى</p>
                    </td>
                    
                    <td>
                        <a href="{{route('tenant.reservations.view')}}" class="crud-icon"><i class="fa-regular fa-eye"></i></a>
                        {{-- <a href="{{route('tenant.reservations.edit')}}" class="crud-icon"><i class="fa-regular fa-pen-to-square"></i></a> --}}
                        <a href="{{route('tenant.reservations.delete')}}" class="crud-icon"><i class="fa-solid fa-trash"></i></a>
                    </td>
                  </tr>
                                 
                </tbody>
              </table>
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