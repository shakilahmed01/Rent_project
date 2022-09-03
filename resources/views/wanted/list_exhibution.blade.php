
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>toletx</title>

	@include('Dashboard.css.css')
</head>
<body>
@include('frontend.header')
	<div class="mobile-menu-overlay"></div>

	<div class="container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Exibution Center Details</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">List Exibution Center</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" id="datetime" href="#" role="button" data-toggle="dropdown">

								</a>
                <script>
                var dt = new Date();
                document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                </script>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- basic table  Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">List Table</h4>

						</div>

					</div>
					<table id="tblStocks" class="table">
						<thead>
							<tr>
                <th scope="col">Id</th>
                <th scope="col">User Name</th>
                <th scope="col">Exibution Name</th>
                <th scope="col">Address</th>
                <th scope="col">Asking Rent/Cost + Service Charge</th>
                <th scope="col">Room Size</th>
                <th scope="col">Room Type</th>
                <th scope="col">Utilities</th>
                <th scope="col">Attached Toilet</th>
                <th scope="col">Attached Varanda </th>
								<th scope="col">Hot water</th>
                <th scope="col">AC</th>
								<th scope="col">Furnished</th>
								<th scope="col">WiFi</th>
								<th scope="col">Cable TV</th>
								<th scope="col">Laundry</th>
                <th scope="col">Dining Facilities</th>
                <th scope="col">Sports Facilities</th>
                <th scope="col">Gym</th>
								<th scope="col">Spa</th>
                <th scope="col">Parking</th>
                <th scope="col">Swimming Pool</th>
                <th scope="col">Stair/Lift</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
              @foreach($lists as $list)
              <tr>
                <th scope="row">{{$list->id}}</th>
                <th scope="row">{{$list->Exibution_Center_relationBetweenUser->name}}</th>
                <td>{{$list->exibution_center_name}}</td>
                <td>{{$list->address}}</td>
                <td>{{$list->price}}</td>
                <td>{{$list->room_size}}</td>
                <td>{{$list->room_type}}</td>
                <td>{{$list->utilities}}</td>
                <td>{{$list->attached_toilet}}</td>
                <td>{{$list->attached_varanda}}</td>
                <td>{{$list->hot_water}}</td>
                <td>{{$list->ac}}</td>
                <td>{{$list->furnished}}</td>
								<td>{{$list->wifi}}</td>
								<td>{{$list->cable_tv}}</td>
								<td>{{$list->laundry}}</td>
                <td>{{$list->dining}}</td>
                <td>{{$list->sports}}</td>
                <td>{{$list->gym}}</td>
                <td>{{$list->spa}}</td>
                <td>{{$list->parking}}</td>
                <td>{{$list->swimmingpool}}</td>
                <td>{{$list->lift}}</td>


                <td>
                <img src="{{ asset('uploads/exibution_centers') }}/{{ $list->photo }}" alt="">
                </td>

              </tr>
          @endforeach

						</tbody>
					</table>

      	</div>
				<!-- basic table  End -->


				</div>
				<!-- Contextual classes End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				toletx By <a href="https://codetreebd.com" target="_blank">codetree</a>
			</div>
		</div>
	</div>
	<!-- js -->
@include('Dashboard.js.js')
</body>
</html>
