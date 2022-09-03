


<div class="body">
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start" tab-index="-1" id="sidebar" aria-labelledby="sidebar-label">
        <div class="offcanvas-header">
            <a href="{{route('index')}}">
                <img src="{{asset('Frontend/assets/img/header/toletx_logo.png')}}" alt="..." width="100" class="logo1">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="close"></button>
        </div>
        <div class="offcanvas-body">

                <div class="input-group mt-3 mb-3">
                    <form action="{{route('search')}}" method="get" class="d-flex my-2">
                        <input class="typeahead main_search form-control" type="search" name="query" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary btn-lg btn2 btn-search-offcanvas" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            <div class="list-group">
                <a href="{{route('package')}}" class="list-group-item list-group-item-action " aria-current="true">
                Package Information
                </a>
                <a href="{{route('my_shortlist')}}" class="list-group-item list-group-item-action">My Shortlist</a>
            </div>


                <!-- old version -->
            <!-- <div class="form-check form-switch">
                <label class="form-check-label lite-mode" id="mode_indicator" for="darkSwitch">Dark Mode</label>
                <input class="form-check-input ml-3 mode-switch" onclick="myFunction()" type="checkbox" id="darkSwitch">
            </div> -->

            <div class="form-check form-switch d-flex align-items-center mt-3">
                <label class="form-check-label lite-mode" id="mode_indicator" for="liteSwitch">Lite Mode</label>
                <input class="form-check-input ms-3 mode-switch" onclick="changeStatus()"  type="checkbox" id="liteSwitch">
            </div>


            <script>
                //  toggle dark mode button text
                function myFunction() {
                    var x = document.getElementById("mode_indicator");
                    if (x.innerHTML === "Dark Mode") {
                        x.innerHTML = "Lite Mode";

                    } else if (x.innerHTML === "Lite Mode") {
                        x.innerHTML = "Dark Mode";
                    }
                }
                        //  document.body.setAttribute("data-theme", "lite") :
                        // document.body.removeAttribute("data-theme");
                    var liteSwitch = document.getElementById("liteSwitch");
                    var fullbody = document.body;

                 //If darkMode doesn’t exist in the LocalStorage, create it. False by default
                 if (localStorage.getItem('dark_switch_activated')===null){
                                localStorage.setItem('dark_switch_activated', "false");
                            }
                    checkStatus()
                    function checkStatus(){

                        if (localStorage.getItem('dark_switch_activated')==="true"){
                            liteSwitch.checked = true;
                            fullbody.setAttribute("data-theme", "lite") ;

                        }else{
                        }
                    }

                    function changeStatus(){
                        if (localStorage.getItem('dark_switch_activated')==="true"){
                            localStorage.setItem('dark_switch_activated', "false");
                            fullbody.removeAttribute("data-theme");
                        } else{
                            localStorage.setItem('dark_switch_activated', "true");
                            fullbody.setAttribute("data-theme", "lite");
                        }
                    }
            </script>
        </div>
    </div>
    <style>
        .icon-hamburger_with_search{
            font-weight: bold !important;
        }
        .icon-hamburger_with_search, .notification-icon, .setting-icon{
            color: #fff;
        }
    </style>
    <!-- offcanvas end-->
    <div class=" container-fluid">
        <div class="  row px-4 px-xs align-items-center bg-dark  justify-content-lg-between justify-content-md-between justify-content-sm-between  justify-content-xs-between justify-content-between">

                <a href="#sidebar" class="col-lg-1 col-md-1 col-sm-1 col-1   mt-2  " data-bs-toggle="offcanvas" role="button" aria-controlls="sidebar">
                    <i class="  fas  h3 icon-hamburger_with_search"></i>

                </a>
                <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="{{asset('Frontend/assets/img/header/toletx_logo.png')}}" alt="..." class="logo">
                    </a>
                </div>
                        <div class="col-lg-4 col-md-3 col-sm-3 my-1 searchZ">
                            <form action="{{route('search')}}" method="GET">
                                @csrf
                                <div class="input-group ">
                        <input name="query" type="text" class="typeahead main_search form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1"> <i class="fa fa-search"></i></span>
                        </div>
                            </form>

                </div>
            @if(Auth::user())
                <div class="col-lg-2  col-md-2 col-sm-2 col-2 nav-item dropdown text-center">
                    <a id="navbarDropdown" class="nav-link profile_btn px-0" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="btn btn-danger btnr white-text">{{ Auth::user()->name }}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

            <!-- Notification -->
                <div class="col-lg-1  col-md-1 col-sm-1 col-2 dropdown ">
                    <button class="btn bell px-lg-0 px-md-0 px-sm-0 px-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="Dropstart">
                        <i class="far fa-bell notification-icon "></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Lorem ipsum dolor sit amet.</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="#">Lorem ipsum dolor sit amet.</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="#">Lorem ipsum dolor sit amet.</a></li>
                        <hr>
                    </ul>
                </div>
            <!-- Settings -->
                <div class="col-lg-1  col-md-1 col-sm-1 col-2 dropdown ps-0 ">
                    <button class="btn setting px-lg-0 px-md-0 px-sm-0 px-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog setting-icon"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Privacy</a></li>
                    </ul>
                </div>
            <!-- Button trigger modal -->
            <div class="col-lg-1  col-md-1 col-sm-1 col-2 post">
                <button type="button" id="post_your_ad" class=" btn btn-primary btnr" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-plus white-text"></i>
                    </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content  post-modal">
                        <div class="modal-header text-center">

                            <h5 class="modal-title " id="exampleModalLabel">Choose a Service</h5>

                            <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
                            </button>

                        </div>
                        <div class="modal-body">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/service_item.css')}}">       -->
    <button class="btn btn-primary" style="position:100%" onclick="location.href='{{route('get_add')}}'">Quick Add</button>
  <div class="row m-0 mt-2  justify-content-center service-group-row">
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center " onclick="location.href='{{route('post_room')}}'">
                                <span class="icon-room service_item "></span>
                                    <br>
                                <span class="service_item_name"> Room</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_flat')}}'">
                                <span class="icon-flat service_item"></span>
                                    <br>
                                <span class="service_item_name"> Flat</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_building')}}'">
                                <span class="icon-building service_item"></span>
                                    <br>
                                <span class="service_item_name"> Building</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_parking_spot')}}'">
                                <span class="icon-garage service_item"></span>
                                    <br>
                                <span class="service_item_name"> Garage</span>
                        </div>

                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_hotel')}}'">
                                <span class="icon-hotel service_item"></span>
                                    <br>
                                <span class="service_item_name"> Hotel</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_hostel')}}'">
                                <span class="icon-hostel service_item"></span>
                                    <br>
                                <span class="service_item_name"> Hostel</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_resort')}}'">
                                <span class="icon-resort service_item"></span>
                                    <br>
                                <span class="service_item_name"> Resort</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_office')}}'">
                                <span class="icon-office service_item"></span>
                                    <br>
                                <span class="service_item_name"> Office</span>
                        </div>

                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_shop')}}'">
                                <span class="icon-shop service_item"></span>
                                    <br>
                                <span class="service_item_name"> Shop</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_community')}}'">
                                <span class="icon-community_hall service_item"></span>
                                    <br>
                                <span class="service_item_name">  Community  Hall</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_factory')}}'">
                                <span class="icon-factory service_item"></span>
                                    <br>
                                <span class="service_item_name">  Factory</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_warehouse')}}'">
                                <span class="icon-warehouse service_item"></span>
                                    <br>
                                <span class="service_item_name">  Warehouse</span>
                        </div>

                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_playground')}}'">
                                <span class="icon-playground service_item" ></span>
                                    <br>
                                <span class="service_item_name"> Play Ground</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center"  onclick="location.href='{{route('post_shooting')}}'">
                                <span class="icon-shooting_spot service_item" ></span>
                                    <br>
                                <span class="service_item_name"> Shooting Spot</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center"  onclick="location.href='{{route('post_exhibution')}}'">
                                <span class="icon-exhibition_center service_item"></span>
                                     <br>
                                <span class="service_item_name">  Exhibition Center</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_rooftop')}}'">
                                <span class="icon-rooftop service_item"></span>
                                    <br>
                                <span class="service_item_name">  Rooftop</span>
                        </div>



                    <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_bilboard')}}'">
                                <span class="icon-bilboard service_item"></span>
                                    <br>
                                <span class="service_item_name"> Bilboard</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_land')}}'">
                                <span class="icon-land service_item"></span>
                                    <br>
                                <span class="service_item_name">  Land</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_pond')}}'">
                                <span class="icon-pond service_item"></span>
                                    <br>
                                <span class="service_item_name">  Pond</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_swimmingpool')}}'">
                                <span class="icon-swimming_pool service_item"></span>
                                    <br>
                                <span class="service_item_name">   Swimming Pool</span>
                        </div>

                    <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_picnic')}}'">
                                <span class="icon-picnic-spot service_item"></span>
                                    <br>
                                <span class="service_item_name"> Picnic Spot</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-sm-3 col-3 col-small p-0 me-2 mb-2    text-center" onclick="location.href='{{route('post_ghat')}}'">
                                <span class="icon-ghat service_item"></span>
                                    <br>
                                <span class="service_item_name"> Ghat</span>
                        </div>

</div>



                        </div>

                    </div>
                </div>
            </div>
            @else
    <!-- Button trigger modal -->
    <div class="col-md-2 col-2">
                <button type="button" id="post_your_ad" class="btn btn-primary btn-toggole-modal"  >

                <i class="fa-solid fa-plus"></i>
                </button>

                <!-- Unauthorised Toast Message -->
                <div class="position-fixed top-3 end-0 p-sm-3 p-2" style="z-index: 11">
                        <div id="liveToast" class="toast align-items-center text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-3 toast-background">
                                    <div class="toast-body">

             <h1 class="font-weight-bold "> <i class="fa-solid fa-circle-exclamation me-3"></i> Please login</h1>
                                    </div>
                                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            <!-- <div class="toast-header">
                            <h1 class="me-auto text-center">Please Login </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div> -->
                        </div>
                    </div>
    </div>

<script>
    var toastTrigger = document.getElementById('post_your_ad')
var toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
  toastTrigger.addEventListener('click', function () {
    var toast = new bootstrap.Toast(toastLiveExample)

    toast.show()

  })
}
</script>




            </div>


            @endif

        </div>

    </div>
    <hr>
</div>


<!-- auto complete search script -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
</script>
<script>
    var path = "{{ route('autocomplete')  }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { term: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
