@extends('layouts.master')
@section('content')

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
								<h4>User Information</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Update User Information</li>
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
							<p class="mb-30">Updating User Details</p>
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
                        <form method="POST" action="{{ route('building_update') }}" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group row">
                            <input type="hidden" name="id" value="{{$list->id}}">

                          </div>

                          <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Post Type</label>
                            <div class="col-sm-12 col-md-10">
                              <input class="form-control" value="{{$list->post_type}}" name="post_type" placeholder="" type="text" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">User ID</label>
                            <div class="col-sm-12 col-md-10">
                              <input class="form-control" value="{{$list->user_id}}" name="user_id" placeholder="Location" type="text" readonly>
                            </div>
                          </div>
													<div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                            <div class="col-sm-12 col-md-10">
                              <input class="form-control" value="{{$list->title}}" name="title" placeholder="title" type="text" >
                            </div>
                          </div>
													<div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Date</label>
                            <div class="col-sm-12 col-md-10">
                              <input class="form-control" value="{{$list->date}}" name="date" placeholder="" type="text" >
                            </div>
                          </div>
													<div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">phone</label>
                            <div class="col-sm-12 col-md-10">
                              <input class="form-control" value="{{$list->phone}}" name="phone" placeholder="" type="text" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Address</label>
                            <div class="col-sm-12 col-md-10">
                              <input class="form-control" value="{{$list->address}}" name="address" placeholder="Location" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Building Name</label>
                            <div class="col-sm-12 col-md-10">
                              <input class="form-control" value="{{$list->building_name}}" name="building_name" placeholder="name" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Price</label>
                            <div class="col-sm-12 col-md-10">
                              <input class="form-control" name="price" value="{{$list->price}}" placeholder="Price" type="numeric">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Type</label>
                            <div class="col-sm-12 col-md-10">
                              <input type="text" class="form-control" placeholder="" name="type" value="{{$list->type}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Size</label>
                            <div class="col-sm-12 col-md-10">
                              <input type="text" class="form-control" placeholder="" name="size" value="{{$list->size}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Hieght</label>
                            <div class="col-sm-12 col-md-10">
                              <input type="text" class="form-control" placeholder="" name="hieght" value="{{$list->hieght}}">
                            </div>
                          </div>

													<div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                            <div class="col-sm-12 col-md-10">
                              <input type="text" class="form-control" placeholder="" name="description" value="{{$list->description}}">
                            </div>
                          </div>



                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-6 col-sm-12">
                                <label class="weight-600">Availibility</label>
                                <div class="custom-control custom-checkbox mb-5">
                                  <input type="text" name="electricity" value="{{$list->electricity}}" class="form-control" id="customCheck1">
                                  <label class="custom-control-label" for="customCheck1">Electricity</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                  <input type="text" name="gas" value="{{$list->gas}}" class="form-control" id="customCheck2">
                                  <label class="custom-control-label" for="customCheck2">Gas</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                  <input type="text" name="water" value="{{$list->water}}" class="form-control" id="customCheck3">
                                  <label class="custom-control-label" for="customCheck3">Water</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                  <input type="text" name="parking" value="{{$list->parking}}" class="form-control" id="customCheck4">
                                  <label class="custom-control-label" for="customCheck4">Parking</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                  <input type="text" name="lift" value="{{$list->lift}}" class="form-control" id="customCheck5">
                                  <label class="custom-control-label" for="customCheck5">Lift</label>
                                </div>



                            </div>
                          </div>
													<div class="form-group form-float">
																<div class="card">

																	 <div class="body">
																			 <input type="file" class="dropify" name="photo"  >
																			 <img src="{{ asset('public/uploads/buildings') }}/{{ $list->photo }}" alt="">
																	 </div>
															 </div>
													</div>
													<div class="form-group form-float">
																<div class="card">

																	 <div class="body">
																			 <input type="file" class="dropify" name="photo1"  >
																			 <img src="{{ asset('public/uploads/buildings') }}/{{ $list->photo1 }}" alt="">
																	 </div>
															 </div>
													</div>
													<div class="form-group form-float">
																<div class="card">

																	 <div class="body">
																			 <input type="file" class="dropify" name="photo2"  >
																			 <img src="{{ asset('public/uploads/buildings') }}/{{ $list->photo2 }}" alt="">
																	 </div>
															 </div>
													</div>
													<div class="form-group form-float">
																<div class="card">

																	 <div class="body">
																			 <input type="file" class="dropify" name="photo3"  >
																			 <img src="{{ asset('public/uploads/buildings') }}/{{ $list->photo3 }}" alt="">
																	 </div>
															 </div>
													</div>
													<div class="form-group form-float">
																<div class="card">

																	 <div class="body">
																			 <input type="file" class="dropify" name="photo4"  >
																			 <img src="{{ asset('public/uploads/buildings') }}/{{ $list->photo4 }}" alt="">
																	 </div>
															 </div>
													</div>
													<div class="form-group form-float">
																<div class="card">

																	 <div class="body">
																			 <input type="file" class="dropify" name="photo5"  >
																			 <img src="{{ asset('public/uploads/buildings') }}/{{ $list->photo5 }}" alt="">
																	 </div>
															 </div>
													</div>
													<div class="form-group form-float">
																<div class="card">

																	 <div class="body">
																			 <input type="file" class="dropify" name="photo6"  >
																			 <img src="{{ asset('public/uploads/buildings') }}/{{ $list->photo6 }}" alt="">
																	 </div>
															 </div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Video Link</label>
														<div class="col-sm-12 col-md-10">
															<input type="text" class="form-control" placeholder="Iframe Video Link" name="video" value="{{$list->video}}">
														</div>
													</div>
                          <button class="btn btn-primary" type="submit">Update</button>



                        </form>


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
@endsection
