@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('admin/assets/css/card.css')}}">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4 card-wrap">
              @foreach ($facilities as $facility)
              <div class="profile-card js-profile-cards" dir="rtl">
                <div class="profile-card__img">
                  <img src="{{asset('storage/logo/'.$facility->logo)}}" alt="profile card">
                </div>
                <div class="profile-card__cnt js-profile-cnt">
                  <div class="profile-card__name">{{$facility->title}}</div>
                  {{-- <div class="profile-card__txt">Front-end Developer from <strong>Mesopotamia</strong></div> --}}
                  
                  <span class="profile-card-loc__txt status" style="font-weight: bold">
                    عضو
                </span>
                <div class="profile-card-loc status location">
                    <span class="profile-card-loc__icon">
                      <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <span class="profile-card-loc__txt">
                      {{$facility->directorate->governorate->name}} - {{$facility->directorate->name}}
                    </span>
                  </div>
                <div class="profile-card-loc">
                    <a href="{{route('halls.view')}}" class="profile-card-loc__icon bord">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    {{-- <a href="{{route('halls.block')}}" class="profile-card-loc__icon bord">
                        <i class="fa-solid fa-ban"></i>
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

