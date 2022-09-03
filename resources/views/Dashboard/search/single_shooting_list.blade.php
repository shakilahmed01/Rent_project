
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/favicon_io/android-chrome-192x192.png')}}">


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/TOLETX-LOGO-2.ai')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Custom CSS for header  -->

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/dark.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/responsive.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/assets/css/foundation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/assets/css/xzoom.css')}}">


     <script>
        // Render blocking JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>



    <title>ToletX</title>
  </head>
  <body>
@include('frontend.include.header')
<!-- <img class="bzoom_thumb_image" src=" {{ asset('Frontend/assets/img/single_pg/house_1.jpg') }}" title="first img" /> -->
                   <!-- Single item Start -->
        <div class="main-wrapperX container">
           <div class="row">
           <div class="col-lg-6 col-md-12 col-sm-12 col-12 product-divX ">
                <div class="container  ">
                    <!-- default start -->
    <section id="default" class="padding-top0">
      <div class="row">
      <div class="xzoom-container">
            <img class="xzoom zoom_main" id="xzoom-default" src="{{ asset('public/uploads/shootings') }}/{{ $list->photo }}" xoriginal=" {{ asset('public/uploads/shootings') }}/{{ $list->photo }}" />
            <div class="xzoom-thumbs" style="display:flex; margin-top:10px;">
              <a href=" {{ asset('public/uploads/shootings') }}/{{ $list->photo1 }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('public/uploads/shootings') }}/{{ $list->photo1 }}"  xpreview=" {{ asset('public/uploads/shootings') }}/{{ $list->photo1 }}"  >
              </a>
              <a href="{{ asset('public/uploads/shootings') }}/{{ $list->photo2 }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('public/uploads/shootings') }}/{{ $list->photo2 }}"  >
              </a>
              <a href="{{ asset('public/uploads/shootings') }}/{{ $list->photo3 }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('public/uploads/shootings') }}/{{ $list->photo3 }}"  >
              </a>
              <a href="{{ asset('public/uploads/shootings') }}/{{ $list->photo4 }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('public/uploads/shootings') }}/{{ $list->photo4 }}"  >
              </a>
              <a href="{{ asset('public/uploads/shootings') }}/{{ $list->photo5 }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('public/uploads/shootings') }}/{{ $list->photo5 }}"  >
              </a>
              <a href="{{ asset('public/uploads/shootings') }}/{{ $list->photo6 }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('public/uploads/shootings') }}/{{ $list->photo6 }}"  >
              </a>
              <a href="{{ asset('public/uploads/shootings') }}/{{ $list->photo }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('public/uploads/shootings') }}/{{ $list->photo }}"  >
              </a>

            </div>
          </div>
        <div class="large-7 column"></div>
      </div>
    </section>
    <!-- default end -->


                    <div class="m-2 video_button" data-bs-toggle="modal" data-bs-target="#videoModal">
                         <i class="fa-solid fa-circle-play fa-2xl"></i>
                    </div>
            <!-- .................................. -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
                </button> -->

                <!-- Modal -->
                <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content video_modal_content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <style>
                        .iframe_modal_content{
                            /* position: relative; */
                            /* width: 100%; */
                            margin: auto;
                        }
                        .ifram_container {
                            position: absolute;
                            position: absolute;
                            left: 0;
                            right: 0;
                            margin: auto;
                        }
                        .video_modal_content{
                            height: 405px
                        }
                    </style>
                    <div class="modal-body ratio  ratio-16x9 px-3">
                         <div class="iframe_modal_content">
                            <div class="ifram_container d-flex justify-content-center py-3 px-3">
                                <iframe width="100%" height="315"  src="{{ $list->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                         </div>
                    </div>

                    </div>
                </div>
                </div>
            <!-- .................................. -->



                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12 product-div-right">
                <div>
                    <h2>Posted By-</h2>
                    <div class="d-flex">
                    <img  src="{{asset('public/uploads/registers')}}/{{$list->Shooting_Spot_relationBetweenUser->photo}}" class="rounded-circle single-pg-img"  alt="" srcset="">
                    <div class=" text-center my-2 ms-4">
                        <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 1">
                            <i class="fas fa-medal"></i>
                        </a>
                        <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 2">
                            <i class="fas fa-medal"></i>
                        </a>
                        <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 3">
                            <i class="fas fa-medal"></i>
                        </a>
                    </div>
                    </div>
                    <h2 class="fw-bold">{{$list->Shooting_Spot_relationBetweenUser->name}}</h2>


                    <div class="product-rating">
                        <span>
                            <i class="fas fa-star">
                            </i>
                        </span>
                        <span>
                            <i class="fas fa-star">
                            </i>
                        </span>
                        <span>
                            <i class="fas fa-star">
                            </i>
                        </span>
                        <span>
                            <i class="fas fa-star">
                            </i>
                        </span>
                        <span>
                            <i class="fas fa-star-half-alt">
                            </i>
                        </span>
                        <span>
                            <i class="fas fa-star-half-alt">
                            </i>
                        </span>
                        <span>
                            <i class="fas fa-star-half-alt">
                            </i>
                        </span>
                        <span>
                            <i class="fas fa-star-half-alt">
                            </i>
                        </span>
                    </div>
                    <div class=" ">
                        <span> <strong>Post Type:</strong>{{$list->post_type}}</span>
                    </div>
                    <div class=" ">
                        <span> <strong>Size:</strong>{{$list->size}}</span>
                    </div>
                    <div class=" ">
                        <span> <strong>Rent From:</strong> {{$list->date}}</span>
                    </div>

                </div>
                <br>
                <span class="product-name">
                    {{$list->title}}
                </span>
                <span class="product-price">
                    Price:{{$list->price}}
                </span>
                <span class="product-price">
                    Service Charge:{{$list->s_charge}}
                </span>
                <div class="product-rating">
                    <span>
                        <i class="fas fa-star">
                        </i>
                    </span>
                    <span>
                        <i class="fas fa-star">
                        </i>
                    </span>       <span>
                        <i class="fas fa-star">
                        </i>
                    </span>       <span>
                        <i class="fas fa-star">
                        </i>
                    </span>       <span>
                        <i class="fas fa-star-half-alt">
                        </i>
                    </span>
                    <span>250 ratings</span>
                </div>


                <p class="product-description">
                    {{$list->description}}
                </p>
                <div class="btn-groups d-flex flex-lg-row flex-md-row flex-sm-column flex-column">
                    <button type="button" class="btn btn-primary text-white rounded-pill  me-2 mt-2">
                        <i class="fas fa-shopping-cart"></i>
                        Add to My Shortlist
                    </button>
                    <button type="button" onclick="location.href='tel:{{$list->phone}}'" class="btn btn-dark rounded-pill text-white me-2 mt-sm-2 mt-2">
                        <i class="fas fa-phone"></i>
                        Call
                    </button>
                    <button type="button" onclick="location.href='mailto:{{$list->Shooting_Spot_relationBetweenUser->email}}'" class="btn btn-dark rounded-pill text-white  me-2 mt-sm-2 mt-2">
                        <i class="fas fa-wallet"></i>
                        Send Email
                    </button>

                </div>
                <h2 class="amenities" >Amenities</h2>
                <div class="icon1 flex-wrap">

                @if($list->utilities == null)
                    <div class="d-none">
                        <i class="fas fa-tools">
                        </i>
                         <h6>Not available</h6>
                    </div>
                    @else
                    <div class="m-2">
                        <i class="fas fa-tools">
                        </i>
                      <h6>Utilities</h6>

                    </div>
                    @endif
                    @if($list->lift == null)
                    <div class="d-none">
                        <i class="fas fa-elevator"></i>
                        <h6>Not available</h6>
                    </div>
                    @else
                    <div class="m-2">
                        <i class="fas fa-elevator"></i>
                        <h6>Lift</h6>
                    </div>
                    @endif

                    @if($list->hot_water == null)
                    <div class="d-none">
                        <i class="fas fa-water"></i>
                        <h6>Not available</h6>
                    </div>
                    @else
                    <div class="m-2">
                        <i class="fas fa-water"></i>
                        <h6>Hot Water</h6>
                    </div>
                    @endif
                    @if($list->laundry == null)
                    <div class="d-none">
                        <i class="fas fa-soap"></i>
                        <h6>Not available</h6>
                    </div>
                    @else
                    <div class="m-2">
                        <i class="fas fa-soap"></i>
                      <h6>Laundry</h6>
                    </div>
                    @endif

                    @if($list->cable_tv == null)
                    <div class="d-none">
                        <i class="fas fa-tv"></i>
                        <h6>Not available</h6>
                    </div>
                    @else
                    <div class="m-2">
                        <i class="fas fa-tv"></i>
                      <h6>Cable TV</h6>
                    </div>
                    @endif
                    <!-- <span>
                        <i class="fas fa-procedures"></i>
                    </span> -->

                    @if($list->ac == null)
                    <div class="d-none">
                        <i class="fas fa-wind"></i>
                        <h6>Not available</h6>
                    </div>
                    @else
                    <div class="m-2">
                        <i class="fas fa-wind"></i>
                        <h6>AC</h6>
                    </div>
                    @endif


                  @if($list->wifi == null)
                    <div class="d-none">
                        <i class="fas fa-wifi"></i>
                        <h6>Not available</h6>
                    </div>
                    @else
                    <div class="m-2">
                        <i class="fas fa-wifi"></i>
                        <h6>Wifi</h6>
                    </div>
                    @endif

                  @if($list->attached_toilet == null)
                    <div class="d-none">
                        <i class="fas fa-toilet"></i>
                        <h6>Not available</h6>
                    </div>
                    @else
                    <div class="m-2">
                        <i class="fas fa-toilet"></i>
                        <h6>Attached Toilet</h6>
                    </div>
                    @endif

                  @if($list->cctv == null)
                    <div class="d-none">
                        <i class="fas fa-video"></i>
                        <h6>Not available</h6>
                    </div>
                    @else
                    <div class="m-2">
                        <i class="fas fa-video"></i>
                      <h6>CCTV</h6>
                    </div>
                    @endif
                  <div>
                      <i class="fas fa-user-shield"></i>
                      <h6>security</h6>
                  </div>


                  @if($list->parking == null)
                    <div class="d-none">
                        <i class="fas fa-parking"></i>
                        <h6 >Not available</h6>
                    </div>
                    @else
                    <div class="m-2">
                        <i class="fas fa-parking"></i>
                      <h6>Parking</h6>
                    </div>
                    @endif
                  <!-- <span>
                      <i class="fas fa-procedures"></i>
                  </span> -->

                  @if($list->furnished == null)
                    <div class="d-none">
                        <i class="fas fa-chair"></i>
                        <h6>Not available</h6>
                    </div>
                    @else
                    <div class="m-2">
                        <i class="fas fa-chair"></i>
                      <h6>Furnished</h6>
                    </div>
                    @endif
                </div>
            </div>
           </div>

        </div>

    <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Single item End -->

        @include('frontend.include.footer')   <!-- Option 2: Separate Popper and Bootstrap JS -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{asset('Frontend/assets/js/foundation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('Frontend/assets/js/setup.js')}}"></script>
        <script type="text/javascript" src="{{asset('Frontend/assets/js/xzoom.min.js')}}"></script>

</body>
</html>
