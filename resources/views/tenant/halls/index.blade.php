@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('admin/assets/css/card.css')}}">
<div class="container-fluid" dir="rtl">
  <div class="mb-3">
    <a type="button" class="btn btn-outline-primary m-1" href="{{route('tenant.hall.add')}}"><i class="bi bi-bank"></i> إضافة قاعة</a>
  </div>
    <div class="row">
        <div class="col-lg d-flex align-items-stretch">
          <div class="card w-100">
            @if (session('success'))
            <div class="row">
              <div class="col m-2">
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              </div>
            </div>
            @endif
            <div class="card-body px-4 pt-0 card-wrap">
              @if (count($halls) == 0)
                <div class="d-flex align-items-center justify-content-center" style="padding-top: 28px">لا توجد قاعات</div>
              @endif
              @foreach ($halls as $hall)
              <div class="profile-card js-profile-cards" dir="rtl">
                <div class="profile-card__img">
                  <img src="{{asset('storage/logo/'.$hall->facility->logo)}}" alt="profile card">
                </div>
                <div class="profile-card__cnt js-profile-cnt">
                  <div class="profile-card__name">{{$hall->title}}</div>
                <div class="profile-card-loc">
                    <a href="{{route('tenant.hall.view',['name' => $hall->name])}}" class="profile-card-loc__icon bord">
                      <i class="fa-regular fa-eye"></i>
                    </a>
                    <a href="{{ route('tenant.hall.edit', ['name' => $hall->name]) }}" class="profile-card-loc__icon bord">                      <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    {{-- <a href="{{route('tenant.halls.delete')}}" class="profile-card-loc__icon bord">
                      <i class="fa-solid fa-trash"></i>
                  </a> --}}
                  </div>
              </div>
            </div>
              @endforeach
          </div>
            </div>
          </div>
        </div>
</div>
@endsection

