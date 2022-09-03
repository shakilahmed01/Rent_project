
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
								<h4>Hotel Details</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">List Hotel</li>
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
					<table id="tblStocks"  class="table">
						<thead>
							<tr>
                <th scope="col">Id</th>
                <th scope="col">hotel Name</th>
                <th scope="col">hotel Location</th>
                <th scope="col">Wifi</th>
                <th scope="col">Bathroom</th>
                <th scope="col">CCtv</th>
                <th scope="col">Furnished</th>
                <th scope="col">Lift</th>
                <th scope="col">Security</th>
                <th scope="col">Parking</th>
                <th scope="col">Price</th>
                <th scope="col">Guest Count</th>
                <th scope="col">Image</th>

							</tr>
						</thead>
						<tbody>
              @foreach($lists as $list)
              <tr>
                <th scope="row">{{$list->id}}</th>
                <td>{{$list->hotel_name}}</td>
                <td>{{$list->location}}</td>
                <td>{{$list->wifi}}</td>
                <td>{{$list->bathroom}}</td>
                <td>{{$list->cctv}}</td>
                <td>{{$list->furnished}}</td>
                <td>{{$list->lift}}</td>
                <td>{{$list->security}}</td>
                <td>{{$list->parking}}</td>
                <td>{{$list->price}}</td>
                <td>{{$list->guest_count}}</td>

                <td>
                <img src="{{ asset('uploads/hotels') }}/{{ $list->photo }}" alt="">
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
				toletx By <a href="https://github.com/dropways" target="_blank">codetree</a>
			</div>
		</div>

	<!-- js -->
@include('Dashboard.js.js')

</body>
</html>
