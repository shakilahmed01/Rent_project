<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>ToletX</title>

@include('Dashboard.css.css')
</head>
<body>


	<div class="mobile-menu-overlay"></div>

	<div class="container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Hostel</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Hostel</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Fillup the Input Fields</h4>
							<p class="mb-30">Adding Hostel Details</p>
						</div>

					</div>
					@if ($message = Session::get('success'))
												<div class="alert alert-success alert-block">
														<button type="button" class="close" data-dismiss="alert">×</button>
																<strong>{{ $message }}</strong>
												</div>
												@endif

												@if (count($errors) > 0)
														<div class="alert alert-danger">
																<strong>Whoops!</strong> There were some problems with your input.
																<ul>
																		@foreach ($errors->all() as $error)
																				<li>{{ $error }}</li>
																		@endforeach
																</ul>
														</div>
												@endif
					<form method="POST" action="{{ route('post_hostel_information') }}" enctype="multipart/form-data">
						@csrf
						<div class="col-md-6">
								<input id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>

								@error('user_id')
										<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										</span>
								@enderror
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Post Type</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="post_type">
									<option selected="">Choose...</option>
									<option value="Wanted">Wanted</option>
									<option value="Rented">Rented</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Title</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="title" placeholder="Title">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="date" name="date" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Mobile Number</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="phone">
									@foreach($lists as $list)
									<option selected>Choose number</option>
									<option value="{{$list->phone}}">{{$list->phone}}</option>
									<option value="{{$list->phone1}}">{{$list->phone1}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Price</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="price" placeholder="Price" type="numeric">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Service Charge</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="s_charge" placeholder="Service Charge" value="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Division</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12 select2" type="input"
																		data-placeholder="Division" id="division" name="division">
									<option selected>Choose Division</option>
									@foreach($divisions as $list)
									<option value="{{$list->name}}">{{$list->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">District</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12 select2" type="input"
																		data-placeholder="District" id="distric" name="district">
									<option selected>Choose District</option>
									@foreach($districs as $list)
									<option value="{{$list->name}}">{{$list->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Thana</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12 select2" type="input"
																		data-placeholder="Thana" id="thana" name="thana">
									<option selected>Choose Thana</option>
									@foreach($thanas as $list)
									<option value="{{$list->name}}">{{$list->name}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Address</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="address" placeholder="Location" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Hostel Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="hostel_name" placeholder="Hostel Name" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Room Size</label>

							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="room_size" placeholder="Type in sqft" type="number">
							</div>
						</div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Room Type</label>
              <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="room_type">
                  <option selected="">Choose...</option>
                  <option value="Master bed">Master bed</option>
                  <option value="Single bed">Single bed</option>
                  <option value="Classic">Classic</option>
                </select>
              </div>
            </div>

						<div class="form-group row">
							<label for="description" class="col-sm-12 col-md-2 col-form-label">Description of your service:</label>

							<div class="mb-3 col-sm-12 col-md-10">
							<textarea class="form-control" id="description" rows="3" name="description" placeholder="Describe something about your service..."></textarea>
							</div>
						</div>

						<div class="form-group">
									<div class="weight-600 mb-3">Amneties</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" name="wifi" value="Wifi" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Wifi</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" name="attached_toilet" value="Attached Toilet" class="custom-control-input" id="customCheck2">
										<label class="custom-control-label" for="customCheck2">Attached Toilet</label>
									</div>

									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" name="attached_varanda" value="Attached Varanda" class="custom-control-input" id="customCheck4">
										<label class="custom-control-label" for="customCheck4">Attached Varanda</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" name="hot_water" value="Hot Water" class="custom-control-input" id="customCheck5">
										<label class="custom-control-label" for="customCheck5">Hot Water</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" name="lift" value="Lift" class="custom-control-input" id="customCheck6">
										<label class="custom-control-label" for="customCheck6">Lift/Elevator</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="dining" value="Dining facilities" class="custom-control-input" id="customCheck15">
                    <label class="custom-control-label" for="customCheck15">Dining facilities</label>
                  </div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="sports" value="Sports facilities" class="custom-control-input" id="customCheck16">
                    <label class="custom-control-label" for="customCheck16">Sports facilities</label>
                  </div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="gym" value="Gym" class="custom-control-input" id="customCheck13">
                    <label class="custom-control-label" for="customCheck13">Gym</label>
                  </div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="fire_exit" value="Fire exit" class="custom-control-input" id="customCheck14">
                    <label class="custom-control-label" for="customCheck14">Fire Exit</label>
                  </div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" name="furnished" value="Furnished" class="custom-control-input" id="customCheck7">
										<label class="custom-control-label" for="customCheck7">Furnished</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" name="ac" value="Ac" class="custom-control-input" id="customCheck8">
										<label class="custom-control-label" for="customCheck8">AC</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" name="cable_tv" value="Cable tv" class="custom-control-input" id="customCheck9">
										<label class="custom-control-label" for="customCheck9">Cable tv</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" name="laundry" value="Laundry" class="custom-control-input" id="customCheck10">
										<label class="custom-control-label" for="customCheck10">Laundry</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" name="parking" value="Parking" class="custom-control-input" id="customCheck11">
										<label class="custom-control-label" for="customCheck11">Parking</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div>Photo</div>
							<div class="input-group mb-3">
								<input type="file" class="form-control" id="inputGroupFile02"  name="photo" value="" >
								<label class="input-group-text" for="inputGroupFile02" id="prepend_upload">Upload</label>
							</div>
						</div>

						<div>
							<div>Child Photo 1</div>
							<div class="input-group mb-3">
								<input type="file" class="form-control" id="inputGroupFile02"  name="photo1" value="" >
								<label class="input-group-text" for="inputGroupFile02" id="prepend_upload">Upload</label>
							</div>
						</div>

						<div>
							<div>Child Photo 2</div>
							<div class="input-group mb-3">
								<input type="file" class="form-control" id="inputGroupFile02"  name="photo2" value="" >
								<label class="input-group-text" for="inputGroupFile02" id="prepend_upload">Upload</label>
							</div>
						</div>

						<div>
							<div>Child Photo 3</div>
							<div class="input-group mb-3">
								<input type="file" class="form-control" id="inputGroupFile02"  name="photo3" value="" >
								<label class="input-group-text" for="inputGroupFile02" id="prepend_upload">Upload</label>
							</div>
						</div>

						<div>
							<div>Child Photo 4</div>
							<div class="input-group mb-3">
								<input type="file" class="form-control" id="inputGroupFile02"  name="photo4" value="" >
								<label class="input-group-text" for="inputGroupFile02" id="prepend_upload">Upload</label>
							</div>
						</div>

						<div>
							<div>Child Photo 5</div>
							<div class="input-group mb-3">
								<input type="file" class="form-control" id="inputGroupFile02"  name="photo5" value="" >
								<label class="input-group-text" for="inputGroupFile02" id="prepend_upload">Upload</label>
							</div>
						</div>

						<div>
							<div>Child Photo 6</div>
							<div class="input-group mb-3">
								<input type="file" class="form-control" id="inputGroupFile02"  name="photo6" value="" >
								<label class="input-group-text" for="inputGroupFile02" id="prepend_upload">Upload</label>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Paste Youtube Video Iframe Link</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="video" placeholder="Youtube Link">
							</div>
						</div>
						<div class="form-group row">
							<a href="https://www.youtube.com/watch?v=FAY1K2aUg5g" target="_blank" class="link-info mx-auto" style="text-decoration: underline;">
							If you don't know how to get iframe link from your youtube video, then click here to get help
							</a>
						</div>
						<button class="btn btn-primary" type="submit">Submit</button>



					</form>

				</div>
				<!-- Default Basic Forms End -->



			<div class="collapse collapse-box" id="form-grid-form" >

			<div class="footer-wrap pd-20 mb-20 card-box">
				toletx By <a href="https://github.com/dropways" target="_blank">Codetree</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('Dashboard/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('Dashboard/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('Dashboard/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('Dashboard/vendors/scripts/layout-settings.js')}}"></script>
	<!-- select by input type -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

	                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	                    <script type="text/javascript">
	                          $("#division").select2({
	                                placeholder: "Division",
	                                allowClear: true
	                            });
	                            $("#distric").select2({
	                                  placeholder: "District",
	                                  allowClear: true
	                              });
																$("#thana").select2({
		                                  placeholder: "thana",
		                                  allowClear: true
		                              });
	                    </script>
	 <!-- End select by input type -->
</body>
</html>
