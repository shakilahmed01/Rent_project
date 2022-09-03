
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
            <img class="xzoom zoom_main" id="xzoom-default" src=" {{ asset('Frontend/assets/img/single_pg/house_1.jpg') }}" xoriginal=" {{ asset('Frontend/assets/img/single_pg/house_1.jpg') }}" />
            <div class="xzoom-thumbs" style="display:flex; margin-top:10px;">
              <a href=" {{ asset('Frontend/assets/img/single_pg/house_2.jpg') }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('Frontend/assets/img/single_pg/house_2.jpg') }}"  xpreview=" {{ asset('Frontend/assets/img/single_pg/house_2.jpg') }}"  >
              </a>
              <a href=" {{ asset('Frontend/assets/img/single_pg/house_3.jpg') }}">
                <img class="xzoom-gallery thumb" width="50" src=" {{ asset('Frontend/assets/img/single_pg/house_3.jpg') }}"  >
              </a>
              <a href="{{ asset('Frontend/assets/img/single_pg/house_4.jpg') }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('Frontend/assets/img/single_pg/house_4.jpg') }}"  >
              </a>
              <a href="{{ asset('Frontend/assets/img/single_pg/house_5.jpg') }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('Frontend/assets/img/single_pg/house_5.jpg') }}"  >
              </a>
              <a href="{{ asset('Frontend/assets/img/single_pg/house_6.jpg') }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('Frontend/assets/img/single_pg/house_6.jpg') }}"  >
              </a>
              <a href="{{ asset('Frontend/assets/img/single_pg/house_7.jpg') }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('Frontend/assets/img/single_pg/house_7.jpg') }}"  >
              </a>
              <a href="{{ asset('Frontend/assets/img/single_pg/house_8.jpg') }}">
                <img class="xzoom-gallery thumb" width="50" src="{{ asset('Frontend/assets/img/single_pg/house_8.jpg') }}"  >
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
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ratio  ratio-16x9 px-3">
                    <iframe width="460" height="315" src="https://www.youtube.com/embed/xgZd_vFNkUs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <img  src="{{asset('Frontend/assets/img/profile/person2.png')}}" class="rounded-circle single-pg-img"  alt="" srcset="">
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
                    <h2 class="fw-bold">MACIMMO MICELE</h2>


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
                        <span> <strong>Post Type:</strong>   Rented</span>
                    </div>
                    <div class=" ">
                        <span> <strong>Size:</strong>   720sqft</span>
                    </div>
                    <div class=" ">
                        <span> <strong>Rent From:</strong>  01/02/2022</span>
                    </div>
                      
                </div>
                <br>
                <span class="product-name">
                    The best journey takes you Home.
                </span>
                <span class="product-price">
                    Rent: 25000/=
                </span>
                <span class="product-price">
                    Service Charge: 5000/=
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
                    <button type="button" class="btn btn-primary text-white rounded-pill  me-2 mt-2">
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
                <div class="icon1 flex-wrap "> 
                    <div class="m-2">
                        <i class="fas fa-wifi">
                        </i>
                        <h6>Wifi</h6>
                    </div>
                    <div class="m-2">
                        <i class="fas fa-toilet"></i>
                        <h6>toilet</h6>
                    </div>
                    <div class="m-2">
                        <i class="fas fa-video"></i>
                        <h6>cctv</h6>
                    </div>
                    <div class="m-2">
                        <i class="fas fa-user-shield"></i>
                        <h6>security</h6>
                    </div>
                    <div class="m-2">
                        <i class="fas fa-parking"></i>
                        <h6>parking</h6>
                    </div>
                    <!-- <span>
                        <i class="fas fa-procedures"></i>
                    </span> -->
                    <div class="m-2">
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

        <script type="text/javascript" src="{{asset('Frontend/assets/js/foundation.min.js')}}"></script> 
        <script type="text/javascript" src="{{asset('Frontend/assets/js/setup.js')}}"></script> 
    <script type="text/javascript" src="{{asset('Frontend/assets/js/xzoom.min.js')}}"></script>  

        

 

</body>
</html>
