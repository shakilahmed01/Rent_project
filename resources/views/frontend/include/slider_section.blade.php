

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/slick-slider.css')}}">

<!--Slick CSS-->
<link
  rel="stylesheet"
  type="text/css"
  href="{{asset('Frontend/assets/css/slick-theme.css')}}"
/>

<script
  type="text/javascript"
  src="{{asset('Frontend/assets/js/slick.js')}}"
></script>

<div class="snippet-body">
<div class="items">
<?php
  use App\Models\Hotel;
  use App\Models\Room;
  use App\Models\Flat;
  use App\Models\Parking_Spot;
  use App\Models\Hostel;
  use App\Models\Office;
  use App\Models\Land;
  use App\Models\Community_Center;
  use App\Models\Shooting_Spot;
  use App\Models\Shop;
  use App\Models\Factory;
  use App\Models\Warehouse;
  use App\Models\Pond;
  use App\Models\Swimming_Pool;
  use App\Models\Bilboard;
  use App\Models\Rooftop;
  use App\Models\Restaurant;
  use App\Models\Exibution_Center;
  use App\Models\Play_ground;
  use App\Models\Ghat;
  use App\Models\Building;
  use App\Models\Picnic_Spot;
  $rooms=Room::all();
  $bilboards=Bilboard::all();
  $buildings=building::all();
  $communities=Community_Center::all();
  $exibutions=Exibution_Center::all();
  $factories=Factory::all();
  $flats=Flat::all();
  $ghats=Ghat::all();
  $hostels=Hostel::all();
  $hotels=Hotel::all();
  $lands=Land::all();
  $offices=Office::all();
  $parkings=Parking_Spot::all();
  $picnics=Picnic_Spot::all();
  $playgrounds=Play_ground::all();
  $ponds=Pond::all();
  $restaurants=Restaurant::all();
  $rooftops=Rooftop::all();
  $shootings=Shooting_Spot::all();
  $shops=Shop::all();
  $swimmingpools=Swimming_Pool::all();
  $warehouses=Warehouse::all(); ?>
@foreach($rooms as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/rooms')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->room_size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/room/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($bilboards as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/billboards')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>

    <a href="{{ url('/bilboard/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($parkings as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/garages')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/parking/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($communities as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/communities')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/community/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($exibutions as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/exhibutions')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/exibution/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($factories as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/factories')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/factory/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($flats as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/flats')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/flat/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($ghats as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/ghats')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/ghat/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($hostels as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/hostels')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/hostel/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($hotels as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/hotels')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/hotel/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($offices as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/offices')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/office/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($lands as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/lands')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/land/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($playgrounds as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/playgrounds')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/playground/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($ponds as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/ponds')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/pond/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($restaurants as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/restaurants')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/restaurant/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($rooftops as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/rooftops')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/rooftop/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($shootings as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/shootings')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/shooting/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($shops as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/shops')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/shop/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($swimmingpools as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/swimmingpools')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/swimmingpool/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($warehouses as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/warehouses')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/warehouse/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($picnics as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/picnics')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/picnic/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach

@foreach($buildings as $list)
 <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
  <img
    src="{{asset('public/uploads/buildings')}}/{{$list->photo}}"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body main-slider-body main-slider-body">
    <h5 class="card-title main-slider">{{$list->price}}BDT</h5>
    <p class="card-text main-slider">{{$list->title}}</p>
    <span class=" main-slider">
      <i class="fas fa-shower"></i>
      <i class="fas fa-wifi"></i>
      <i class="fas fa-smoking"></i>
    </span>
    <p class="mt-3 main-slider">
      <i class="fas fa-border-all"></i>
      <span>{{$list->size}}</span>
    </p>
    <!-- <button type="button" class="btn btn-custom-color2 check-detail mt-2">
      <a href="{{ url('/room/details/') }}/{{ $list->id }}" class="link-dark  ">Check Details</a>
    </button> -->
    <a href="{{ url('/building/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>

  </div>

</div>
@endforeach
    <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
      <img
        src="{{asset('Frontend/assets/img/1.The_Pinnacle_(Guangzhou,_China)_indexxrus.jfif')}}"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body main-slider-body main-slider-body">
        <h5 class="card-title main-slider">fdgdf</h5>
        <p class="card-text main-slider">The Pinnacle</p>
        <span class=" main-slider">
          <i class="fas fa-shower"></i>
          <i class="fas fa-wifi"></i>
          <i class="fas fa-smoking"></i>
        </span>
        <p class="mt-3 main-slider">
          <i class="fas fa-border-all"></i>
          <span>3600 sqft</span>
        </p>

          <a href="{{route('single_pg')}}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">test Details</a>

      </div>

    </div>

    <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
      <img
        src=" {{asset('Frontend/assets/img/2.Gevora_Hotel.jpg')}}"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body main-slider-body">
        <h5 class="card-title">USD: 1200/Night</h5>
        <p class="card-text">The Pinnacle</p>
        <span>
          <i class="fas fa-shower"></i>
          <i class="fas fa-wifi"></i>
          <i class="fas fa-smoking"></i>
        </span>
        <p class="mt-3">
          <i class="fas fa-border-all"></i>
          <span>3600 sqft</span>
        </p>
          <a href="{{route( 'single_pg')}}" class="btn btn-custom-color2 check-detail mt-2  ">Check Details</a>

      </div>
    </div>


    <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
      <img
        src=" {{asset('Frontend/assets/img/3.HK_Bank_of_China_Tower_View.jpg')}}"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body main-slider-body">
        <h5 class="card-title">USD: 1200/Night</h5>
        <p class="card-text">The Pinnacle</p>
        <span>
          <i class="fas fa-shower"></i>
          <i class="fas fa-wifi"></i>
          <i class="fas fa-smoking"></i>
        </span>
        <p class="mt-3">
          <i class="fas fa-border-all"></i>
          <span>3600 sqft</span>
        </p>
          <a href="{{route( 'single_pg')}}" class="btn btn-custom-color2 check-detail mt-2  ">Check Details</a>

      </div>
    </div>

    <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
      <img
        src=" {{asset('Frontend/assets/img/4.Central-plaza2.jpg')}}"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body main-slider-body">
        <h5 class="card-title">USD: 1200/Night</h5>
        <p class="card-text">The Pinnacle</p>
        <span>
          <i class="fas fa-shower"></i>
          <i class="fas fa-wifi"></i>
          <i class="fas fa-smoking"></i>
        </span>
        <p class="mt-3">
          <i class="fas fa-border-all"></i>
          <span>3600 sqft</span>
        </p>
          <a href="{{route( 'single_pg')}}" class="btn btn-custom-color2 check-detail mt-2  ">Check Details</a>

      </div>
    </div>

    <div class="card shadow mb-2 ml-3 mr-4 slick-slider-card" style=   "width: 10rem">
      <img
        src=" {{asset('Frontend/assets/img/5.Dalian_International_Trade_Center,_Aug2018_(cropped).jpg')}}"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body main-slider-body">
        <h5 class="card-title">USD: 1200/Night</h5>
        <p class="card-text">The al faisal</p>
        <span>
          <i class="fas fa-shower"></i>
          <i class="fas fa-wifi"></i>
          <i class="fas fa-smoking"></i>
        </span>
        <p class="mt-3">
          <i class="fas fa-border-all"></i>
          <span>3600 sqft</span>
        </p>
          <a href="{{route( 'single_pg')}}" class="btn btn-custom-color2 check-detail mt-2  ">Check Details</a>

      </div>
    </div>

  </div>

<script type="text/Javascript">
  $(document).ready(function(){

  $('.items').slick({
      infinite: true,
      lazyLoad: 'ondemand',
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: true,
      autoplaySpeed: 10000,
      responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

      });

  });
</script>
</div>
