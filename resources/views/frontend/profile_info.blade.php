
                <!-- profile info -->
                @if(Auth::user())
                <style>
    .img-img {
        transition: all .2s linear;
    }

    .img-img:hover {
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
</style>
                <div class="col-md-4 center-block " >
                    <div class="row profile  ml-5">
                          <a  href="{{route('profile')}}" class="img-a ">
                            
                            <div class="text-center">
                                        @if (auth()->user()->photo)
                                        <img src="{{asset('public/uploads/registers') }}/{{(Auth::user()->photo)}}" class="rounded-circle mx-auto img-img" alt="" srcset="">
                                        
                                        @else
                                        <img src="{{ auth()->user()->avatar}}" class="rounded-circle mx-auto img-img" alt="" srcset="">
                                        @endif
                                        <i class="fas fa-edit edit edit-img-icon"></i>
                                    </div>


                          </a>
                          <!-- <a href="#" class="edit-img-anchor">
                            <i class="fas fa-edit edit edit-img-icon"></i>
                          </a>  -->

                        </div>
                        <div class="name">
	                            <h3 class="title">{{Auth::user()->name}}</h3>

								<h6>hello ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, dolorum.</h6>
								<h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, dolorum.</h6>
								<h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, dolorum.</h6>

               <div class=" text-center">
                  <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 1" >
                      <i class="fas fa-medal"></i>
                    </a>
                    <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 2" >
                      <i class="fas fa-medal"  ></i>
                    </a>
                    <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 3" >
                      <i class="fas fa-medal"></i>
                    </a>
               </div>

	                      </div>
                       <p class=profilen1 id="profile-name text-center">Mickel</p>
                    </div>

                    <script>
     $(function () {
      $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
                    @else

                    @endif

<!-- Enable tooltop -->


