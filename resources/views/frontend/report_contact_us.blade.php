
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/favicon_io/android-chrome-192x192.png')}}"> 

    <!-- Bootstrap CSS --> 

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Custom CSS for header  -->

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/dark.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/responsive.css')}}">  
     
    
     <script>
        //  Render blocking JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>




     <title>ToletX-Report/Contact US</title>
 </head>

 <body>

     @include('frontend.include.header')

     <!-- Section Start -->
     <section class="pt-5 pb-5">
         <div class="container">
             <div class="row">
                 <div class=" col-lg-8 col-md-12 col-sm-12 ">
                     <div class="report-contact-form">
                     <h2>Customer Form</h2>
                     <form class="report-form-main">
                         <div class="input-group mb-3">
                             <span class="input-group-text report-form" id="basic-addon1">
                                 <i class="fas fa-user"></i>
                             </span>
                             <input id="x" type="text" class="form-control report_contact_us_form_control" placeholder="Enter Name" aria-label="name"
                                 aria-describedby="basic-addon1" required>
                         </div>

                         <div class="input-group mb-3">
                             <span class="input-group-text report-form" id="basic-addon1">
                                 <i class="fas fa-at"></i>
                             </span>
                             <input type="email" class="form-control report_contact_us_form_control" placeholder="Enter Email" aria-label="email"
                                 aria-describedby="basic-addon1" required>
                         </div>


                         <div class="input-group mb-3">
                             <span class="input-group-text report-form" for="inputGroupSelect01">
                                 <i class="fas fa-hand-pointer"></i>
                             </span>
                             <select class="form-select report_contact_us_form_control" id="inputGroupSelect01">
                                 <option selected>Choose Subject</option>
                                 <option value="inquiry">Inquiry</option>
                                 <option value="claim">Claim</option>
                                 <option value="complain">Complain</option>
                                 <option value="others">Others</option>
                             </select>
                         </div>

                         <div class="input-group mb-3">

                             <input type="text" class="form-control report_contact_us_form_control" placeholder="If other please specify"
                                 aria-label="name" aria-describedby="basic-addon1">
                         </div>
                         <div class="  mb-3">
                             <textarea class="form-control" placeholder="Your Message" id="exampleFormControlTextarea1"
                                 rows="6" style="height:100px;"></textarea>


                         </div>

                         <div class="input-group mb-3">

                             <button type="submit" class="btn  w-100 btn-primary">Submit</button>
                         </div>

                     </form>

                 </div>
                 </div>
                 <style>

                 </style>
                 <div class="col-md-4 mb-3">

                     @include('frontend.include.advertise')
                 </div>

             </div>
         </div>
     </section>
     <!-- Section End -->

     @include('frontend.include.footer')

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>

 </html>
