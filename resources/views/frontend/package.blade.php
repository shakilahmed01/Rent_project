 

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
    <!-- jQuery CDN -->

 
        <title>ToletX-Packeges</title>

        
    <style>

/* 
body {
  background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
} */
.cardprice {
    transition: box-shadow .2s linear;
    box-shadow: 0px 0px 14px rgba(0,0,0,0.5)!important;
}
.cardprice:hover{
    box-shadow: 0px 0px 30px rgba(0,0,0,0.5)!important;
}
.container {
  /* max-width: 800px; */
}

.pricing-header {
  max-width: 700px;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>  
     
 @include('frontend.include.header')
 <div class="container">
 <div class="pricing-header p-3 pb-md-4 ml-5 ">
      <h4 class="display-5 fw-normal1 my-package">My Package</h4>
      <p class="fs-5 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minus quis odit distinctio omnis corporis mollitia molestiae et corrupti?</p>
    </div>
  <div class="  py-3">
     <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal1">Cost</h1>
        <p class="fs-5 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minus quis odit distinctio omnis corporis mollitia molestiae et corrupti?</p>
      </div> 
 
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
        <div class="card mb-4 rounded-3 cardprice">
          <div class="card-header py-3 text-dark bg-outline-primary border-primary">
            <h4 class="my-0 fw-normal text-center font-weight-bold">Basic</h4>
          </div>
          <div class="card-body pricing_card_body ">
            <h1 class="card-title pricing-card-title text-center">$0<small class="text-muted fw-light">/7days</small></h1>
            
            <ul class="list-unstyled mt-3 mb-4 ml-5">
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum  </li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-xmark mr-2"></i> Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-xmark mr-2"></i> Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-xmark mr-2"></i> Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-xmark mr-2"></i> Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Choose</button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
        <div class="card mb-4 rounded-3 cardprice border-primary">
          <div class="card-header py-3 text-dark bg-outline-primary border-primary">
            <h4 class="my-0 fw-normal text-center font-weight-bold">Standard</h4>
          </div>
          <div class="card-body pricing_card_body">
            <h1 class="card-title pricing-card-title text-center">$15<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4 ml-5">
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum  </li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-xmark mr-2"></i> Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-xmark mr-2"></i> Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Choose</button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
        <div class="card mb-4 rounded-3 cardprice  border-primary">
          <div class="card-header py-3  bg-primary border-primary">
            <h4 class="my-0 fw-normal text-center text-color font-weight-bold">Premium</h4>
          </div>
          <div class="card-body pricing_card_body">
            <h1 class="card-title pricing-card-title text-center">$29<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4 ml-5">
        
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum  </li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Lorem ipsum dolor sit.</li>
              <li class="mb-3"><i class="fa-solid fa-check mr-2"></i>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Choose</button>
          </div>
        </div>
      </div>
    </div> 
</div>
 </div>
    

@include('frontend.include.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
   
  </body>
</html>