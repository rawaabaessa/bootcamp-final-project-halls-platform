@extends('layouts.admin')
@section('content')
<div class="container-fluid" dir="rtl">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">تعديل معلومات قاعة</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{route('tenant.hall.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row row-cols-1 row-cols-md-2">
                  <div class="col">
                    <div class="row row-cols-1 row-cols-md">
                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">اسم القاعة</label>
                          <input name="title" value="{{$hall->title}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          @error('title')
                            <small style="color: red">
                                {{ $message }}
                            </small>
                          @enderror
                          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                      </div>
                      {{-- <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">اسم القاعة (بالانجليزي)</label>
                          <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          @error('name')
                            <small style="color: red">
                                {{ $message }}
                            </small>
                          @enderror
                          
                        </div>
                      </div> --}}
                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">عدد الاشخاص</label>
                          <input value="{{$hall->people_count}}" name="people_count" type="text" class="form-control" id="exampleInputPassword1">
                          @error('people_count')
                            <small style="color: red">
                                {{ $message }}
                            </small>
                          @enderror
                        </div>
                      </div>
                      {{-- <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">عدد الاشخاص (بدون الطاولات)</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                      </div> --}}
                      {{-- <div class="col">
                        <label for="exampleInputPassword1" class="form-label">سعر القاعة</label>
                        <div class="input-group mb-3" dir="ltr">
                          <span class="input-group-text price-sr">رس/ س</span>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                          
                        </div>
                      </div> --}}
                      <div class="col">
                        <label for="exampleInputPassword1" class="form-label">مساحة القاعة</label>
                        <div class="input-group mb-3" dir="ltr">
                          <span class="input-group-text price-sr">متر</span>
                          <input value="{{$hall->area}}" name="area" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                        @error('area')
                            <small style="color: red">
                                {{ $message }}
                            </small>
                        @enderror
                      </div>
                      <div class="col mb-3">
                        <label for="exampleInputPassword1" class="form-label">وصف القاعة</label>
                        <input value="{{$hall->discription}}" name="discription" type="text" class="form-control" id="exampleInputPassword1">
                          @error('discription')
                            <small style="color: red">
                                {{ $message }}
                            </small>
                          @enderror
                      </div>
                      
                      <div class="col">
                        <label for="exampleInputPassword1" class="form-label">فترات القاعة</label>
                        <div class="mb-3">
                          @foreach ($durations as $duration)
                            <div class="input-group mb-3" dir="ltr">
                              <input dir="rtl" type="text" class="form-control" value="{{$duration->price}}"  name="prices[{{ $duration->id }}]" placeholder="السعر" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                              <span class="input-group-text price-sr" id="basic-addon2">{{ $duration->duration->from }} - {{ $duration->duration->to }}</span>
                            </div>
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
                  </div>
                </div>
                <input type="hidden" name="id" value="{{$hall->id}}">
                <div class="mt-3 submit-buttons">
                  <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                  <a type="submit" class="btn btn-primary" href="{{route('tenant.hall')}}">رجوع</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection