@extends('layouts.admin')

@section('content')
@php
    $counter = 1;
@endphp
<div class="container-fluid" dir="rtl">
    <!--  Row 1 -->
    {{-- <div class="mb-3">
      <a class="btn btn-outline-primary m-1" href="{{route('users.create')}}"><i class="bi bi-person-add"></i> إضافة مستخدم</a>
    </div> --}}
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">رسائل المستخدمين</h5>
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
            <div class="table-responsive">
              
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">#</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">الايميل</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">العنوان</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0"></h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @if ($Messages->count() == 0)
                    <tr>
                      <td colspan="4"><p style="text-align: center">لايوجد رسايل</p></td>
                    </tr>
                  @endif
                  @foreach ($Messages as $Message)
                  <tr>
                    <td class=""><h6 class="fw-semibold mb-0">{{$counter}}</h6></td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">{{$Message->email}}</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                      <p class="mb-0 fw-normal">{{$Message->subject}}</p>
                    </td>
                    <td>
                        <a href="{{route('tenant.messages.view',['id' => $Message->id ])}}" class="crud-icon"><i class="fa-regular fa-eye"></i></a>
                        {{-- <a href="{{route('messages.edit')}}" class="crud-icon"><i class="fa-regular fa-pen-to-square"></i></a> --}}
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal_{{ $Message->id }}" class="crud-icon"><i class="fa-solid fa-trash"></i></a>
                    </td>
                  </tr> 
                  <!-- Replace the static modal ID "exampleModal" with a dynamic ID using the message ID -->
                  <div dir="rtl" class="modal fade" id="exampleModal_{{ $Message->id }}" tabindex="-1" aria-labelledby="exampleModalLabel_{{ $Message->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel_{{ $Message->id }}">حذف رسالة</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- Use the message ID to display relevant message content -->
                          <p>هل انت متاكد ؟</p>
                        </div>
                        <div class="modal-footer justify-content-start">
                          <form method="post" action="{{route('tenant.messages.destroy')}}">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{$Message->id}}">
                            <button type="submit" class="btn btn-primary">حذف</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">اغلاق</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  @php
                      $counter++;
                  @endphp
                  @endforeach
                </tbody>
              </table>
              {{-- @include('common.pagination', ['paginator' => $Messages]) --}}
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