<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>ToletX</title>

@include('Dashboard.css.css')
</head>
<body>
@include('Dashboard.preloader.preloader')

@include('Dashboard.header.header')

@include('Dashboard.menubar.menubar')

@include('Dashboard.menubar.leftsidemenu')

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Pond</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Update Pond</li>
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
							<p class="mb-30">Updating Pond Details</p>
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
					<form method="POST" action="{{ route('pond_update') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
              <input type="hidden" name="id" value="{{$list->id}}">

						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Post Type</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$list->post_type}}" name="address" placeholder="Location" type="text" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">User ID</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$list->user_id}}" name="address" placeholder="Location" type="text" readonly>
							</div>
						</div>
            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Address</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$list->address}}" name="address" placeholder="Location" type="text">
							</div>
						</div>
            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Price</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="price" value="{{$list->price}}" placeholder="Price" type="numeric">
							</div>
						</div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Purposes</label>
              <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" placeholder="" name="purpose" value="{{$list->purpose}}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Water Level</label>
              <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" placeholder="" name="water_level" value="{{$list->water_level}}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Pond Area</label>
              <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" placeholder="" name="pond_area" value="{{$list->pond_area}}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Road Width</label>
              <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" placeholder="" name="road_width" value="{{$list->road_width}}">
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <label class="weight-600">Availibility</label>

                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="drainage_system" value="{{$list->drainage_system}}" class="form-control" id="customCheck6">
                    <label class="custom-control-label" for="customCheck6">Drainage System</label>
                  </div>


              </div>
            </div>
            <div class="form-group form-float">
                          <div class="card">

                             <div class="body">
                                 <input type="file" class="dropify" name="photo"  >
                                 <img src="{{ asset('uploads/ponds') }}/{{ $list->photo }}" alt="">
                             </div>
                         </div>
                        </div>

						<button class="btn btn-primary" type="submit">Update</button>



					</form>

				</div>
				<!-- Default Basic Forms End -->



			<div class="collapse collapse-box" id="form-grid-form" >

			<div class="footer-wrap pd-20 mb-20 card-box">
				toletx By <a href="https://codetreebd.com" target="_blank">Codetree</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('Dashboard/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('Dashboard/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('Dashboard/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('Dashboard/vendors/scripts/layout-settings.js')}}"></script>
</body>
</html>
