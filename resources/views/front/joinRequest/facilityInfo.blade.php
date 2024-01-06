<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free-6.4.2-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/css/signup.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/libs/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/styles.min.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">
    <title>طلب انضمام</title>
</head>
<body>
    <div id="container" class="container" dir="rtl">
        <div class="d-flex justify-content-center flex-column align-items-center">
            <div class="row">
                <div class="col">
                    <img src="{{asset('assets/images/Blue & Red Overlapping House Realtor Logo (1).png')}}" width="80">
                </div>
            </div>
            <div class="row">
                <div class="col my-2 ">
                    <h3>طلب انضمام</h3>
                </div>
            </div>
            <form action="{{route('facilityInfo')}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-3">
                  <label for="exampleInputEmail1" class="form-label">اسم المنشأة</label>
                  <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('title')
                      <div>{{$message}}</div>
                  @enderror
                </div>
                <div class="col mb-3">
                  <label for="exampleInputEmail1" class="form-label">اسم المنشأة(بالانجليزي)</label>
                  <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('name')
                      <div>{{$message}}</div>
                  @enderror
                </div>
                <div class="col mb-3">
                  <label for="exampleInputEmail1" class="form-label">ايميل المنشأة</label>
                  <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('email')
                      <div>{{$message}}</div>
                  @enderror
                </div>
                <div class="col mb-3">
                  <label for="exampleInputEmail1" class="form-label">رقم الهاتف</label>
                  <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('phone')
                      <div>{{$message}}</div>
                  @enderror
                </div>
                <div class="col mb-3">
                  <label for="exampleInputEmail1" class="form-label">رقم الهوية</label>
                  <input type="text" name="identity_NO" value="{{old('identity_NO')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('identity_NO')
                      <div>{{$message}}</div>
                  @enderror
                </div>
                {{-- <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">كلمة السر</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div> --}}
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">المحافظة</label>
                    <select name="Governorate" id="" class="form-control">
                      @foreach ($Governorates as $Governorate)
                      <option value="{{ $Governorate->id }}">{{ $Governorate->name }}</option>
                      @endforeach
                  </select>
                  @error('Governorate')
                      <div>{{$message}}</div>
                  @enderror
                </div>
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">المديرية</label>
                    <select name="Directorate" id="" class="form-control">
                      @foreach ($Directorates as $Directorate)
                      <option value="{{ $Directorate->id }}">{{ $Directorate->name }}</option>
                      @endforeach
                  </select>
                  @error('Directorate')
                      <div>{{$message}}</div>
                  @enderror
                </div>
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">صورة الرخصة</label>
                  <input type="file" name="license" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('license')
                      <div>{{$message}}</div>
                  @enderror
                </div>
                <div class="col mb-3">
                  <label for="exampleInputEmail1" class="form-label">العنوان</label>
                  <input type="text" class="form-control" name="address" value="{{old('id')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('address')
                    <div>{{$message}}</div>
                  @enderror
                </div>
                
                <div class="col mb-3">
                    <div class="col-md-10">
                        <div id="map" class="bg-white"></div>
                    </div>
                </div>
            </div>
            
            <div class="align-self-start">
                <button type="submit" class="btn btn-primary submit-btn">التالي</button>
                {{-- <button type="submit" class="btn btn-primary">رجوع</button> --}}
              </div>
            </form>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    </div>
</body>
</html>