
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

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script>
        // Render blocking JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>




        <title>ToletX-F.A.Q.</title>
  </head>
  <body>

    @include('frontend.include.header')

    <!-- FAQ SECTION START -->
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2 class="fs-1">Guest F.A.Q</h2>
                <div class="accordion accordion-flush" id="guestaccordion">
                    <div class="faq_accordion_item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#g-faq1" aria-expanded="false" aria-controls="g-faq1">
                            Host Question #1
                        </button>
                      </h2>
                      <div id="g-faq1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#guestaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quisquam!</div>
                      </div>
                    </div>
                    <div class="faq_accordion_item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#g-faq2" aria-expanded="false" aria-controls="g-faq2">
                          Host Question #2
                        </button>
                      </h2>
                      <div id="g-faq2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#guestaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, odit!</div>
                      </div>
                    </div>
                    <div class="faq_accordion_item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#g-faq3" aria-expanded="false" aria-controls="g-faq3">
                          Host Question #3
                        </button>
                      </h2>
                      <div id="g-faq3" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#guestaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, fugiat?</div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <h2 class="fs-1">Host F.A.Q</h2>
                <div class="accordion accordion-flush" id="hostaccordion">
                    <div class="faq_accordion_item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Guest Question #1
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#hostaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quisquam!</div>
                      </div>
                    </div>
                    <div class="faq_accordion_item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Guest Question #2
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#hostaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, odit!</div>
                      </div>
                    </div>
                    <div class="faq_accordion_item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Guest Question #3
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#hostaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, fugiat?</div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <!-- FAQ SECTION END -->

    @include('frontend.include.footer')
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
