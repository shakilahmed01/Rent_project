
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

 
        <!-- Add the slick-theme.css if you want default styling -->
            <link rel="stylesheet" type="text/css" href="{{asset('Frontend/assets/css/slick-slider.css')}}">
            <!-- Add the slick-theme.css if you want default styling -->
            <link rel="stylesheet" type="text/css" href="{{asset('Frontend/assets/css/slick-theme.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('Frontend/assets/css/zoom.css')}}">

     
     <script>
        // Render blocking JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>



    <title>ToletX</title>
  </head>
  <body>
@include('frontend.include.header')

 

 
 
                   <!-- Single item Start -->
<img class="imgX img-fluid main_single_img " src="{{ asset('Frontend/assets/img/single_pg/house_1.jpg') }}" alt=""> 
        <div class="main-wrapperX container"> 
           <div class="row">
           <div class="col-lg-6 col-md-12 col-sm-12 col-12 product-divX ">
                <div class="container  ">  
                <div class="bzoom_wrap">
                    <ul id="bzoom">
                        <li>
                            <img class="bzoom_thumb_image" src=" {{ asset('Frontend/assets/img/single_pg/house_1.jpg') }}" title="first img" />
                            <img class="bzoom_big_image bzoom_big_image" src=" {{ asset('Frontend/assets/img/single_pg/house_1.jpg') }}"/>
                        </li>
                        <li>
                            <img class="bzoom_thumb_image" src="{{ asset('Frontend/assets/img/single_pg/house_2.jpg') }}"/>
                            <img class="bzoom_big_image" src="{{ asset('Frontend/assets/img/single_pg/house_2.jpg') }}"/>
                        </li>
                        <li>
                            <img class="bzoom_thumb_image" src="{{ asset('Frontend/assets/img/single_pg/house_3.jpg') }}"/>
                            <img class="bzoom_big_image" src="{{ asset('Frontend/assets/img/single_pg/house_3.jpg') }}"/>
                        </li>
                        <li>
                            <img class="bzoom_thumb_image" src="{{ asset('Frontend/assets/img/single_pg/house_4.jpg') }}"/>
                            <img class="bzoom_big_image" src="{{ asset('Frontend/assets/img/single_pg/house_4.jpg') }}"/>
                        </li>
                        <li>
                            <img class="bzoom_thumb_image" src="{{ asset('Frontend/assets/img/single_pg/house_5.jpg') }}"/>
                            <img class="bzoom_big_image" src="{{ asset('Frontend/assets/img/single_pg/house_5.jpg') }}"/>
                        </li>
                        <li>
                            <img class="bzoom_thumb_image" src="{{ asset('Frontend/assets/img/single_pg/house_6.jpg') }}"/>
                            <img class="bzoom_big_image" src="{{ asset('Frontend/assets/img/single_pg/house_6.jpg') }}"/>
                        </li>
                        <li>
                            <img class="bzoom_thumb_image" src="{{ asset('Frontend/assets/img/single_pg/house_7.jpg') }}"/>
                            <img class="bzoom_big_image" src="{{ asset('Frontend/assets/img/single_pg/house_7.jpg') }}"/>
                        </li>  
                    </ul>
                </div>
                </div>  
            </div> 

            <div class="col-lg-6 col-md-12 col-sm-12 col-12 product-div-right">
                <div>
                    <h2>Posted By-</h2>
                    <img  src="{{asset('Frontend/assets/img/profile/person2.png')}}" class="rounded-circle single-pg-img"  alt="" srcset="">
                    <h2 class="fw-bold">MACIMMO MICELE</h2>

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
                    </div>
                </div>
                <br>
                <span class="product-name">
                    The best journey takes you Home.
                </span>
                <span class="product-price">
                    500000000000/=
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae blanditiis asperiores Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas minima nisi quas officiis, rerum nostrum quam nihil veritatis amet culpa dolorem similique itaque eum voluptatem consequuntur provident, maxime dignissimos accusamus.
                </p>
                <div class="btn-groups d-flex flex-lg-row flex-md-row flex-sm-column flex-column">
                    <button type="button" class="btn btn-primary rounded-pill  me-2 mt-2">
                        <i class="fas fa-shopping-cart"></i>
                        Add to My Shortlist
                    </button>
                    <button type="button" class="btn btn-dark rounded-pill text-white me-2 mt-sm-2 mt-2">
                        <i class="fas fa-phone"></i>
                        Call
                    </button> 
                    <button type="button" class="btn btn-dark rounded-pill text-white  me-2 mt-sm-2 mt-2">
                        <i class="fas fa-wallet"></i>
                        Send Email
                    </button>

                </div>
                <h2 class="amenities" >Amenities</h2>
                <div class="icon1"> 
                    <div>
                        <i class="fas fa-wifi">
                        </i>
                        <h6>Wifi</h6>
                    </div>
                    <div>
                        <i class="fas fa-toilet"></i>
                        <h6>toilet</h6>
                    </div>
                    <div>
                        <i class="fas fa-video"></i>
                        <h6>cctv</h6>
                    </div>
                    <div>
                        <i class="fas fa-user-shield"></i>
                        <h6>security</h6>
                    </div>
                    <div>
                        <i class="fas fa-parking"></i>
                        <h6>parking</h6>
                    </div>
                    <!-- <span>
                        <i class="fas fa-procedures"></i>
                    </span> -->
                    <div>
                        <i class="fas fa-bed"></i>
                        <h6>bed</h6>
                    </div>
                </div>
            </div>
           </div>
 
        </div>

    <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  

        <!-- Single item End -->

        @include('frontend.include.footer')   <!-- Option 2: Separate Popper and Bootstrap JS -->

   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- <script src="{{asset('Frontend/assets/js/slick.js')}}"></script>
        <script src="{{asset('Frontend/assets/js/xzoom.js')}}"></script>
        <script>
             $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
                });
            $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: true,
            focusOnSelect: true
            });
        </script> -->

        <script type="text/javascript" src="{{asset('Frontend/assets/js/jqzoom.js')}}"></script> 

        <script type="text/javascript">
        $("#bzoom").zoom({
            zoom_area_width: 300,
            autoplay_interval :3000,
            small_thumbs : 8,
            autoplay : false
        });
        </script>

 

</body>
</html>
