@extends('layouts.site')

@section('content')
<section class="ftco-section" style="margin-top: 70px">
    <div class="container">
    <div class="row @if(count($facilities) == 0) justify-content-center @endif">
        @if(count($facilities) == 0)
          <div>
            <p>لاتوجد نتائج</p>
          </div>
        @endif
        @foreach ($facilities as $facilitie)
        <div class="col-md-4">
            <div class="property-wrap ftco-animate">
                <a href="{{route('front.facilities.main',['name'=>$facilitie->name])}}" class="img" style="background-image: url({{asset('assets/images/work-1.jpg')}});"></a>
                <div class="text text-right">
                    {{-- <p class="price"><span class="old-price">600</span><span class="orig-price"><span>500 رس</span></span></p> --}}
                    <ul class="property_list">
                        {{-- <li><span>3</span><span class="flaticon-bed"></span></li> --}}
                        {{-- <li><span>300</span><i class="fa-solid fa-people-group"></i></li> --}}
                        {{-- <li><span>{{$facilitie->area}}</span><span class="flaticon-floor-plan"></span></li> --}}
                    </ul>
                    {{-- <form action="{{route('front.facilities.main',['name'=>$facilitie->name])}}" method="post"> --}}
                        {{-- @csrf --}}
                    <h3><a href="{{route('front.facilities.main',['name'=>$facilitie->name])}}">{{$facilitie->title}}</a></h3>
                    {{-- </form> --}}
                    {{-- <span class="location "><a style="color: #666666;">قاعة ريماس للمناسبات</a></span> --}}
            <span class="location" style="display: block;">{{$facilitie->directorate->governorate->name}} - {{$facilitie->directorate->name}}<i class="fa-solid fa-location-dot" style="margin-left: 5px;"></i></span>
                    <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                        <i class="fa-regular fa-bookmark"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    {{-- @include('common.pagination', ['paginator' => $facilities])  --}}
    {{-- <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div> --}}
    </div>
</section>
@endsection