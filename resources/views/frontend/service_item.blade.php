
   @extends('frontend.master.master')
@section('content')
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/service_item.css')}}">       -->
  <div class="row mt-2   service-group-row">
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center " onclick="location.href='{{route('room')}}'">
                                <span class="icon-room service_item "></span>
                                    <br>
                                <span class="service_item_name"> Room</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('flat')}}'">
                                <span class="icon-flat service_item"></span>
                                    <br>
                                <span class="service_item_name"> Flat</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('building')}}'">
                                <span class="icon-building service_item"></span>
                                    <br>
                                <span class="service_item_name"> Building</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('parking')}}'">
                                <span class="icon-garage service_item"></span>
                                    <br>
                                <span class="service_item_name"> Garage</span>
                        </div>
                    
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('hotel')}}'">
                                <span class="icon-hotel service_item"></span>
                                    <br>
                                <span class="service_item_name"> Hotel</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('hostel')}}'">
                                <span class="icon-hostel service_item"></span>
                                    <br>
                                <span class="service_item_name"> Hostel</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('resort')}}'">
                                <span class="icon-resort service_item"></span>
                                    <br>
                                <span class="service_item_name"> Resort</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('office')}}'">
                                <span class="icon-office service_item"></span>
                                    <br>
                                <span class="service_item_name"> Office</span>
                        </div>
                    
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('shop')}}'">
                                <span class="icon-shop service_item"></span>
                                    <br>
                                <span class="service_item_name"> Shop</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('community_hall')}}'">
                                <span class="icon-community_hall service_item"></span>
                                    <br>
                                <span class="service_item_name">  Community  Hall</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('factory')}}'">
                                <span class="icon-factory service_item"></span>
                                    <br>
                                <span class="service_item_name">  Factory</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('warehouse')}}'">
                                <span class="icon-warehouse service_item"></span>
                                    <br>
                                <span class="service_item_name">  Warehouse</span>
                        </div>
 
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('playground')}}'">
                                <span class="icon-playground service_item" ></span>
                                    <br>
                                <span class="service_item_name"> Play Ground</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center"  onclick="location.href='{{route('shooting_spot')}}'">
                                <span class="icon-shooting_spot service_item" ></span>
                                    <br>
                                <span class="service_item_name"> Shooting Spot</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center"  onclick="location.href='{{route('exhibition_center')}}'">
                                <span class="icon-exhibition_center service_item"></span>
                                     <br>
                                <span class="service_item_name">  Exhibition Center</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('rooftop')}}'">
                                <span class="icon-rooftop service_item"></span>
                                    <br>
                                <span class="service_item_name">  Rooftop</span>
                        </div>


                   
                    <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('bilboard')}}'">
                                <span class="icon-bilboard service_item"></span>
                                    <br>
                                <span class="service_item_name"> Bilboard</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('land')}}'">
                                <span class="icon-land service_item"></span>
                                    <br>
                                <span class="service_item_name">  Land</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('pond')}}'">
                                <span class="icon-pond service_item"></span>
                                    <br>
                                <span class="service_item_name">  Pond</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('swimming_pool')}}'">
                                <span class="icon-swimming_pool service_item"></span>
                                    <br>
                                <span class="service_item_name">   Swimming Pool</span>
                        </div>
                   
                    <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('picnic_spot')}}'">
                                <span class="icon-picnic-spot service_item"></span>
                                    <br>
                                <span class="service_item_name"> Picnic Spot</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  me-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('ghat')}}'">
                                <span class="icon-ghat service_item"></span>
                                    <br>
                                <span class="service_item_name"> Ghat</span>
                        </div>

</div>
@endsection
