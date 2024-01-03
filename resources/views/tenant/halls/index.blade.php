@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('admin/assets/css/card.css')}}">
<div class="container-fluid" dir="rtl">
  <div class="mb-3">
    <a type="button" class="btn btn-outline-primary m-1" href="{{route('tenant.halls.add')}}"><i class="bi bi-bank"></i> إضافة قاعة</a>
  </div>
    <div class="row">
        <div class="col-lg d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4 card-wrap">
                <div class="profile-card js-profile-cards" dir="rtl">
                    <div class="profile-card__img">
                      <img src="{{asset('assets/images/tenant-logo.png')}}" alt="profile card">
                    </div>
                    <div class="profile-card__cnt js-profile-cnt">
                      <div class="profile-card__name">القاعة الملكية</div>
                    <div class="profile-card-loc">
                        <a href="{{route('tenant.halls.view')}}" class="profile-card-loc__icon bord">
                          <i class="fa-regular fa-eye"></i>
                        </a>
                        <a href="{{route('tenant.halls.edit')}}" class="profile-card-loc__icon bord">
                          <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <a href="{{route('tenant.halls.delete')}}" class="profile-card-loc__icon bord">
                          <i class="fa-solid fa-trash"></i>
                      </a>
                      </div>
                  </div>
                </div>
                <div class="profile-card js-profile-cards" dir="rtl">
                  <div class="profile-card__img">
                    <img src="{{asset('assets/images/tenant-logo.png')}}" alt="profile card">
                  </div>
                  <div class="profile-card__cnt js-profile-cnt">
                    <div class="profile-card__name">القاعة الملكية</div>
                  <div class="profile-card-loc">
                      <a href="{{route('tenant.halls.view')}}" class="profile-card-loc__icon bord">
                        <i class="fa-regular fa-eye"></i>
                      </a>
                      <a href="{{route('tenant.halls.edit')}}" class="profile-card-loc__icon bord">
                        <i class="fa-regular fa-pen-to-square"></i>
                      </a>
                      <a href="{{route('tenant.halls.delete')}}" class="profile-card-loc__icon bord">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                    </div>
                </div>
              </div>
              <div class="profile-card js-profile-cards" dir="rtl">
                <div class="profile-card__img">
                  <img src="{{asset('assets/images/tenant-logo.png')}}" alt="profile card">
                </div>
                <div class="profile-card__cnt js-profile-cnt">
                  <div class="profile-card__name">القاعة الملكية</div>
                <div class="profile-card-loc">
                    <a href="{{route('tenant.halls.view')}}" class="profile-card-loc__icon bord">
                      <i class="fa-regular fa-eye"></i>
                    </a>
                    <a href="{{route('tenant.halls.edit')}}" class="profile-card-loc__icon bord">
                      <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <a href="{{route('tenant.halls.delete')}}" class="profile-card-loc__icon bord">
                      <i class="fa-solid fa-trash"></i>
                  </a>
                  </div>
              </div>
            </div>
              
          </div>
            </div>
          </div>
        </div>
</div>
@endsection

