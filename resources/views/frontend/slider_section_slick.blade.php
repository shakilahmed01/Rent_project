 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
         integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!--Custom CSS for header  -->
     <link rel="stylesheet" href="{{asset('Frontend/assets/css/slick-theme.css')}}">


     <link rel="stylesheet" href="{{asset('Frontend/assets/css/slick.css')}}">




     <!-- jQuery CDN -->


     <title>slider_section_slick</title>
 </head>

 <body>

     <!-- slider section -->
     <section>
         <div class="slider-container container-fluid responsive" style="margin-top:200px;">
             <div class="card" style="width: 118rem;">
                 <img class="card-img-top" src="{{asset('Frontend/assets/img/header/s1.jpg')}}" alt="Card image cap">
                 <div class="card-body">
                     <h5 class="card-title">USD: 1200/Night</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                         card's content.</p>
                 </div>
                 
                 <div class="card-body">
                     <a href="#" class="card-link">Card link</a>
                     <a href="#" class="card-link">Another link</a>
                 </div>
             </div> 


             <div class="card mx-5 px-5" style="width: 18rem;">
                 <img class="card-img-top" src="{{asset('Frontend/assets/img/header/s2.jpg')}}" alt="Card image cap">
                 <div class="card-body">
                     <h5 class="card-title">USD: 1200/Night</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                         card's content.</p>
                 </div>
                 
                 <div class="card-body">
                     <a href="#" class="card-link">Card link</a>
                     <a href="#" class="card-link">Another link</a>
                 </div>
             </div>
             <div class="card mx-5 px-5" style="width: 18rem;">
                 <img class="card-img-top" src="{{asset('Frontend/assets/img/header/s3.jpg')}}" alt="Card image cap">
                 <div class="card-body">
                     <h5 class="card-title">USD: 1200/Night</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                         card's content.</p>
                 </div>
                
                 <div class="card-body">
                     <a href="#" class="card-link">Card link</a>
                     <a href="#" class="card-link">Another link</a>
                 </div>
             </div>
             <div class="card mx-5 px-5" style="width: 18rem;">
                 <img class="card-img-top" src="{{asset('Frontend/assets/img/header/s4.jpg')}}" alt="Card image cap">
                 <div class="card-body">
                     <h5 class="card-title">USD: 1200/Night</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                         card's content.</p>
                 </div> 
                 <div class="card-body">
                     <a href="#" class="card-link">Card link</a>
                     <a href="#" class="card-link">Another link</a>
                 </div>
             </div>

         </div>
     </section>

     <!-- slick -->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
         integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
         crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
         integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
         crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="{{asset('Frontend/assets/js/my_slider.js')}}"></script>

 </body>

 </html>