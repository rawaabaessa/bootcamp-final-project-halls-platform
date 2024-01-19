@extends('layouts.admin')
<link rel="stylesheet" href="{{asset('admin/assets/css/card.css')}}">

@section('content')
<div class="container-fluid" dir="rtl">
  <div class="mb-3">
    <a class="btn btn-outline-primary m-1" href="{{route('tenant.users')}}" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> إضافة فترة</a>
  </div>
    <div class="row">
      <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">الفترات</h5>
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
            <div class="card">
                <div class="card-body" style="padding: 20px">
                  <div class="row row-cols-1 row-cols-md-3 @if($durations->count() == 0) align-items-center justify-content-center @endif">
                    @if($durations->count() == 0)
                      <p class="mb-0 text-center">لايوجد فترات</p>
                    @else
                    @foreach ($durations as $duration)
                      <div class="col d-flex justify-content-between mb-2">
                        <p class="mb-0"><i class="fa-solid fa-check crud-icon"></i>{{$duration->from()}} - {{$duration->to()}}</p>
                        {{-- <a href="#" class="crud-icon"><i class="fa-solid fa-trash"></i></a> --}}
                      </div>
                    @endforeach
                    @endif
                  </div>
                </div>
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" dir="rtl">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">اضافة فترة</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('tenant.content.addduration')}}" method="post">
            @csrf
          <div class="mb-3"> 
            <div class="row row-cols-1 row-cols-md-2">
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">من</label>
                <input required type="time" name="from" class="form-control" id="exampleFormControlInput1" placeholder="الخدمة">
              </div>
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">الى</label>
                <input required type="time" name="to" class="form-control" id="exampleFormControlInput1" placeholder="الخدمة">
              </div>
            </div>
          </div>
        </div>
        <input type="hidden" class="form-control" name="id" value="{{$facility->id}}">
            <input type="hidden" class="form-control" name="name" value="{{$facility->name}}">
        <div class="modal-footer justify-content-start">
          <button type="submit" class="btn btn-primary">اضافة</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">رجوع</button>
        </div>
      </div>
    </form>
    </div>
  </div>
@endsection