@extends('layouts.admin')
<link rel="stylesheet" href="{{asset('admin/assets/css/pagination.css')}}">
@section('content')
@php
  $counter = 1;
@endphp
<div class="container-fluid" dir="rtl">
    <!--  Row 1 -->
    {{-- <div class="mb-3">
      <a class="btn btn-outline-primary m-1" href="{{route('tenant.reservations.add')}}"><i class="bi bi-person-add"></i> إضافة حجز</a>
    </div> --}}
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">الحجوزات</h5>
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
                      <h6 class="fw-semibold mb-0">المنشأة</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">القاعة</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">تاريخ الحجز</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">الفترة</h6>
                    </th>
                    {{-- <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">المبلغ</h6>
                    </th> --}}
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">حالة الحجز</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0"></h6>
                  </th>
                  </tr>
                </thead>
                <tbody>
                  @if ($reservations->count() == 0)
                    <tr>
                      <td colspan="7"><p style="text-align: center">لايوجد حجوزات</p></td>
                    </tr>
                  @endif
                  @foreach ($reservations as $reservation)
                  <tr>
                    <td class=""><h6 class="fw-semibold mb-0">{{$counter}}</h6></td>
                    <td class="">
                      <h6 class="fw-semibold mb-1">{{$reservation->hall->facility->title}}</h6>
                      {{-- <span class="fw-normal">Web Designer</span>                           --}}
                  </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">{{$reservation->hall->title}}</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">{{$reservation->date}}</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    <td class="">
                        <h6 class="fw-semibold mb-1">{{$reservation->offerHall->duration->from()}} - {{$reservation->offerHall->duration->to()}}</h6>
                        {{-- <span class="fw-normal">Web Designer</span>                           --}}
                    </td>
                    {{-- <td class="">
                        <h6 class="fw-semibold mb-1">5000 رس</h6>
                    </td> --}}
                    <td class="">
                      <p class="mb-0 fw-normal">{{$reservation->state->title}}</p>
                    </td>
                    
                    <td>
                      @if ($reservation->state->name == 'unconfirmed')
                      
                      <a href="{{route('user.reservation.Detail',['id' => $reservation->id ])}}" class="crud-icon">تاكيد الحجز</a>
                      <span class="d-inlin-block">|</span>
                      {{-- <span class="d-inlin-block">|</span> --}}
                      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal_{{ $reservation->id }}" class="crud-icon">الغاء الحجز</a>                      @else
                      <a href="{{route('user.reservation.Detail',['id' => $reservation->id ])}}" class="crud-icon"><i class="fa-regular fa-eye"></i></a>
                      @endif
                    </td>
                  </tr>
                  <div dir="rtl" class="modal fade" id="exampleModal_{{ $reservation->id }}" tabindex="-1" aria-labelledby="exampleModalLabel_{{ $reservation->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel_{{ $reservation->id }}">الغاء حجز</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Use the reservation ID to display relevant message content -->
                                <p>هل انت متاكد ؟</p>
                            </div>
                            <div class="modal-footer justify-content-start">
                                <form method="post" action="{{route('user.reservation.Cancel')}}">
                                    @csrf
                                    {{-- @method('DELETE') --}}
                                    <input type="hidden" value="{{$reservation->id}}" name="id">
                                    <button type="submit" class="btn btn-primary">الغاء</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">رجوع</button>
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
              @include('common.pagination', ['paginator' => $reservations]) 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> --}}


@endsection