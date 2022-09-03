
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



    <title>ToletX-Search</title>
  </head>
  <body>

        @include('frontend.include.header')

                   <!-- Single item Start -->

        <div class="main-wrapperX">
        <div class="containerX">
            <div class="product-divX">
                <div class="product-div-left">
                    <div class="picZoomer">
                        <img src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt="">
                    </div>

                    <ul class="piclist">

                    <div id="carouselExampleControls" class="carousel slide" data-interval="false"  data-bs-interval="false">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                      <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>
                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>
                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>

                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>
                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>
                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>
                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>


                      </div>
                      <div class="carousel-item">

                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>
                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>
                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>
                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>
                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>
                        <li><img class="imgX" src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>

                        <li><img  src="{{ asset('uploads/hostels') }}/{{ $array->photo }}" alt=""></li>

                      </div>

                    </div>
                    <a class="carousel-control-prev"  id="pr" href="#carouselExampleControls" role="button" data-slide="prev">
                      <i class="fas fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next"  id="nxt"  href="#carouselExampleControls" role="button" data-slide="next">
                      <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only ">Next</span> -->
                      <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>



                    </ul>
                    <ul>
                        <div class="modalZ">
                            <a href="#" class="btnZ"><img class="cls"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSJt2OcLwV-5HSGU1Ux_6hsZ58BuXR1aIbBQ&usqp=CAU" alt=""> </a>
                                <div class="video-container">
                                    <span class="close">
                                        &#10006;
                                    </span>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dvSD1EAlAUQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                </div>

                        </div>
                    </ul>

                </div>





    <div class="product-div-right">
        <span class="product-name">
            {{$array->address}}
        </span>
        <span class="product-price">
            {{$array->price}}BDT
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
        <div class="btn-groups">
            <button type="button" class="add-cart-btn"><i class="fas fa-shopping-cart"></i>Book for me</button>
            <button type="button" class="buy-now-btn"><i class="fas fa-phone"></i>Call</button>
            <!-- <button type="button" class="buy-now-btn"><i class="fas fa-phone-alt"></i>Call</button> -->
            <button type="button" class="email"><i class="fas fa-wallet"></i>Send Email</button>

        </div>
        <h2 class="amenities" >Amenities</h2>
        <div class="icon1">

            <div>
                <i class="fas fa-tools">
                </i>
                <h6>Utilities</h6>
                {{$array->utilities}}
            </div>
            <div>
                <i class="fas fa-elevator"></i>
                <h6>Lift</h6>
                {{$array->lift}}
            </div>
            <div>
                <i class="fas fa-video"></i>
                <h6>Hot Water</h6>
                {{$array->hot_water}}
            </div>
            <div>
                <i class="fas fa-soap"></i>
                <h6>Laundry</h6>
                {{$array->laundry}}
            </div>
            <div>
                <i class="fas fa-tv"></i>
                <h6>Cable Tv</h6>
                {{$array->cable_tv}}
            </div>
            <!-- <span>
                <i class="fas fa-procedures"></i>
            </span> -->
            <div>
                <i class="fas fa-wind"></i>
                <h6>AC</h6>
                {{$array->ac}}
            </div>
        </div>
        <br>
        <div class="icon1">
          <div>
              <i class="fas fa-wifi">
              </i>
              <h6>Wifi</h6>
              {{$array->wifi}}
          </div>
          <div>
              <i class="fas fa-toilet"></i>
              <h6>toilet</h6>
              {{$array->attached_toilet}}
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
              {{$array->parking}}
          </div>
          <!-- <span>
              <i class="fas fa-procedures"></i>
          </span> -->
          <div>
              <i class="fas fa-chair"></i>
              <h6>Furnished</h6>
              {{$array->furnished}}
          </div>
        </div>

    </div>

            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.picZoomer').picZoomer();

            $('.piclist li').on('click',function(event){
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src',$pic.attr('src'));
            });
        });
    </script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



<script>
    const btnZ = document.querySelector('.btnZ');

    const videoContainer = document.querySelector('.video-container');
const close =document.querySelector('.close')


btnZ.addEventListener('click', ()=>{
    videoContainer.classList.add('show');
})

close.addEventListener('click', ()=>{
    videoContainer.classList.remove('show');
})


</script>



<script>

;(function($){
	$.fn.picZoomer = function(options){
		var opts = $.extend({}, $.fn.picZoomer.defaults, options),
			$this = this,
			$picBD = $('<div class="picZoomer-pic-wp"></div>').css({'width':opts.picWidth+'px', 'height':opts.picHeight+'px'}).appendTo($this),
			$pic = $this.children('img').addClass('picZoomer-pic').appendTo($picBD),





			$cursor = $('<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>').appendTo($picBD),
			cursorSizeHalf = {w:$cursor.width()/2 ,h:$cursor.height()/2},
			$zoomWP = $('<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>').appendTo($this),
			$zoomPic = $zoomWP.find('.picZoomer-zoom-pic'),
			picBDOffset = {x:$picBD.offset().left,y:$picBD.offset().top};


		opts.zoomWidth = opts.zoomWidth||opts.picWidth;
		opts.zoomHeight = opts.zoomHeight||opts.picHeight;
		var zoomWPSizeHalf = {w:opts.zoomWidth/2 ,h:opts.zoomHeight/2};

		//初始化zoom容器大小
		$zoomWP.css({'width':opts.zoomWidth+'px', 'height':opts.zoomHeight+'px'});
		$zoomWP.css(opts.zoomerPosition || {top: 0, left: opts.picWidth+30+'px'});
		//初始化zoom图片大小
		$zoomPic.css({'width':opts.picWidth*opts.scale+'px', 'height':opts.picHeight*opts.scale+'px'});

		//初始化事件
		$picBD.on('mouseenter',function(event){
			$cursor.show();
			$zoomWP.show();
			$zoomPic.attr('src',$pic.attr('src'))
		}).on('mouseleave',function(event){
			$cursor.hide();
			$zoomWP.hide();
		}).on('mousemove', function(event){
			var x = event.pageX-picBDOffset.x,
				y = event.pageY-picBDOffset.y;

			$cursor.css({'left':x-cursorSizeHalf.w+'px', 'top':y-cursorSizeHalf.h+'px'});
			$zoomPic.css({'left':-(x*opts.scale-zoomWPSizeHalf.w)+'px', 'top':-(y*opts.scale-zoomWPSizeHalf.h)+'px'});

		});
		return $this;

	};
	$.fn.picZoomer.defaults = {
		picWidth: 378,
		picHeight: 320,
		scale: 2.5,
		zoomerPosition: {top: '0', left: '470px'}
	,
		zoomWidth: 600,
		zoomHeight: 500
	};
})(jQuery);



</script>

        <!-- Single item End -->

        @include('frontend.include.footer')   <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
