<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/favicon_io/android-chrome-192x192.png')}}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&family=Manrope:wght@300&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/TOLETX-LOGO-2.ai')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Custom CSS for header  -->

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/dark.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/responsive.css')}}">
    <!-- jQuery CDN -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




    <script>
        // Render blocking JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>

    <title>ToletX-Search</title>
  </head>
  <body>

  @include('frontend.include.header')
    </form>
          <!-- Header Start -->
    <header class="mt-4">
        <div class="container-fluid">

            <div class="row row1">
                <div class="col-md-7 mx-4">
                    <div class="row  ">
                      <div class="col-md-2 col-small mx-2 main-service text-center" onclick="location.href='{{route('office')}}'">
                                  <span class="icon-office service_item"></span>
                                      <br>
                                  <span class="service_item_name">Office</span>
                          </div>
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

                   @if($array->isNotEmpty())
                   @foreach($array as $arrays)
                     <div class="card ml-3 mr-4 slick-slider-card" style=   "width: 12rem">
                       <img
                         src="{{ asset('public/uploads/offices') }}/{{ $arrays->photo }}"
                         class="card-img-top"
                         alt="..."
                       />
                       <div class="card-body main-slider-body main-slider-body">
                         <h5 class="card-title main-slider">{{ $arrays->price }}/Night</h5>
                         <p class="card-text main-slider">{{ $arrays->type }}</p>
                         <p class="card-text main-slider">{{ $arrays->address }}</p>
                         <span class=" main-slider">
                           <i class="fas fa-shower"></i>
                           <i class="fas fa-wifi"></i>
                           <i class="fas fa-smoking"></i>
                         </span>
                         <p class="mt-3 main-slider">
                           <i class="fas fa-border-all"></i>
                           <span>3600 sqft</span>
                         </p>

                           <a href="{{ url('/office/details/') }}/{{ $arrays->id }}" class="btn btn-custom-color2 check-detail mt-2  ">Check Details</a>


                       </div>
                     </div>
                     @endforeach
                     @else
                         <div>
                             <h2>No posts found</h2>
                         </div>
                     @endif
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
