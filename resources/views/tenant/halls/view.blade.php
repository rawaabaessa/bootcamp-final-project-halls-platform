@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">معلومات قاعة</h5>
          <div class="card">
            <div class="card-body">
              <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col">
                    <div class="row row-cols-1 row-cols-md-1">
                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">اسم القاعة</label>
                          <p>{{$hall->title}}</p>
                          {{-- <input name="title" value="{{$hall->title}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">عدد الاشخاص</label>
                          <p>{{$hall->people_count}}</p>
                          {{-- <input value="" name="people_count" type="text" class="form-control" id="exampleInputPassword1"> --}}
                        </div>
                      </div>
                      <div class="col">
                        <label for="exampleInputPassword1" class="form-label">مساحة القاعة</label>
                        <p>{{$hall->area}}</p>
                      </div>
                      <div class="col">
                        <label for="exampleInputPassword1" class="form-label">وصف القاعة</label>
                        <p>{{$hall->discription}}</p>
                        {{-- <input value="" name="discription" type="text" class="form-control" id="exampleInputPassword1"> --}}
                      </div>
                      
                      <div class="col">
                        <label for="exampleInputPassword1" class="form-label">فترات القاعة</label>
                        <div class="mb-3">
                          @foreach ($durations as $duration)
                            
                              <p>{{ $duration->duration->from }} - {{ $duration->duration->to }}</p>
                              <p class="d-block">{{$duration->price}} رس</p>
                           
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide">
                      <div class="carousel-indicators">
                        @foreach ($images as $key => $image)
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" {{$key == 0 ? 'class=active' : ''}} aria-label="Slide {{$key+1}}"></button>
                        @endforeach
                      </div>
                      <div class="carousel-inner">
                        @foreach ($images as $key => $image)
                          <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                            <img style="height: 500px" src="{{asset('storage/images/' . $image->path)}}" class="d-block w-100" alt="Slide {{$key+1}}">
                          </div>
                        @endforeach
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    <div>
                      {{-- @foreach ($images as $key => $image)
                        <p>Key: {{ $key }}, Value: {{ $image->path }}</p>
                      @endforeach --}}
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection