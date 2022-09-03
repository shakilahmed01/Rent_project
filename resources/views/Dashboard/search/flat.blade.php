
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/favicon_io/android-chrome-192x192.png')}}">

    <!-- Bootstrap CSS -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/TOLETX-LOGO-2.ai')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type='text/javascript'src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="crossorigin="anonymous"referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Custom CSS for header  -->

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/dark.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/responsive.css')}}">


    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- jQuery CDN -->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script>
        // Render blocking JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>


    <title>ToletX-Flat</title>
  </head>
  <body>

  @include('frontend.include.header')
    </form>
          <!-- Header Start -->
    <header class="mt-4">
        <div class="container">
            <div class="row main-search">

            </div>
            <div class="row row1">
                <div class="col-md-7 mx-4">
                    <div class="row  ">
                      <div class="col-md-2 col-small mx-2 main-service text-center" onclick="location.href='{{route('flat')}}'">
                                  <span class="icon-flat service_item"></span>
                                      <br>
                                  <span class="service_item_name"> Flat</span>
                          </div>
                    </div>
                    <div class="row ml-4 mr-4 ">
                        <div class="container container-fluid">
                          <form class="form-horizontal top-form" action="{{route('flat_search')}}" role="form">
                            <div class="row   justify-content-between">
                                <div class="col-lg-3 col-md-3 mt-2 top-from">
                                    <input type="text" name="filter[thana]" class="form-control" id="location" placeholder="Location" aria-label=" location">
                                </div>
                                <div class="col-lg-3 col-md-3 mt-2  top-from">
                                    <input type="date" name="filter[date]" class="form-control" id="check-in-date" placeholder="Add Dates" aria-label="Add Dates">
                                </div>
                                <div class="col-lg-3 col-md-3  mt-2  top-from">
                                    <input type="date" class="form-control" id="check-out-date" placeholder="Add Dates" aria-label="Add Dates">
                                </div>
                                <!-- <div class="col-lg-3 col-md-3  mt-2 top-from">
                                    <input type="number" class="form-control" id="guest-count" placeholder="Guests" aria-label="Guests">
                                </div> -->

                                </div>
                                <!-- Checkbox filters -->
                                <div class="my-4 ">
                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[attached_toilet]" id="attached_toilet" value="Attached">
                                        <label class="form-check-label checkboxes-label" for="attached_toilet">Attached Toilet</label>
                                    </div>
                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[attached_varanda]" id="attached_veranda" value="Attached">
                                        <label class="form-check-label checkboxes-label" for="attached_veranda">Attached Veranda</label>
                                    </div>
                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[hot_water]" id="hot_water" value="hot">
                                        <label class="form-check-label checkboxes-label" for="hot_water">Hot Water</label>
                                    </div>
                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[ac]" id="ac" value="ac">
                                        <label class="form-check-label checkboxes-label" for="ac">A.C</label>
                                    </div>
                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[wifi]" id="wifi" value="wifi">
                                        <label class="form-check-label checkboxes-label" for="wifi">Wifi</label>
                                    </div>
                                        <div class="form-check form-check-inline mx-3 pt-2">
                                            <input class="form-check-input" type="checkbox" name="filter[lift]" id="lift" value="lift">
                                            <label class="form-check-label checkboxes-label" for="lift">Lift</label>
                                        </div>
                                        <div class="form-check form-check-inline mx-3 pt-2">
                                            <input class="form-check-input" type="checkbox" name="filter[furnished]" id="furnished" value="furnished">
                                            <label class="form-check-label checkboxes-label" for="furnished">Furnished</label>
                                        </div>
                                        <div class="form-check form-check-inline mx-3 pt-2">
                                            <input class="form-check-input" type="checkbox" name="filter[cable_tv]" id="cableTv" value="cable">
                                            <label class="form-check-label checkboxes-label" for="cableTv">Cable TV</label>
                                        </div>
                                        <div class="form-check form-check-inline mx-3 pt-2">
                                            <input class="form-check-input" type="checkbox" name="filter[parking]" id="parking" value="parking">
                                            <label class="form-check-label checkboxes-label" for="parking">Parking</label>
                                        </div>
                                        <div class="form-check form-check-inline mx-3 pt-2">
                                            <input class="form-check-input" type="checkbox" name="filter[water]" id="water" value="Water">
                                            <label class="form-check-label checkboxes-label" for="parking">Water</label>
                                        </div>
                                        <div class="form-check form-check-inline mx-3 pt-2">
                                            <input class="form-check-input" type="checkbox" name="filter[gas]" id="gas" value="Gas">
                                            <label class="form-check-label checkboxes-label" for="parking">Gas</label>
                                        </div>
                                        <div class="form-check form-check-inline mx-3 pt-2">
                                            <input class="form-check-input" type="checkbox" name="filter[electricity]" id="electricity" value="Electricity">
                                            <label class="form-check-label checkboxes-label" for="electricity">Electricity</label>
                                        </div>
                                </div>

                                <div class="price-range-block mb-3">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="sliderText">  Price Range  </div>
                                                <div class="d-flex  ">
                                                    <input type="number" name="filter[price]" min=100 max="9900000" oninput="validity.valid||(value='100');" id="min_price"
                                                        class="price-range-field form-control me-2" placeholder="Min-price" />

                                                    <input type="number" name="filter[price]" min=100 max="10000000" oninput="validity.valid||(value='1000000');" id="max_price"
                                                        class="price-range-field form-control" placeholder="Max-price" />
                                                </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="sliderText"> Area Range  </div>
                                                <div class="d-flex  ">
                                                    <input type="number" name="filter[flat_size]" min=100 max="9900000" oninput="validity.valid||(value='100');" id="min_price"
                                                        class="price-range-field form-control me-2" placeholder="Min-size" />
                                                    <input type="number" min=100 max="10000000" oninput="validity.valid||(value='1000000');" id="max_price"
                                                        class="price-range-field form-control" placeholder="Max-size" />
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 mt-2  top-from ">
                                    <button  type="submit" class=" btn btn-danger  w-100 rounded-pill white-text" id="">Search</button>
                                </div>


                          </form>
                        </div>
                </div>
                </div>
                @include('frontend.profile_info')
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Section Start -->
    <section class="pt-5 pb-5">
          <div class="container">
              <div class="row">
                  <!-- slider section -->
                  <div class="col-8 slider-center slide-show ">
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


                   <body class="snippet-body">
                 <div class="items">

                    @foreach($flats as $flat)
                     <div class="card ml-3 mr-4 slick-slider-card" style=   "width: 12rem">
                       <img
                         src="{{ asset('public/uploads/flats') }}/{{ $flat->photo }}"
                         class="card-img-top"
                         alt="..."
                       />
                       <div class="card-body main-slider-body">
                         <h5 class="card-title">Price BDT:{{$flat->price}}</h5>
                         <p class="card-text">{{$flat->address}}</p>
                         <span>
                           <i class="fas fa-shower"></i>
                           <i class="fas fa-wifi"></i>
                           <i class="fas fa-smoking"></i>
                         </span>
                         <p class="mt-3">
                           <i class="fas fa-border-all"></i>
                           <span>{{$flat->flat_size}}</span>
                         </p>

                           <a href="{{ url('/flat/details/') }}/{{ $flat->id }}"class="btn btn btn-custom-color2 check-detail mt-2  ">Check Details</a>

                       </div>
                     </div>
                     @endforeach
                   </div>
                   <script type="text/javascript" src=""></script>
                   <script type="text/javascript" src=""></script>
                   <script type="text/Javascript">
                     $(document).ready(function(){

                     $('.items').slick({
                         infinite: true,
                         lazyLoad: 'ondemand',
                         slidesToShow: 3,
                         slidesToScroll: 3,
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
                   </body>
                   </html>

                  </div>
                  <!-- slider section -->

                  <!-- ad section -->
                  <div class="col-md-4 mb-3  advert" style="margin-top: 6.3rem ">
                       @include('frontend.include.advertise')
                  </div>
                  <!-- ad section -->

                  </div>
                  </div>
                  </section>
                  <!-- Section End -->


                  @include('frontend.include.footer')

                  <!-- Option 2: Separate Popper and Bootstrap JS -->


                  </body>
                  </html>
