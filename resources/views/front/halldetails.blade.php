@extends('layouts.site')
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> --}}
@section('content')
<body>
      <div class="container">
        <div class="image-grid">
          @php
$count = 0;
@endphp

@foreach ($images as $key => $image)
    @php
    $count++;
    @endphp

    @if ($count === 1)
        <!-- تنسيق الصورة الأولى -->
        <img class="image-grid-col-2 image-grid-row-2" src="{{ asset('storage/images/'.$image->path) }}" alt="architecture">
    @elseif ($count <= 4)
        <!-- تنسيق الصور بعد الصورة الأولى -->
        <img src="{{ asset('storage/images/'.$image->path) }}" alt="architecture">
    @else
        @break
    @endif
@endforeach

<div data-toggle="modal" data-target="#exampleModal" class="more" style="cursor: pointer">
  <small>رؤية الكل</small>
</div>
          {{-- <img class="image-grid-col-2 image-grid-row-2" src="{{asset('assets/images/halls/IMG-20231226-WA0003.jpg')}}" alt="architecture">
          <img src="{{asset('storage/images/halls/IMG-20231226-WA0000.jpg')}}" alt="architecture">
          <img src="{{asset('assets/images/halls/IMG-20231226-WA0001.jpg')}}" alt="architecture">
          <img src="{{asset('assets/images/halls/IMG-20231226-WA0002.jpg')}}" alt="architecture">
          <div data-toggle="modal" data-target="#exampleModal" class="more" style="cursor: pointer">
              <small>رؤية الكل</small>
          </div> --}}
        </div>
      <h2 class="text-right hall-heading mb-3">{{$hall->title}}</h2>
      </div>
    <div class="container">
        <div class="row" dir="rtl">
          <div class="col mb-4">
            <div class="detail-div" style="justify-content: flex-start">
                <div class="detail-card" dir="rtl">
                    <i class="fa-solid fa-people-group"></i>
                    <span>{{$hall->people_count}} شخص</span>
                </div>
                <div class="detail-card text-right">
                  <i class="flaticon-floor-plan"></i>
                  <span>{{$hall->area}} متر</span>
                </div>
                <div class="detail-card text-right">
                    <i class="fa-solid fa-coins"></i>
                    <span>تبدا من {{$hall->offer_halls->min('price')}} رس</span>
                </div>
            </div>
            <div class="mt-4 text-justify">
              <p class="text-bold">وصف القاعة</p>
              <p>{{$hall->discription}}</p>
            </div>
          </div>
            <div class="col">
                <div class="price">
                  <form method="post" action="{{route('front.facilities.reservationCheck',['name',$hall->name])}}">
                    @csrf
                    <div class="row mb-2" dir="rtl">
                        <div class="col">
                          <span class="d-block mb-2">الفترة</span>
                          <select name="duration" id="" class="form-control">
                            @foreach ($hall->getHallTimes() as $id => $timeData)
                                <option value="{{$id}}" data-price="{{ $timeData['price'] }}">{{ $timeData['time'] }}</option>
                            @endforeach
                          </select>
                          @error('duration')
                          <small style="color: red">
                            {{ $message }}
                          </small>
                          @enderror
                        </div>
                        <div class="col">
                          <span class="d-block mb-2">التاريخ</span>
                          <input type="date" name="date" id="" class="form-control" placeholder="&#xf073;">
                          @error('date')
                          <small style="color: red">
                            {{ $message }}
                          </small>
                          @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end mb-2">
                      <div class="col-6">
                        <span>عدد المدعوين</span>
                        <input type="number" name="poeple" id="" class="form-control">
                        @error('poeple.count')
                          <small style="color: red">
                            {{ $message }}
                          </small>
                        @enderror
                      </div>
                      <div class="col-6">
                        <span>نوع المناسبة</span>
                        <select name="occasions" id="" class="form-control">
                          @foreach ($hall->facility->Occasions as $Occasion )
                            <option value="{{$Occasion->id}}">{{$Occasion->name}}</option>
                          @endforeach
                            {{-- <option value="">مؤتمر</option>
                            <option value="">حفل تخرج</option> --}}
                        </select>
                        @error('occasions')
                        <small style="color: red">
                          {{ $message }}
                        </small>
                        @enderror
                      </div>
                    </div>
                    <span class="text-bold mb-2">خدمات اختيارية</span>
                    @foreach ($hall->facility->services as $services)
                    @if ($services->is_free)
                      <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <input type="checkbox" name="service[]" value="{{ $services->id }}">
                            <span>{{$services->name}}</span>
                        </div>
                      </div>
                    @endif
                    @endforeach
                    
                    {{-- <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <input type="checkbox">
                            <span>حارسة</span>
                        </div>
                    </div> --}}
                    {{-- <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <input type="checkbox">
                            <span>فريق تنظيم</span>
                        </div>
                        <span class="services-price"></span>
                    </div> --}}
                    <span class="text-bold mb-2">خدمات اضافية</span>
                    @foreach ($hall->facility->services as $services)
                    @if (!$services->is_free)
                      <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <!-- <input type="checkbox"> -->
                            <input type="checkbox" name="extra[]" value="{{$services->id}}" data-price="{{$services->price}}">
                            <span>{{$services->name}}</span>
                            {{-- <span class="">القاعة</span> --}}
                        </div>
                        <span class="services-price">{{$services->price}}</span>
                    </div>
                    @endif
                    @endforeach
                    {{-- <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <input type="checkbox">
                            <span>صالة طعام</span>
                        </div>
                        <span class="services-price">500 رس</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <input type="checkbox">
                            <span>ضيافة(قهوة و شاي)</span>
                        </div>
                        <span class="services-price">500 رس</span>
                    </div> --}}
                    <div class="d-flex justify-content-between mb-2 border-top pt-2" dir="rtl">
                      <div class="">
                          <!-- <input type="checkbox"> -->
                          <span class="text-bold">الفاتورة</span>
                      </div>
                      {{-- <span class="services-price text-bold">500 رس</span> --}}
                  </div>
                  <div class="d-flex justify-content-between mb-2" dir="rtl">
                    <div class="">
                        <!-- <input type="checkbox"> -->
                        <span class="">القاعة</span>
                    </div>
                    <span class="services-price hall-price">0 رس</span>
                  </div>
                  <div class="service-invoice">

                  </div>
                    <div class="d-flex justify-content-between mb-2" dir="rtl">
                        <div class="">
                            <!-- <input type="checkbox"> -->
                            <span class="text-bold">الاجمالي</span>
                        </div>
                        <span class="services-price text-bold totla">0 رس</span>
                    </div>
                    @error('error')
                        <small style="color: red">
                            {{ $message }}
                        </small>
                    @enderror
                    <input type="hidden" name="id" value="{{$hall->id}}">
                      <button type="submit" class="btn btn-primary mt-2 w-100" >احجز الان</button>
                    </form>
                </div>
            </div>
      </div>
    </div>
</body>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-center">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">صور القاعة</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($images as $key => $image)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($images as $key => $image)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <img style="object-fit: cover" class="d-block w-100" src="{{ asset('storage/images/'.$image->path) }}" alt="Slide {{ $key + 1 }}">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>
<script>
  // Get the duration select element
  var durationSelect = document.querySelector('select[name="duration"]');

  // Get the invoice, hall price, and total price elements
  var invoiceElement = document.querySelector('.services-price.hall-price');
  var hallPriceElement = document.querySelector('.services-price.hall-price');
  var totalPriceElement = document.querySelector('.services-price.totla');

  // Get the additional services element in the invoice
  var additionalServicesElement = document.querySelector('.additional-services');

  // Initialize the initial prices
  var hallPrice = 0;
  var additionalServicesTotal = 0;
  var totalPrice = 0;

  // Function to update the invoice and total price
  function updateInvoiceAndTotalPrice() {
    // Get the selected duration option
    var selectedOption = durationSelect.options[durationSelect.selectedIndex];
    var durationPrice = selectedOption.getAttribute('data-price');

    // Update the hall price
    hallPrice = parseInt(durationPrice);

    // Calculate the total price
    totalPrice = hallPrice + additionalServicesTotal;

    // Update the invoice, hall price, and total price elements
    invoiceElement.textContent = hallPrice + ' رس';
    hallPriceElement.textContent = hallPrice + ' رس';
    totalPriceElement.textContent = totalPrice + ' رس';

    // Clear the additional services in the invoice
    additionalServicesElement.innerHTML = '';

    // Get the selected additional services
    var selectedServices = Array.from(additionalServices).filter(function (checkbox) {
      return checkbox.checked;
    });

    // Add the selected additional services to the invoice
    selectedServices.forEach(function (service) {
      var serviceName = service.getAttribute('data-name');
      var servicePrice = service.getAttribute('data-price');
      var serviceRow = document.createElement('div');
      serviceRow.classList.add('d-flex', 'justify-content-between', 'mb-2');
      var span = document.createElement('span');
      span.classList.add('services-price');
      span.textContent = serviceName + ': ' + servicePrice + ' رس';
      serviceRow.appendChild(span);
      additionalServicesElement.appendChild(serviceRow);
    });
  }

  // Event listener for duration select change
  durationSelect.addEventListener('change', function () {
    // Update the invoice and total price
    updateInvoiceAndTotalPrice();
  });

  // Event listener for additional services checkboxes
  var additionalServices = document.querySelectorAll('input[name="extra[]"]');
  additionalServices.forEach(function (service) {
    service.addEventListener('change', function () {
      // Get the selected additional services and their prices
      var selectedServices = Array.from(additionalServices).filter(function (checkbox) {
        return checkbox.checked;
      });
      var selectedServicesPrices = selectedServices.map(function (service) {
        return parseInt(service.getAttribute('data-price'));
      });

      // Calculate the total price with additional services
      additionalServicesTotal = selectedServicesPrices.reduce(function (total, price) {
        return total + price;
      }, 0);
      totalPrice = hallPrice + additionalServicesTotal;

      // Update the total price
      totalPriceElement.textContent = totalPrice + ' رس';

      // Update the additional services in the invoice
      updateInvoiceAndTotalPrice();
    });
  });

  // Initial update of invoice and total price
  updateInvoiceAndTotalPrice();
</script>
@endsection

