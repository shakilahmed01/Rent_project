@extends('frontend.master.master')
@section('content')
<title>Profile</title>

<!-- Header Start -->
<header class="mt-4">
    <div class="container-fluid">
        <div class="row main-search">
        </div>
        <div class="row">
            <div class="col-md-12 ">

                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">My
                            Information</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Payment
                            Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="customer_need-tab" data-bs-toggle="tab" data-bs-target="#customer_need" type="button" role="tab" aria-controls="customer_need" aria-selected="false">Customer Advertise
                        </button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane mt-2 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Profile Information</h4>
                                    </div>
                                    <div class="row mt-2">
                                          @foreach($users as $list)
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-hotel-boy"></i>
                                                <span class="info-type">User Id : </span>
                                                <span class="info">{{$list->slug}}</span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-hotel-boy"></i>
                                                <span class="info-type">Name : </span>
                                                <span class="info">{{$list->name}}</span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-user-male"></i>
                                                <span class="info-type">Father's Name :</span>
                                                <span class="info">{{$list->father_name}}</span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-user-female"></i>

                                                <span class="info-type">Mothers's Name :</span>
                                                <span class="info">{{$list->mother_name}}</span>

                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-phone"></i>
                                                <span class="info-type">Phone Number :</span>
                                                <span class="info">{{$list->phone}}</span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-ui-calendar"></i>
                                                <span class="info-type">Date of Birth :</span>
                                                <span class="info">{{$list->date_of_birth}}</span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-ui-calendar"></i>
                                                <span class="info-type">Gender :</span>
                                                <span class="info">{{$list->gender}}</span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-ui-calendar"></i>
                                                <span class="info-type">Address :</span>
                                                <span class="info">{{$list->address}}</span>
                                            </label>
                                        </div>
                                        <!-- <div class="col-md-12 ml-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Make Profile Picture Private
                                                </label>
                                            </div>
                                        </div> -->
                                        <a href="{{ url('/user/edit') }}/{{ $list->id }}" class="btn btn-sm btn-primary mt-3">Update Info</a>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane mt-2 fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Payment Information</h4>
                            </div>
                                <div class="row mt-2">
                                    @foreach($payments as $payment)
                                <div class="col-md-12">
                                    <label class="labels">
                                        <i class="icofont-hotel-boy"></i>
                                        <span class="info-type">Name : {{$payment->Payment_relationBetweenUser->name}}</span>

                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">
                                        <i class="icofont-user-male"></i>
                                        <span class="info-type">Package Type : {{$payment->package_type}}</span>
                                        <br>
                                        <span class="info">Time : {{$payment->duration}}</span>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">
                                        <i class="icofont-user-female"></i>

                                        <span class="info-type">Pay Amount : {{$payment->amount}} bdt/-</span>

                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">
                                        <i class="icofont-phone"></i>
                                        <span class="info-type">Phone Number : {{$payment->Payment_relationBetweenUser->phone}}</span>

                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">
                                        <i class="icofont-ui-calendar"></i>
                                        <span class="info-type">Date of Birth : {{$payment->Payment_relationBetweenUser->date_of_birth}}</span>

                                    </label>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane mt-2 fade" id="customer_need" role="tabpanel" aria-labelledby="customer_need-tab">

                        <div class="row mt-2 ">

                            <div class="post_list ">

                                 @foreach($rooms as $room)
                                <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/room/details') }}/{{ $room->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/room/edit/') }}/{{ $room->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$room->address}}</h6>
                                            <p class=" ">{{$room->title}}</p>
                                            </div>
                                    </div>
                                    <div class="col-lg-2">
                                            <small class="opacity-50 text-nowrap">{{$room->created_at->diffForHumans()}}</small>
                                    </div>
                                </div>
                                @endforeach


                                @foreach($bilboards as $bilboard)
                                <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/bilboard/details') }}/{{ $bilboard->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/bilboard/edit/') }}/{{ $bilboard->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$bilboard->address}}</h6>
                                            <p class=" ">{{$bilboard->title}}</p>
                                            </div>
                                    </div>
                                    <div class="col-lg-2">
                                            <small class="opacity-50 text-nowrap">{{$bilboard->created_at->diffForHumans()}}</small>
                                    </div>
                                </div>
                                @endforeach
                                @foreach($communities as $community)
                                <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/community/details') }}/{{ $community->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/community/edit/') }}/{{ $community->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$community->address}}</h6>
                                            <p class=" ">{{$community->title}}</p>
                                            </div>
                                    </div>
                                    <div class="col-lg-2">
                                            <small class="opacity-50 text-nowrap">{{$community->created_at->diffForHumans()}}</small>
                                    </div>
                                </div>
                                @endforeach
                                @foreach($swimmings as $swimming)
                                <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/swimming/details') }}/{{ $swimming->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/swimming/edit/') }}/{{ $swimming->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$swimming->address}}</h6>
                                            <p class=" ">{{$swimming->title}}</p>
                                            </div>
                                    </div>
                                    <div class="col-lg-2">
                                            <small class="opacity-50 text-nowrap">{{$swimming->created_at->diffForHumans()}}</small>
                                    </div>
                                </div>
                                @endforeach
                                @foreach($exibutions as $exibution)
                                <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/exibution/details') }}/{{ $exibution->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/exibution/edit/') }}/{{ $exibution->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$exibution->address}}</h6>
                                            <p class=" ">{{$exibution->title}}</p>
                                            </div>
                                    </div>
                                    <div class="col-lg-2">
                                            <small class="opacity-50 text-nowrap">{{$exibution->created_at->diffForHumans()}}</small>
                                    </div>
                                </div>
                                @endforeach
                                @foreach($factories as $factory)
                                  <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/factory/details') }}/{{ $factory->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/factory/edit/') }}/{{ $factory->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$factory->address}}</h6>
                                            <p class=" ">{{$factory->title}}</p>
                                            </div>
                                    </div>
                                    <div class="col-lg-2">
                                            <small class="opacity-50 text-nowrap">{{$factory->created_at->diffForHumans()}}</small>
                                    </div>
                                </div>
                                  @endforeach
                                  @foreach($flats as $flat)
                                    <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/flat/details') }}/{{ $flat->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/flat/edit/') }}/{{ $flat->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$flat->address}}</h6>
                                            <p class=" ">{{$flat->title}}</p>
                                            </div>
                                    </div>
                                    <div class="col-lg-2">
                                            <small class="opacity-50 text-nowrap">{{$flat->created_at->diffForHumans()}}</small>
                                    </div>
                                </div>
                                    @endforeach
                                    @foreach($hostels as $hostel)
                                      <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/hostel/details') }}/{{ $hostel->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/hostel/edit/') }}/{{ $hostel->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$hostel->address}}</h6>
                                            <p class=" ">{{$hostel->title}}</p>
                                            </div>
                                    </div>
                                    <div class="col-lg-2">
                                            <small class="opacity-50 text-nowrap">{{$hostel->created_at->diffForHumans()}}</small>
                                    </div>
                                </div>
                                      @endforeach
                                      @foreach($hotels as $hotel)
                                            <div   class="row p-3 mx-0">
                                        <div class="col-lg-3 p-0">
                                            <a href="{{ url('/hotel/details') }}/{{ $hotel->id }}"class="btn btn-success btn-lg text-white p-2">
                                                <i class="fa-solid fa-folder-open"></i>
                                            </a>
                                            <a href="{{ url('user/hotel/edit/') }}/{{ $hotel->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{url('/hotel/delete/')}}/{{$hotel->id}} "class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-7 px-0">
                                                <div class="d-flex flex-column flex-wrap">
                                                <h6 class="post_list_address">{{$hotel->location}}</h6>
                                                <p class=" ">{{$hotel->title}}</p>
                                                </div>
                                        </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$hotel->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                        @endforeach
                                        @foreach($offices as $office)
                                          <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/office/details') }}/{{ $office->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/office/edit/') }}/{{ $office->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$office->address}}</h6>
                                            <p class=" ">{{$office->title}}</p>
                                            </div>
                                    </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$office->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                          @endforeach
                                          @foreach($playgrounds as $playground)
                                            <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/playground/details') }}/{{ $playground->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/playground/edit/') }}/{{ $playground->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$playground->address}}</h6>
                                            <p class=" ">{{$playground->title}}</p>
                                            </div>
                                    </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$playground->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                            @endforeach
                                            @foreach($ponds as $pond)
                                            <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/pond/details') }}/{{ $pond->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/pond/edit/') }}/{{ $pond->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$pond->address}}</h6>
                                            <p class=" ">{{$pond->title}}</p>
                                            </div>
                                    </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$pond->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                            @endforeach
                                            @foreach($retaurants as $retaurant)
                                            <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/retaurant/details') }}/{{ $retaurant->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/resort/edit/') }}/{{ $retaurant->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$retaurant->address}}</h6>
                                            <p class=" ">{{$retaurant->title}}</p>
                                            </div>
                                    </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$retaurant->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                            @endforeach
                                            @foreach($rooftops as $rooftop)
                                            <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/rooftop/details') }}/{{ $rooftop->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/rooftop/edit/') }}/{{ $rooftop->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$rooftop->address}}</h6>
                                            <p class=" ">{{$rooftop->title}}</p>
                                            </div>
                                    </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$rooftop->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                            @endforeach
                                            @foreach($shootings as $shooting)
                                              <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/shooting/details') }}/{{ $shooting->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/shooting/edit/') }}/{{ $shooting->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$shooting->address}}</h6>
                                            <p class=" ">{{$shooting->title}}</p>
                                            </div>
                                    </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$shooting->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                              @endforeach
                                              @foreach($shops as $shop)
                                                <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/shop/details') }}/{{ $shop->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/shop/edit/') }}/{{ $shop->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$shop->address}}</h6>
                                            <p class=" ">{{$shop->title}}</p>
                                            </div>
                                    </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$shop->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                              @endforeach
                                              @foreach($lands as $land)
                                                <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/land/details') }}/{{ $land->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/land/edit/') }}/{{ $land->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$land->address}}</h6>
                                            <p class=" ">{{$land->title}}</p>
                                            </div>
                                    </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$land->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                              @endforeach
                                              @foreach($warehouses as $warehouse)
                                                <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/warehouse/details') }}/{{ $warehouse->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/warehouse/edit/') }}/{{ $warehouse->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$warehouse->address}}</h6>
                                            <p class=" ">{{$warehouse->title}}</p>
                                            </div>
                                    </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$warehouse->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                              @endforeach
                                              @foreach($parkings as $parking)
                                                <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/parking/details') }}/{{ $parking->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/parking/edit/') }}/{{ $parking->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$parking->address}}</h6>
                                            <p class=" ">{{$parking->title}}</p>
                                            </div>
                                    </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$parking->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                              @endforeach
                                              @foreach($buildings as $building)
                                                <div   class="row p-3 mx-0">
                                    <div class="col-lg-3 p-0">
                                        <a href="{{ url('/building/details') }}/{{ $building->id }}"class="btn btn-success btn-lg text-white p-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                        <a href="{{ url('user/building/edit/') }}/{{ $building->id }}"class="btn btn-success btn-lg text-white p-2 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href=" "class="btn btn-success btn-lg text-white p-2 ">
                                         <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                            <h6 class="post_list_address">{{$building->address}}</h6>
                                            <p class=" ">{{$building->title}}</p>
                                            </div>
                                    </div>
                                        <div class="col-lg-2">
                                                <small class="opacity-50 text-nowrap">{{$building->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                              @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


</header>
<!-- Header End -->


<!-- Option 2: Separate Popper and Bootstrap JS -->




<!-- Enable tooltop -->
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
